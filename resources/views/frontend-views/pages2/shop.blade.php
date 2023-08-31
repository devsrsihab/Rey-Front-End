@extends('layouts.app')
@section('title','Shop')

@section('content')

    {{--  =====Component flowChart=====
      1. Header Section
      2. Hero Section
      3. Breadcumn Section
      4. product image Section
      5. Shipping Section
      6. CTA Section
      7. Finishing Section
      8. Footer Section

               --}}

      @include('frontend-views.components.global.header')
      @include('frontend-views.components.shop.hero')
      @include('frontend-views.components.shop.breadcumn')
      @include('frontend-views.components.shop.productImages')
      @include('frontend-views.components.shop.shipping')
      @include('frontend-views.components.global.CTA')
      @include('frontend-views.components.global.finishing',['finishing_title'=>'Why Rey-Xpress','finishing_bg'=>'front-end/assets/images/shop-page/footer-shop-page.png']) 
      @include('frontend-views.components.global.footer')
  
@endsection