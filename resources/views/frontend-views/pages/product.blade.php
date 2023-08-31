@extends('layouts.app')
@section('title','PRODUCT & FINISHES')

@section('content')

  {{--  =====Component flowChart=====
    1.Header 
    2.Hero section
    3.Main Product section
    4.CTA section global
    5.Finishing section
    6.Footer section                 --}}

    @include('frontend-views.components.global.header')
    @include('frontend-views.components.product.hero')
    @include('frontend-views.components.product.main')
    @include('frontend-views.components.global.cta')
    @include('frontend-views.components.global.finishing',['finishing_title'=>'Products and Finishes','finishing_bg'=>'front-end/assets/images/homeHero/Rey-Xpress-Products-Finishes-Footer.png'])
    @include('frontend-views.components.global.footer')

  
@endsection