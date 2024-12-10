@extends('layout.admin.app')

@section('title')
    Category Product
@endsection

@section('content')
    <section class="mt-0 ">
        <!-- Dashboard Here -->
        @include('components.admin.category-product-view')

    </section>
@endsection
