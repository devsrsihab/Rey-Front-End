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
      3.main section

      9.CTA section
      10.finishing section       
 --}}


    @include('frontend-views.rey-website-part-1.components.shop-kitchen-cabinets.hero')
    @include('frontend-views.rey-website-part-1.components.shop-kitchen-cabinets.main')
    @include('frontend-views.rey-website-part-1.components.shop-kitchen-cabinets.add-new-button')
    @include('frontend-views.rey-website-part-1.components.global.CTA')
    @include('frontend-views.rey-website-part-1.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/shopKitchenCabinets/footer-page-5.png',
        'finishing_title' => 'Why Rey-Xpress',
    ])



@endsection
@section('js')
<script src="{{ asset('front-end/assets/js/shopKitchenCabinets.js') }}"></script>
@endsection