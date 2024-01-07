@extends('layouts.app')
@section('title', 'Products & Finishes')

@section('css')
    <!-- Product And Finishes css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/productsAndFinishes.css') }}">
@endsection

@section('content')

    {{--  =====Component flowChart=====
      1.hero section
      2.main section
      3.CTA section
      4.finishing section
    
 --}}



    @include('frontend-views.rey-website-part-1.components.products-&-finishes.hero')
    @include('frontend-views.rey-website-part-1.components.products-&-finishes.main')
    @include('frontend-views.rey-website-part-1.components.global.CTA')
    @include('frontend-views.rey-website-part-1.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])



@endsection

@section('js')
<script src="{{ asset('front-end/assets/js/productsAndFinishes.js') }}"></script>

@endsection