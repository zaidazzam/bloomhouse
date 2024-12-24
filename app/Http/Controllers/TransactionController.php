<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ProductProduct;
use App\Models\TransactionDetail;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:product_product,id',
            'products.*.quantity' => 'required|integer|min:1'
        ]);
        $data = $request->validate([
            'email'=> 'required',
            'shipping_country' => 'required',
            'shipping_first_name' => 'required',
            'shipping_last_name' => 'required',
            'shipping_phone_number' => 'required|numeric',
            'shipping_data_company' => 'required',
            'shipping_data_address' => 'required',
            'shipping_data_provinsi' => 'required',
            'shipping_data_city' => 'required',
            'shipping_data_zip' => 'required|numeric',
            'bill_data_country' => 'nullable',
            'bill_data_firstname' => 'nullable',
            'bill_data_lastname' => 'nullable',
            'bill_data_phone' => 'nullable',
            'bill_data_company' => 'nullable',
            'bill_data_address' => 'nullable',
            'bill_data_provinsi' => 'nullable',
            'bill_data_city' => 'nullable',
            'bill_data_zip' => 'nullable',
            'deliv_date' => 'required',
            'deliv_schedule' => 'required',
            'deliv_note' => 'nullable' 
        ]);
        

        if($request->use_for_billing_address){
            $data['bill_data_firstname'] = $data['shipping_first_name'];
            $data['bill_data_lastname'] = $data['shipping_last_name'];
            $data['bill_data_phone'] = $data['shipping_phone_number'];
            $data['bill_data_company'] = $data['shipping_data_company'];
            $data['bill_data_address'] = $data['shipping_data_address'];
            $data['bill_data_provinsi'] = $data['shipping_data_provinsi'];
            $data['bill_data_city'] = $data['shipping_data_city'];
            $data['bill_data_zip'] = $data['shipping_data_zip'];
            $data['bill_data_country'] = $data['shipping_data_zip'];
        }

        $transaction = Transaction::create($data);

        $totalAmount = 0;

        foreach ($data['products'] as $product) {
            $productModel = ProductProduct::findOrFail($product['product_id']);
            $subtotal = $productModel->price * $product['quantity'];

            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'product_id' => $productModel->id,
                'quantity' => $product['quantity'],
                'unit_price' => $productModel->price,
                'subtotal' => $subtotal,
            ]);

            $totalAmount += $subtotal;
        }

        $transaction->update(['total_amount' => $totalAmount]);


        $midtransResponse = $this->createTransaction($transaction);

        $transaction->update([
            'midtrans_order_id' => $midtransResponse->order_id,
            'midtrans_redirect_url' => $midtransResponse->redirect_url,
        ]);

        return response()->json([
            'message' => 'Transaction created successfully',
            'redirect_url' => $transaction->midtrans_redirect_url,
        ]);
    }


    public function createTransaction($transaction)
    {
        Config::$serverKey = config('serverKey');
        Config::$isProduction = config('isProduction');
        Config::$isSanitized = config('isSanitized');
        Config::$is3ds = config('is3ds');
        $payload = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => $transaction->total_amount,
            ],
            'customer_details' => [
                'first_name' => $transaction->user->name,
                'email' => $transaction->user->email,
            ],
            'item_details' => $transaction->details->map(function ($detail) {
                return [
                    'id' => $detail->product_id,
                    'price' => $detail->unit_price,
                    'quantity' => $detail->quantity,
                    'name' => $detail->product->name,
                ];
            })->toArray(),
        ];

        return Snap::createTransaction($payload);
    }

    public function callback(Request $request)
    {
        $data = $request->all();

        $transaction = Transaction::where('id', $data['order_id'])->first();

        if ($data['transaction_status'] === 'capture' || $data['transaction_status'] === 'settlement') {
            $transaction->update(['payment_status' => 'paid']);
        } elseif ($data['transaction_status'] === 'deny') {
            $transaction->update(['payment_status' => 'failed']);
        }

        return response()->json(['message' => 'Callback processed successfully']);
    }
}
