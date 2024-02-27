@extends('layouts.app-navbar')
@section('title', 'Product Details')

@push('css')
    <!-- Product Details css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/page4.css') }}">
@endsection


@section('content')
    {{--  =====Component flowChart=====
      1.hero section
      2.breadcumn section
      3.cart-summary section
      4.product-carousel section
      5.CTA section
      6.finishing section
    
 --}}

    @include('frontend-views.components.product-details.hero')
    @include('frontend-views.components.product-details.breadcumn')
    @include('frontend-views.components.product-details.cart-summary')
    @include('frontend-views.components.product-details.product-carousel')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])
@endsection

@push('js')
    <script src="{{ asset('front-end/assets/js/product-details.js') }}"></script>
@endsection
