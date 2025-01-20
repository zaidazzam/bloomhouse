@extends('layout.admin.app')

@section('title')
    Invoice Details
@endsection

@section('content')
    <style>
        .breadcrumb {
            background-color: #f8f9fa;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
        }

        .card {
            border: 1px solid #e0e0e0;
            border-radius: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        h6 {
            font-weight: bold;
            color: #343a40;
            margin-top: 1rem;
        }

        .table {
            margin-top: 1rem;
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            text-align: left;
            border: 1px solid #dee2e6;
        }

        .table-dark1 {
            background-color: #343a40;
            color: white;
        }

        .badge {
            font-size: 0.9rem;
            padding: 0.5rem 0.75rem;
            border-radius: 0.5rem;
        }

        .text-end {
            text-align: right;
        }
    </style>

    <section class="mt-0">
        
        <!-- Invoice Details -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="/admin/dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/invoice">Invoice</a>
                </li>
                <li class="breadcrumb-item active">{{ $transaction->midtrans_order_id }}</li>
            </ol>
        </nav>
        <div class="card">

            <div class="card-body">
                <h5 class="">Invoice Details</h5>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6>Billing Information</h6>
                        <p>
                            <label>Name:</label>
                            <input type="text" name="billing_name" class="form-control mb-2" value="{{ $transaction->bill_data_firstname }} {{ $transaction->bill_data_lastname }}" readonly>
                            <label>Email:</label>
                            <input type="email" name="billing_email" class="form-control mb-2" value="{{ $transaction->email }}" readonly>
                            <label>Phone:</label>
                            <input type="text" name="billing_phone" class="form-control mb-2" value="{{ $transaction->bill_data_phone }}" readonly>
                            <label>Address:</label>
                            <input type="text" name="billing_address" class="form-control mb-2" value="{{ $transaction->bill_data_address }}" readonly>
                            <label>City:</label>
                            <input type="text" name="billing_city" class="form-control mb-2" value="{{ $transaction->bill_data_city }}" readonly>
                            <label>Province:</label>
                            <input type="text" name="billing_province" class="form-control mb-2" value="{{ $transaction->bill_data_provinsi }}" readonly>
                            <label>Kecamatan:</label>
                            <input type="text" name="billing_zip" class="form-control mb-2" value="{{ $transaction->bill_data_zip }}" readonly>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h6>Shipping Information</h6>
                        <p>
                            <label>Name:</label>
                            <input type="text" name="shipping_name" class="form-control mb-2" value="{{ $transaction->shipping_first_name }} {{ $transaction->shipping_last_name }}" readonly>
                            <label>Phone:</label>
                            <input type="text" name="shipping_phone" class="form-control mb-2" value="{{ $transaction->shipping_phone_number }}" readonly>
                            <label>Address:</label>
                            <input type="text" name="shipping_address" class="form-control mb-2" value="{{ $transaction->shipping_data_address }}" readonly>
                            <label>Note:</label>
                            <textarea id="basic-default-message" name="delivery_note" class="form-control" placeholder="Add delivery note here..." readonly>{{ $transaction->deliv_note }}</textarea>
                        </p>
                    </div>
                </div>

                <h6>Transaction Details</h6>
                <table class="table table-bordered">
                    <thead class="table-dark1">
                        <tr class="text-white">
                            <th class="text-white">Product Name</th>
                            <th class="text-white">Quantity</th>
                            <th class="text-white">Unit Price</th>
                            <th class="text-white">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaction->details as $detail)
                            <tr>
                                <td>{{ $detail->product->name }}</td>
                                <td>{{ $detail->quantity }}</td>
                                <td>Rp {{ number_format($detail->unit_price, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($detail->subtotal, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" class="text-end"><strong>Shipping Cost</strong></td>
                            <td>Rp {{ number_format($transaction->shipping_cost, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td colspan="3 class="text-end"><strong>Total</strong></td>
                            <td>Rp {{ number_format($transaction->total_amount, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>

                <h6>Payment Information</h6>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td><strong>Payment Type:</strong></td>
                            <td>{{ $transaction->payment_methode }}</td>
                        </tr>
                        <tr>
                            <td><strong>Payment Status:</strong></td>
                            <td>
                                <span class="badge {{ $transaction->payment_status === 'paid' ? 'bg-success' : ($transaction->payment_status === 'pending' ? 'bg-warning text-black' : 'bg-danger') }}">
                                    {{ ucfirst($transaction->payment_status) }}
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
@endsection
