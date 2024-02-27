@extends('layouts.app-navbar')
@section('title', 'Products & Finishes')

@push('css')
    <!-- Product And Finishes css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/productsAndFinishes.css') }}">
@endpush

@section('content')

    @include('frontend-views.components.products-and-finishes.hero')
    @include('frontend-views.components.products-and-finishes.main')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])
@endsection

@push('js')
    <script src="{{ asset('front-end/assets/js/productsAndFinishes.js') }}"></script>
@endpush
