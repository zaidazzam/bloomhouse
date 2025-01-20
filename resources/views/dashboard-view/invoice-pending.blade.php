@extends('layout.admin.app')

@section('title')
    Invoice
@endsection

@section('content')
    <section class="mt-0 ">
        <!-- Bordered Table -->
        <div class="card shadow-lg border-0 mb-4"
            style="background: linear-gradient(135deg, #ffc107, #ffca28); color: black;">
            <div class="card-body d-flex align-items-center">
                <div class="me-4">
                    <!-- Icon -->
                    <div class="icon-container bg-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 60px; height: 60px;">
                        <i class="fas fa-hourglass-half text-warning" style="font-size: 30px;"></i>
                    </div>
                </div>
                <div>
                    <!-- Title -->
                    <h5 class="card-title fw-bold text-dark">Pending Transactions</h5>
                    <!-- Content -->
                    <p class="card-text mb-0">
                        Number of transactions that are still pending:
                    </p>
                    <p class="card-text fs-4 mt-2">
                        <span class="badge bg-light text-warning p-2 px-3" style="font-size: 1.2rem;">
                            <strong>{{ $pendingTransactionsCount }}</strong>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="d-flex justify-content-between w-100">

                <h5 class="card-header">Invoice Pending</h5>

            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">

                    <table id="maintable" class="display cell-border table table-bordered table-striped table-hover"
                        cellspacing="0" width="100%">
                        <thead class="table-dark1">
                            <tr class="text-center">
                                <th class="text-white">No</th>
                                <th class="text-white">No. Receipt</th>
                                <th class="text-white">Name</th>
                                <th class="text-white">Payment Type</th>
                                <th class="text-white">Date</th>
                                <th class="text-white">Payment Status</th>
                                <th class="text-white">Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $index => $transaction)
                                @if ($transaction->payment_status === 'pending')
                                    <tr class="text-center">
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <a href="{{ route('detailInvoice', $transaction->midtrans_order_id) }}"
                                                class="text-primary">
                                                {{ $transaction->midtrans_order_id }}
                                            </a>
                                        </td>
                                        <td>{{ $transaction->bill_data_firstname }}</td>
                                        <td>{{ $transaction->payment_methode }}</td>
                                        <td>{{ $transaction->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            <span class="badge bg-warning text-dark">
                                                {{ ucfirst($transaction->payment_status) }}
                                            </span>
                                        </td>
                                        <td>Rp {{ number_format($transaction->total_amount, 0, ',', '.') }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
                            <tr>
                                <th class="text-white">No</th>
                                <th class="text-white">No. Receipt</th>
                                <th class="text-white">First Name</th>
                                <th class="text-white">Payment Type</th>
                                <th class="text-white">Transaction Date</th>
                                <th class="text-white">Payment Status</th>
                                <th class="text-white">Total Amount</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection
