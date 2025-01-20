@extends('layout.admin.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="mt-0 ">
        <!-- Dashboard Here -->
        @include('components.admin.dashboard')

    </section>
@endsection
