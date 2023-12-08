@extends('layouts.app')
@section('title', 'Products & Finishes')

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


    @include('frontend-views.rey-website-part-1.components.products-&-finishes.hero')
    @include('frontend-views.rey-website-part-1.components.products-&-finishes.main')

    @include('frontend-views.rey-website-part-1.components.global.CTA')
    @include('frontend-views.rey-website-part-1.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])



@endsection
