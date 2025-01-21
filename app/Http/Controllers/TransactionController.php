<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ProductProduct;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Log;
use App\Mail\PendingPaymentMail;
use App\Models\TrackingDelivery;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class TransactionController extends Controller
{
    public function index()
    {

        return view('dashboard-view.report-transaki');
    }

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
            'deliv_postage_rule' => 'required',
            'delivery_phone' => 'required',
            'delivery_note_textarea' => 'nullable',
            'total_amount' => 'required',
            'shipping_cost' => 'required',
            'payment_status' => 'nullable',
            'payment_methode' => 'nullable',
            'midtrans_order_id' => 'nullable',
            'midtrans_redirect_url' => 'nullable',
        ]);

        $data = [
            'email' => $request->email,
            'shipping_country' => 'Indonesia',
            'shipping_data_company' => 'null',
            'shipping_data_provinsi' => 'null',
            'shipping_data_city' => 'null',
            'shipping_data_zip' => 'null',
            'shipping_cost' => $request->shipping_cost,
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
            'deliv_postage_rule' => $request->deliv_postage_rule,
            'total_amount' => $request->total_amount,
            'deliv_note' => $request->delivery_note_textarea,
            'payment_methode' => $request->payment_methode
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
        $transaction->update([
            'midtrans_order_id' => $midtransResponse->order_id,
            'midtrans_token' => $midtransResponse->token,
            'midtrans_redirect_url' => $midtransResponse->redirect_url,
        ]);

        return response()->json([
            'message' => 'Transaction created successfully',
            'token' => $transaction->midtrans_token,
        ]);
    }


    public function createTransaction($transaction)
    {
        Config::$serverKey = 'SB-Mid-server-20CrcoJ6aTpErf_RLC9hmEB8';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $order_id = "ORDER_ID" . rand();

        $payload = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $transaction->total_amount,
            ],
            'enabled_payments' => [
                $transaction->payment_methode
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
            'item_details' => array_merge(
                $transaction->details->map(function ($detail) {
                    return [
                        'id' => $detail->product_product_id,
                        'price' => $detail->unit_price,
                        'quantity' => $detail->quantity,
                        'name' => $detail->product->name,
                    ];
                })->toArray(),
                [
                    [
                        'id' => 'shipping_cost' . $order_id,
                        'price' => $transaction->shipping_cost,
                        'quantity' => 1,
                        'name' => 'Shipping Cost',
                    ]
                ]
            ),
        ];
        $response = Snap::createTransaction($payload);
        $response->order_id = $payload['transaction_details']['order_id'];
        return $response;
    }

    public function callback(Request $request)
    {
        $data = $request->all();


        $transaction = Transaction::with('details')->where('midtrans_order_id', $data['order_id'])->first();

        if ($data['transaction_status'] === 'capture' || $data['transaction_status'] === 'settlement') {
            $transaction->update(['payment_status' => 'paid']);
            session()->forget('cart');
            foreach ($transaction->details as $qty) {
                $productStock = ProductProduct::findOrFail($qty->product_product_id);
                $updateStock = $productStock->product_stock - $qty->quantity;
                $productStock->update([
                    'product_stock' => $updateStock,
                ]);
            }
            try {
                $payload = [
                    "transaction_id" => $transaction->id,
                    "status" => "Packing", // enum select packing its default value,
                ];

                TrackingDelivery::create($payload);
            } catch (\Throwable $th) {
                dd($th);
            }
        } elseif ($data['transaction_status'] === 'deny') {
            $transaction->update(['payment_status' => 'failed']);
        } elseif ($data['transaction_status'] === 'pending') {
            $transaction->update(['payment_status' => 'pending']);
            Mail::to($transaction->email)->send(new PendingPaymentMail($transaction));
        }
        return view('guest-view.invoice', compact('transaction'));
    }


    public function createTransactionViaPaypal()
    {
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $order = $provider->createOrder([
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'IDR',
                        'value' => '100.00',
                    ],
                ],
            ],
        ]);

        return redirect($order['links'][1]['href']);
    }

    public function capturePaymentPaypal(Request $request)
    {
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $result = $provider->capturePaymentOrder($request->query('token'));

        if ($result['status'] === 'COMPLETED') {
            return response()->json(['message' => 'Payment successful!', 'data' => $result]);
        }

        return response()->json(['message' => 'Payment failed!', 'data' => $result]);
    }
}
