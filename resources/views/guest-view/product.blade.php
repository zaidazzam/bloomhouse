@extends('guest-layout.layout')

@section('title')
    Product
@endsection

@section('content')
    <section class="mt-5">
        <section class="container">

            <div class="row g-5">
                <!-- Images Section-->
                @include('components.guest.product.image-section')
                <!-- Images Section-->

                <!-- Product Info Section-->
                @include('components.guest.product.product-info-section')
                <!-- Product Info Section-->

            </div>


        </section>
        <!-- Product Tabs-->

        @include('components.guest.product.product-tab')
        <!-- Product Tabs-->

    </section>
@endsection
