@extends('layouts.app-navbar')
@section('title', 'Products & Finishes')

@push('css')
    <!-- Product And Finishes css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/productsAndFinishes.css') }}">
@endpush

@section('content')

    @include('frontend.components.products-and-finishes.hero')
    @include('frontend.components.products-and-finishes.main')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'frontend/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])
@endsection

@push('js')
    <script src="{{ asset('frontend/assets/js/productsAndFinishes.js') }}"></script>
@endpush
