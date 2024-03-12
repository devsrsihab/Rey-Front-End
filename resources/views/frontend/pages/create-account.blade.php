@extends('layouts.app-navbar')
@section('title', 'Create Account')
@push('css')
    <!-- Create Account css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/policy-checkbox.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/page3.css') }}">
@endpush

@section('content')
    @include('frontend.components.create-account.hero')
    @include('frontend.components.create-account.breadcumn')
    @include('frontend.components.create-account.why-choose-us')
    @include('frontend.components.create-account.create-account-form')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])
@endsection
