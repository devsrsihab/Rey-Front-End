@extends('layouts.app-navbar')
@section('title', 'Create Account')
@push('css')
    <!-- Create Account css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/policy-checkbox.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/page3.css') }}">
@endsection

@section('content')
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
