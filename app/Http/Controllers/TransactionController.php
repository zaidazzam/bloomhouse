<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ProductProduct;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'products' => 'required|array',
            'email' => 'required|email',
            'bill_country' => 'nullable',
            'bill_company' => 'nullable',
            'bill_firstName' => 'required',
            'bill_lastName' => 'required',
            'bill_phoneNumber' => 'required|numeric',
            'bill_address' => 'nullable',
            'bill_province' => 'nullable',
            'bill_city' => 'nullable',
            'bill_subdistrict' => 'nullable',
            'delivery_address' => 'required',
            'delivery_firstName' => 'required',
            'delivery_lastName' => 'required',
            'delivery_date' => 'required',
            'delivery_schedule_address' => 'required',
            'delivery_schedule' => 'required',
            'delivery_phone' => 'required',
            'delivery_note_textarea' => 'nullable',
            'total_amount' => 'required',
            'payment_status' => 'nullable',
            'midtrans_order_id' => 'nullable',
            'midtrans_redirect_url' => 'nullable',
        ]);

        $data = [
            'email' => $request->email ,
            'shipping_country' => 'Indonesia',
            'shipping_data_company' => 'null',
            'shipping_data_provinsi' => 'null',
            'shipping_data_city' => 'null',
            'shipping_data_zip' => 'null',
            'shipping_first_name' => $request->delivery_firstName,
            'shipping_last_name' => $request->delivery_lastName,
            'shipping_phone_number' => $request->delivery_phone,
            'shipping_data_address' => $request->delivery_address,
            'bill_data_firstname' => $request->bill_firstName,
            'bill_data_lastname' => $request->bill_lastName,
            'bill_data_phone' => $request->bill_phoneNumber,
            'bill_data_company' => $request->bill_company,
            'bill_data_address' => $request->bill_address,
            'bill_data_provinsi' => $request->bill_province,
            'bill_data_city' => $request->bill_city,
            'bill_data_zip' => $request->bill_subdistrict,
            'deliv_date' => $request->delivery_date,
            'deliv_schedule' => $request->delivery_schedule,
            'total_amount' => $request->total_amount,
            'deliv_note' => $request->delivery_note_textarea
        ];

        $transaction = Transaction::create($data);
      
        foreach ($request->products as $product) {

            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'product_product_id' => intval($product['product_id']),
                'quantity' => $product['quantity'],
                'unit_price' => $product['product_price'],
                'subtotal' => $product['product_price'] * $product['quantity'],
            ]);

        }

        $midtransResponse = $this->createTransaction($transaction);
        Log::info('Midtrans Response:', (array) $midtransResponse);
        $transaction->update([
            'midtrans_order_id' => $midtransResponse->token,
            'midtrans_redirect_url' => $midtransResponse->redirect_url,
        ]);

        return response()->json([
            'message' => 'Transaction created successfully',
            'token' => $transaction->midtrans_order_id,
        ]);
    }


    public function createTransaction($transaction)
    {
        Config::$serverKey = 'SB-Mid-server-20CrcoJ6aTpErf_RLC9hmEB8' ;
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;
        
        $payload = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => $transaction->total_amount,
            ],
            'customer_details' => [
                "first_name" => $transaction->bill_data_firstname,
                "last_name" => $transaction->bill_data_lastname,
                "email" => $transaction->email,
                "phone" => $transaction->bill_data_phone,
                "billing_address" => [
                  "first_name" => $transaction->bill_data_firstname,
                  "last_name" => $transaction->bill_data_lastname,
                  "email" => $transaction->email,
                  "phone" => $transaction->bill_data_phone,
                  "address" => $transaction->bill_data_address,
                  "city" => $transaction->bill_data_city,
                  "postal_code" => $transaction->bill_data_zip,
                  "country_code" => "IDN"
                ],
                "shipping_address" => [
                  "first_name" => $transaction->shipping_first_name,
                  "last_name" => $transaction->shipping_last_name,
                  "phone" => $transaction->shipping_phone_number,
                  "address" => $transaction->shipping_data_address,
                ]
            ],
            'item_details' => $transaction->details->map(function ($detail) {
                return [
                    'id' => $detail->product_product_id,
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
