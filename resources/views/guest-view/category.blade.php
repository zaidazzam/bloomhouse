@extends('layout.guest.layout')

@section('title')
    Category
@endsection

@section('content')
    <section class="mt-0 ">

        @include('components.guest.category.populer-weeks')

        <!-- Category Top Banner -->
        @include('components.guest.category.category-top-banner')
        <!-- Category Top Banner -->

        <!-- Main Section-->
        @include('components.guest.category.main-content')
        <!-- Main Section-->

    </section>
@endsection
