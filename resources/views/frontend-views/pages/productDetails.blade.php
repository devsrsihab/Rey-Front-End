@extends('layouts.app')
@section('title', 'PRODUCT DETAILS')
@section('content')

        {{--  =====Component flowChart=====
      1.Header 
      2.Hero section
      3.Breadcrumn section
      4.Cart-Summary section
      4.Cards-Carousel section
      5.CTA section
      6.Finishing section
      7.Footer section                 --}}

      @include('frontend-views.components.global.header')
      @include('frontend-views.components.productDetails.Hero')
      @include('frontend-views.components.productDetails.Breadcrumn')
      @include('frontend-views.components.productDetails.cartSummary')
      @include('frontend-views.components.productDetails.cartCarousel')
      @include('frontend-views.components.global.CTA')
      @include('frontend-views.components.global.finishing',['finishing_title'=>'Shop','finishing_bg'=>'front-end/assets/images/page2/Rey-Xpress-Shop-Footer.jpg'])
      @include('frontend-views.components.global.footer')


@endsection