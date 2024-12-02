@extends('guest-layout.layout')

@section('title')
    Blog
@endsection

@section('content')
    <section class="mt-0 ">

        <!-- blog Top Banner -->
        @include('components.guest.blog.blog-top-banner')
        <!-- blog Top Banner -->

        <!-- Main Section-->
        @include('components.guest.blog.detail')
        <!-- Main Section-->

    </section>
@endsection
