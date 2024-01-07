@extends('layouts.app')
@section('title', 'Rey-Xpress')
@section('css')
<link rel="stylesheet" href="{{ asset('front-end/assets/css/homeHero.css') }}" />
    
@endsection

@section('content')

    {{--  =====Component flowChart=====
      1.hero 
      3.main section
      4.advantage section
      5.circle-button section
      6.price-guarantee section
      7.competitor section
      8.warranty section
      9.CTA section
      10.finishing section       
 --}}


    @include('frontend-views.rey-website-part-1.components.home.hero')
    @include('frontend-views.rey-website-part-1.components.home.main')
    @include('frontend-views.rey-website-part-1.components.home.advantage')
    @include('frontend-views.rey-website-part-1.components.home.circle-button')
    @include('frontend-views.rey-website-part-1.components.home.price-guarantee')
    @include('frontend-views.rey-website-part-1.components.home.competitor')
    @include('frontend-views.rey-website-part-1.components.home.warranty')
    @include('frontend-views.rey-website-part-1.components.global.CTA')
    @include('frontend-views.rey-website-part-1.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/homeHero/Rey-Xpress-Products-Finishes-Footer.png',
        'finishing_title' => 'Products and Finishes',
    ])



@endsection
