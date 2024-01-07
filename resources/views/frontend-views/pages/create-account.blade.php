@extends('layouts.app')
@section('title', 'Create Account')

@section('css')
    <!-- Create Account css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/policy-checkbox.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/page3.css') }}">
@endsection

@section('content')

    {{--  =====Component flowChart=====
      1.hero section
      2.breadcumn section
      3.why-choose-us section
      4.create-account-form section
      5.CTA section
      6.finishing section
    
 --}}

    @include('frontend-views.components.create-account.hero')
    @include('frontend-views.components.create-account.breadcumn')
    @include('frontend-views.components.create-account.why-choose-us')
    @include('frontend-views.components.create-account.create-account-form')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])



@endsection
