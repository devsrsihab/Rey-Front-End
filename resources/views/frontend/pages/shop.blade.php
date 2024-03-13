@extends('frontend.layouts.app-navbar')
@section('title', 'shop')
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/shop-page.css') }}" />
@endpush

@section('content')
    @include('frontend.components.shop.hero')
    @include('frontend.components.shop.breadcumn')
    @include('frontend.components.shop.category-grid')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'frontend/assets/images/shop-page/footer-shop-page.png',
        'finishing_title' => 'Why Rey-Xpress',
    ])
@endsection
