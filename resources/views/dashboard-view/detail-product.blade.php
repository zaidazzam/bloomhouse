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
        .img-fluid-detailproduct{
            max-width: 100%;
            height: 200px;
        }
    </style>
    <section class="mt-0">

        <!-- Breadcrumb Navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="/admin/dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/product_products">Products</a>
                </li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-body">
                <h5 class="">Product Details</h5>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <h6>Basic Information</h6>
                        <p>
                            <label>Name:</label>
                            <input type="text" name="product_name" class="form-control mb-2" value="{{ $product->name }}"
                                readonly>
                            <label>Description:</label>
                            <textarea name="product_description" class="form-control mb-2" rows="4" readonly>{{ $product->product_description }}</textarea>
                            <label>Stock:</label>
                            <input type="number" name="product_stock" class="form-control mb-2"
                                value="{{ $product->product_stock }}" readonly>
                            <label>Size:</label>
                            <input type="text" name="product_size" class="form-control mb-2" value="{{ $product->size }}"
                                readonly>
                            <label>Discount:</label>
                            <input type="number" name="product_discount" class="form-control mb-2"
                                value="{{ $product->discount }}" readonly>
                            <label>Consist Of:</label>
                            <input type="text" name="consist_of" class="form-control mb-2"
                                value="{{ $product->consist_of}}" readonly>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h6>Pricing Information</h6>
                        <p>
                            <label>Price:</label>
                            <input type="text" name="product_price" class="form-control mb-2"
                                value="Rp {{ number_format($product->product_price, 0, ',', '.') }}" readonly>
                            <label>Discounted Price:</label>
                            <input type="text" name="discounted_price" class="form-control mb-2"
                                value="Rp {{ number_format($product->product_price - ($product->product_price * $product->discount) / 100, 0, ',', '.') }}"
                                readonly>
                            <label>Shipping Address:</label>
                            <input type="text" name="shipping_address" class="form-control mb-2"
                                value="{{ $product->address }}" readonly>
                        </p>
                    </div>
                </div>
                <!-- Category Information -->
                <h6>Category</h6>
                <p>
                    @if($product->category->isNotEmpty())
                        @foreach($product->category as $category)
                            <span class="badge bg-secondary">{{ $category->name }}</span>
                        @endforeach
                    @else
                        <span>No categories assigned.</span>
                    @endif
                </p>
                <h6>Product Image</h6>
                <div class="mb-4">
                    @if ($product->main_picture)
                        <img src="{{ asset('storage/' . $product->main_picture) }}" alt="Product Image" class="img-fluid-detailproduct">
                    @else
                        <p>No image available</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
