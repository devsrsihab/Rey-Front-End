@extends('layouts.app')
@section('title', 'Rey-Xpress')

@section('css')
    <!-- Shop Page css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/shop-page.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/hover-image.css') }}">
    <!-- shop Kitchen Cabinets css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/shopKitchenCabinets.css') }}">
    <!-- Step css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/steps.css') }}">
@section('content')


@section('content')

    {{--  =====Component flowChart=====
      1.hero 
      2.main section
      3.add-new-button
      4.CTA section
      5.finishing section       
 --}}


    @include('frontend-views.components.shop-kitchen-cabinets.hero')
    @include('frontend-views.components.shop-kitchen-cabinets.main')
    @include('frontend-views.components.shop-kitchen-cabinets.add-new-button')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/shopKitchenCabinets/footer-page-5.png',
        'finishing_title' => 'Why Rey-Xpress',
    ])



@endsection
@section('js')
    <script src="{{ asset('front-end/assets/js/shopKitchenCabinets.js') }}"></script>
@endsection
