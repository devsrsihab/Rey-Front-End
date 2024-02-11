@extends('layouts.app')
@section('title', 'shop')
@section('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/accountCategoryRadio.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/page5.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/3.Rey_website_shop_doors.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/5.rey-website-shop-blum-fitting.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/selectImageIcon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/local.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/imageHover.css') }}">

@endsection

@section('content')

    {{--  =====Component flowChart=====
      1.hero section
      2.breadcumn section
      2.category-grid section
      3.CTA section
      4.finishing section       
 --}}


    @include('frontend-views.components.vanities.hero')
    @include('frontend-views.components.vanities.breadcumn')
    @include('frontend-views.components.vanities.main')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/vanities/vaneties-footer.png',
        'finishing_title' => 'Drawers',
    ])



@endsection

@section('js')
<script defer src="{{ asset('front-end/assets/js/counting.js') }}"></script>
<script defer src="{{ asset('front-end/assets/js/page5.js') }}"></script>
<script defer src="{{ asset('front-end/assets/js/accountCategoryRadio.js') }}"></script>

@endsection
