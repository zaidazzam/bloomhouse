<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Invoice</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }

        .invoice-box table td {
            padding: 8px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2),
        .invoice-box table tr td:nth-child(3) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.heading td {
            background: #f5f5f5;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td {
            font-weight: bold;
            border-top: 2px solid #eee;
        }

        .invoice-box table tr.total td:last-child {
            font-size: 18px;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <!-- Header Section -->
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{ asset('assets/images/logos/Bloom-House-02.png') }}" style="width: 100%; max-width: 200px" />
                            </td>
                            <td class="text-right">
                                <strong>Invoice #: </strong>{{ $transaction->midtrans_order_id }}<br />
                                <strong>Created: </strong>{{ $transaction->created_at->format('F j, Y') }}<br />
                                <strong>Due: </strong>{{ \Carbon\Carbon::parse($transaction->created_at)->addDays(30)->format('F j, Y') }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Information Section -->
            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                <strong>Shipping Information:</strong><br />
                                {{ $transaction->shipping_company }}<br />
                                {{ $transaction->shipping_address }}<br />
                                {{ $transaction->shipping_city }}, {{ $transaction->shipping_zip }}<br />
                                {{ $transaction->shipping_country }}<br />
                                Phone: {{ $transaction->shipping_phone_number }}
                            </td>
                            <td class="text-right">
                                <strong>Billing Information:</strong><br />
                                {{ $transaction->bill_data_company }}<br />
                                {{ $transaction->bill_data_firstname }} {{ $transaction->bill_data_lastname }}<br />
                                {{ $transaction->bill_data_address }}<br />
                                {{ $transaction->bill_data_city }}, {{ $transaction->bill_data_zip }}<br />
                                Phone: {{ $transaction->bill_data_phone }}<br />
                                Email: {{ $transaction->email }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Payment Section -->
            <tr class="heading">
                <td>Payment Method</td>
                <td colspan="2">{{ $transaction->payment_methode }}</td>
            </tr>

            <tr class="details">
                <td>Payment Status</td>
                <td colspan="2">{{ $transaction->payment_status }}</td>
            </tr>

            <!-- Items Section -->
            <tr class="heading">
                <td>Item</td>
                <td>Quantity</td>
                <td>Price</td>
            </tr>

            <?php $itm = 0;?>
            @foreach ($transaction->details as $detail)
            <tr class="item">
                <td>{{ $detail->product->name }}</td>
                <td>{{ $detail->quantity }}</td>
                <td>Rp.{{ number_format($detail->unit_price, 2) }}</td>
            </tr>
            <?php $itm = $itm + $detail->unit_price; ?>
            @endforeach


            <!-- Total Section -->
            <tr class="total">
                <td colspan="2" class="text-right">Postage:</td>
                <td>Rp.{{ number_format($transaction->total_amount - $itm, 2) }}</td>
            </tr>
            <tr class="total">
                <td colspan="2" class="text-right">Total:</td>
                <td>Rp.{{ number_format($transaction->total_amount, 2) }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
