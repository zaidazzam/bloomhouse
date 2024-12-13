@extends('layout.admin.app')

@section('title')
    Tag Blog
@endsection

@section('content')
    <section class="mt-0 ">
        <!-- Dashboard Here -->
        @include('components.admin.tag-blog-view')

    </section>
@endsection
