@extends('layout.guest.layout')

@section('title')
    Category
@endsection

@section('content')
    <section class="mt-0 ">

        @include('components.guest.category.category-top-banner')
        @include('components.guest.category.populer-weeks')

        <!-- Category Top Banner -->
        <!-- Category Top Banner -->

        <!-- Main Section-->
        @include('components.guest.category.category-dumm')
        @include('components.guest.category.script')
        <!-- Main Section-->

    </section>
@endsection


