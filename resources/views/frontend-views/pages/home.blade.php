@extends('layouts.app-navbar')
@section('title', 'Rey-Xpress')
@push('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/homeHero.css') }}" />
@endpush

@section('content')
    @include('frontend-views.components.home.hero')
    @include('frontend-views.components.home.main')
    @include('frontend-views.components.home.advantage')
    @include('frontend-views.components.home.circle-button')
    @include('frontend-views.components.home.price-guarantee')
    @include('frontend-views.components.home.competitor')
    @include('frontend-views.components.home.warranty')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/homeHero/Rey-Xpress-Products-Finishes-Footer.png',
        'finishing_title' => 'Products and Finishes',
    ])
@endsection
