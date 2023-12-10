@extends('layouts.app')
@section('title', 'Product Details')

@section('content')

    {{--  =====Component flowChart=====
      1.hero section
      2.breadcumn section
      3.why-choose-us section
      4.createAccount-form section
      5.CTA section
      6.finishing section
    
 --}}

    @include('frontend-views.rey-website-part-1.components.product-details.hero')
    @include('frontend-views.rey-website-part-1.components.product-details.breadcumn')
    @include('frontend-views.rey-website-part-1.components.product-details.cart-summary')
    @include('frontend-views.rey-website-part-1.components.product-details.product-carousel')
    @include('frontend-views.rey-website-part-1.components.global.CTA')
    @include('frontend-views.rey-website-part-1.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])



@endsection
