@extends('layout.admin.app')

@section('title')
    Blog
@endsection

@section('content')
    <section class="mt-0 ">
        <!-- Dashboard Here -->
        @include('components.admin.blog-view')

    </section>
@endsection
