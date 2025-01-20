@extends('layout.admin.app')

@section('title', 'Revenue Report')

@section('content')
    <section class="mt-0">
        <div class="card shadow-lg border-0 mb-4"
            style="background: linear-gradient(135deg, #28a745, #20c997); color: white;">
            <div class="card-body d-flex align-items-center">
                <div class="me-4">
                    <!-- Icon -->
                    <div class="icon-container bg-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 60px; height: 60px;">
                        <i class="fas fa-chart-line text-success" style="font-size: 30px;"></i>
                    </div>
                </div>
                <div>
                    <!-- Title -->
                    <h5 class="card-title fw-bold text-dark">Total Revenue</h5>
                    <!-- Content -->
                    <p class="card-text mb-0">
                        Total revenue from paid transactions:
                    </p>
                    <p class="card-text fs-4 mt-2">
                        <span class="badge bg-light text-success p-2 px-3" style="font-size: 1.2rem;">
                            <strong>Rp {{ number_format($totalRevenue, 0, ',', '.') }}</strong>
                        </span>
                    </p>

                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">Revenue Report</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table id="maintable" class="display cell-border table table-bordered table-striped table-hover"
                        cellspacing="0" width="100%">
                        <thead class="table-dark1">
                            <tr class="text-center">
                                <th class="text-white">No</th>
                                <th class="text-white">Date</th>
                                <th class="text-white">Total Orders (Paid)</th>
                                <th class="text-white">Total Shipping</th>
                                <th class="text-white">Total Unit Price</th>
                                <th class="text-white">Total Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reports as $key => $report)
                                <tr class="text-center">
                                    <td>{{ $key + 1 }}</td>
                                    <td><strong>{{ $report->report_date }}</strong> </td>
                                    <td>{{ $report->total_orders }}</td>
                                    <td>Rp {{ number_format($report->total_shipping, 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($report->total_unit, 0, ',', '.') }}</td>
                                    <td><strong>Rp {{ number_format($report->total_amount, 0, ',', '.') }}</strong></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No data available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
                            <tr>
                                <th class="text-white">No</th>
                                <th class="text-white">Date</th>
                                <th class="text-white">Total Orders (Paid)</th>
                                <th class="text-white">Total Shipping</th>
                                <th class="text-white">Total Unit Price</th>
                                <th class="text-white">Total Revenue</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
