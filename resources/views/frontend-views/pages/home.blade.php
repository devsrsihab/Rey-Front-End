@extends('layouts.app')


@section('content')

    {{--  =====Component flowChart=====
      1.Header 
      3.Banner section
      4.Main section
      5.Advantage section
      6.Competitor section
      7.Warranty section
      8.CTA section
      9.Finishing section
      10.Footer section                 --}}

      @include('frontend-views.components.global.header')
      @include('frontend-views.components.home.banner')
      @include('frontend-views.components.home.main')
      @include('frontend-views.components.home.advantage')
      @include('frontend-views.components.home.competitor')
      @include('frontend-views.components.home.warranty')
      @include('frontend-views.components.global.CTA')
      @include('frontend-views.components.global.finishing',['finishing_title'=>'Products and Finishes','finishing_bg'=>'front-end/assets/images/homeHero/Rey-Xpress-Products-Finishes-Footer.png'])
      @include('frontend-views.components.global.footer')
  
@endsection