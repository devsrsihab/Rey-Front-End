@extends('frontend.layouts.app-navbar')
@section('title', 'Rey-Xpress')
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/homeHero.css') }}" />
@endpush

@section('content')
    @include('frontend.components.home.hero')
    @include('frontend.components.home.main')
    @include('frontend.components.home.advantage')
    @include('frontend.components.home.circle-button')
    @include('frontend.components.home.price-guarantee')
    @include('frontend.components.home.competitor')
    @include('frontend.components.home.warranty')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'frontend/assets/images/homeHero/Rey-Xpress-Products-Finishes-Footer.png',
        'finishing_title' => 'Products and Finishes',
    ])
@endsection
