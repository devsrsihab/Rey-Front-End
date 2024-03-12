@extends('layouts.app-navbar')
@section('title', 'Rey-Xpress')

@push('css')
    <!-- Shop Page css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/shop-page.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/hover-image.css') }}">
    <!-- shop Kitchen Cabinets css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/shopKitchenCabinets.css') }}">
    <!-- Step css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/steps.css') }}">
@endpush


@section('content')
    @include('frontend.components.shop-kitchen-cabinets.hero')
    @include('frontend.components.shop-kitchen-cabinets.main')
    @include('frontend.components.shop-kitchen-cabinets.add-new-button')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'frontend/assets/images/shopKitchenCabinets/footer-page-5.png',
        'finishing_title' => 'Why Rey-Xpress',
    ])
@endsection

@push('js')
    <script src="{{ asset('frontend/assets/js/shop-page.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/hover-image.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/index.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/navbar.js') }}"></script>
@endpush
