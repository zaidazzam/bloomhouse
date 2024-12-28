@extends('layout.admin.app')

@section('title')
    Report Transaction
@endsection

@section('content')
    <section class="mt-0 ">
        <!-- Bordered Table -->
        <div class="card">
            <div class="d-flex justify-content-between w-100">

                <h5 class="card-header">Transaksi</h5>

            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">

                    <table id="maintable" class="display cell-border table table-bordered table-striped table-hover"
                        cellspacing="0" width="100%">
                        <thead class="table-dark1">
                            <tr>
                                <th class="text-white">No</th>
                                <th class="text-white">No. Receipt</th>
                                <th class="text-white">Transaction Date</th>
                                <th class="text-white">Payment Type</th>
                                <th class="text-white">Net Sales</th>
                                <th class="text-white">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                            <tr>
                                <td><strong>1.</strong></td>
                                <td>RCP001</td> <!-- No. Receipt -->
                                <td>{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td> <!-- Transaction Date -->
                                <td>Credit Card</td> <!-- Payment Type -->
                                <td>{{ 'Rp 4.500.000' }}</td> <!-- Net Sales -->
                                <td>{{ 'Rp 5.000.000' }}</td> <!-- Total -->
                            </tr>
                        </tbody>
                        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
                            <tr>
                                <th class="text-white">No</th>
                                <th class="text-white">No. Receipt</th>
                                <th class="text-white">Transaction Date</th>
                                <th class="text-white">Payment Type</th>
                                <th class="text-white">Net Sales</th>
                                <th class="text-white">Total</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection
