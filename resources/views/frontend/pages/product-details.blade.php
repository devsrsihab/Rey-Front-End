@extends('layouts.app-navbar')
@section('title', 'Product Details')

@push('css')
    <!-- Product Details css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/page4.css') }}">
@endpush


@section('content')
    @include('frontend.components.product-details.hero')
    @include('frontend.components.product-details.breadcumn')
    @include('frontend.components.product-details.cart-summary')
    @include('frontend.components.product-details.product-carousel')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'frontend/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])
@endsection

@push('js')
    <script src="{{ asset('frontend/assets/js/product-details.js') }}"></script>
@endpush
