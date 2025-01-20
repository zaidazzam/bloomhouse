@extends('layout.admin.app')

@section('title')
    Sales By Item
@endsection

@section('content')
    <section class="mt-0 ">
        <!-- Bordered Table -->
        <div class="card shadow-lg border-0 mb-4"
            style="background: linear-gradient(135deg, #007bff, #6610f2); color: white;">
            <div class="card-body d-flex align-items-center">
                <div class="me-4">
                    <!-- Icon -->
                    <div class="icon-container bg-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 60px; height: 60px;">
                        <i class="bx bxs-cart-download text-primary" style="font-size: 30px;"></i>
                    </div>
                </div>
                <div>
                    <!-- Title -->
                    <h5 class="card-title fw-bold text-dark">Total Sales By Item</h5>
                    <!-- Content -->
                    <p class="card-text mb-0">
                        Total number of sales by item available:
                    </p>
                    <p class="card-text fs-4 mt-2">
                        <span class="badge bg-light text-primary p-2 px-3" style="font-size: 1.2rem;">
                            <strong>{{ $totalItemsSold }}</strong>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="d-flex justify-content-between w-100">

                <h5 class="card-header">Sales by Item</h5>

            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">

                    <table id="maintable" class="display cell-border table table-bordered table-striped table-hover"
                        cellspacing="0" width="100%">
                        <thead class="table-dark1 text-center">
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">Product Name</th>
                                <th class="text-white">Total Sold</th>
                                <th class="text-white">Initial Stock</th>
                                <th class="text-white">Current Stock</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($salesByItem as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td> <!-- Use the correct property 'name' -->
                                    <td>{{ $item->total_sold }}</td> <!-- Use -> to access properties -->
                                    <td>{{ $item->product_stock + $item->total_sold }}</td>
                                    <!-- Calculate current stock -->
                                    <td>{{ $item->product_stock }}</td> <!-- Use the correct property 'product_stock' -->
                                </tr>
                            @endforeach
                        </tbody>


                        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">Product Name</th>
                                <th class="text-white">Total Sold</th>
                                <th class="text-white">Initial Stock</th>
                                <th class="text-white">Current Stock</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection
