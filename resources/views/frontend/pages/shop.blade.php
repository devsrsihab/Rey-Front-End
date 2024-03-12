@extends('layouts.app-navbar')
@section('title', 'shop')
@push('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/shop-page.css') }}" />
@endpush

@section('content')
    @include('frontend.components.shop.hero')
    @include('frontend.components.shop.breadcumn')
    @include('frontend.components.shop.category-grid')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/shop-page/footer-shop-page.png',
        'finishing_title' => 'Why Rey-Xpress',
    ])
@endsection
