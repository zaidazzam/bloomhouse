@extends('layout.guest.layout')

@section('title')
    BloomHouse
@endsection

@section('content')
    <section class="mt-0 ">
        <!-- Page Content Goes Here -->

        <!-- hero section vidio -->
        @include('components.guest.homepage.hero-homepage')


        <!-- Featured Brands-->
        {{-- @include('components.guest.homepage.featured-brands') --}}

        <!--/ Featured Brands-->

        <!-- populer this week -->
        @include('components.guest.homepage.populer-week')

        <!-- / populer this week -->

        <!-- Image Hotspot Banner-->
        @include('components.guest.homepage.image-hotspot-banner')
        <!-- Image Hotspot Banner-->



        <!-- Linked Product Carousels-->
        @include('components.guest.homepage.linked-product-carousels')

        <!-- / Linked Product Carousels-->


        <!-- Sale Banner -->
        {{-- @include('components.guest.homepage.sale-banner') --}}

        <!-- /Sale Banner -->

        <!-- Reviews-->
        @include('components.guest.homepage.reviews')

        <!-- /Reviews-->

        <!-- /Page Content -->
    </section>
@endsection
