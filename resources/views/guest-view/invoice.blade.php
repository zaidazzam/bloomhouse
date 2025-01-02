@extends('layout.guest.layout')

@section('title')
    Invoice
@endsection

@section('content')
    <section class="mt-0 ">

        @include('components.guest.checkout.invoice')

    </section>
@endsection
