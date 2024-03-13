@extends('frontend.layouts.app-navbar')
@section('title', 'Rey-Xpress')

@push('css')
    <!-- Shop Page css-->
    <link rel="stylesheet" href="{{ asset('assets/css/shop-page.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/hover-image.css') }}">
    <!-- shop Kitchen Cabinets css-->
    <link rel="stylesheet" href="{{ asset('assets/css/shopKitchenCabinets.css') }}">
    <!-- Step css-->
    <link rel="stylesheet" href="{{ asset('assets/css/steps.css') }}">
@endpush


@section('content')
    @include('frontend.components.shop-kitchen-cabinets.hero')
    @include('frontend.components.shop-kitchen-cabinets.main')
    @include('frontend.components.shop-kitchen-cabinets.add-new-button')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'assets/images/shopKitchenCabinets/footer-page-5.png',
        'finishing_title' => 'Why Rey-Xpress',
    ])
@endsection

@push('js')
    <script src="{{ asset('assets/js/shop-page.js') }}"></script>
    <script src="{{ asset('assets/js/hover-image.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
@endpush
