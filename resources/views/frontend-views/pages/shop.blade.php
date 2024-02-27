@extends('layouts.app-navbar')
@section('title', 'shop')
@push('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/shop-page.css') }}" />
@endpush

@section('content')
    {{--  =====Component flowChart=====
      1.hero section
      2.breadcumn section
      2.category-grid section
      3.CTA section
      4.finishing section       
 --}}


    @include('frontend-views.components.shop.hero')
    @include('frontend-views.components.shop.breadcumn')
    @include('frontend-views.components.shop.category-grid')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/shop-page/footer-shop-page.png',
        'finishing_title' => 'Why Rey-Xpress',
    ])
@endsection
