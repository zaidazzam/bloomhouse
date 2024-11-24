@extends('guest-layout.layout')

@section('title')
    Category
@endsection

@section('content')
    <section class="mt-0 ">
        <!-- Category Top Banner -->
        @include('components.guest.category.category-top-banner')
        <!-- Category Top Banner -->

        <!-- Main Section-->
        @include('components.guest.category.main-content')
        <!-- Main Section-->

    </section>
@endsection
