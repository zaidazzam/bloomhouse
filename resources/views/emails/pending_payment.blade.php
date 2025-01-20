<!DOCTYPE html>
<html>
<head>
    <title>Payment Pending</title>
</head>
<body>
    <h1>Payment Pending</h1>
    <p>Dear {{ $transaction->bill_data_firstname }} {{ $transaction->bill_data_lastname }},</p>
    <p>Your payment for order ID <strong>{{ $transaction->midtrans_order_id }}</strong> is pending. Please complete the payment at the following link <a href="{{ $transaction->midtrans_redirect_url }}" target="_blank">{{ $transaction->midtrans_redirect_url }}.</a></p>
    <p>Thank you!</p>
</body>
</html>