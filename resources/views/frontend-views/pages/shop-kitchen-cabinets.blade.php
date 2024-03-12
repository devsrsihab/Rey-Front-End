@extends('layouts.app-navbar')
@section('title', 'Rey-Xpress')

  @push('css')
    <!-- Shop Page css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/shop-page.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/hover-image.css') }}">
    <!-- shop Kitchen Cabinets css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/shopKitchenCabinets.css') }}">
    <!-- Step css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/steps.css') }}">
  @endpush


    @section('content')
        @include('frontend-views.components.shop-kitchen-cabinets.hero')
        @include('frontend-views.components.shop-kitchen-cabinets.main')
        @include('frontend-views.components.shop-kitchen-cabinets.add-new-button')
        @include('frontend-views.components.global.CTA')
        @include('frontend-views.components.global.finishing', [
            'finishing_bg' => 'front-end/assets/images/shopKitchenCabinets/footer-page-5.png',
            'finishing_title' => 'Why Rey-Xpress',
        ])
    @endsection

    @push('js')
        <script src="{{ asset('front-end/assets/js/shop-page.js') }}"></script>
        <script src="{{ asset('front-end/assets/js/hover-image.js') }}"></script>
        <script src="{{ asset('front-end/assets/js/index.js') }}"></script>
        <script src="{{ asset('front-end/assets/js/navbar.js') }}"></script>
    @endpush
