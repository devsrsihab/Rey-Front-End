@extends('layouts.app')
@section('title', 'Products & Finishes')

@section('content')

    {{--  =====Component flowChart=====
      1.hero section
      2.breadcumn section
      3.why-choose-us section
      4.create-account-form section
      5.CTA section
      6.finishing section
    
 --}}

    @include('frontend-views.rey-website-part-1.components.create-account.hero')
    @include('frontend-views.rey-website-part-1.components.create-account.breadcumn')
    @include('frontend-views.rey-website-part-1.components.create-account.why-choose-us')
    @include('frontend-views.rey-website-part-1.components.create-account.create-account-form')
    @include('frontend-views.rey-website-part-1.components.global.CTA')
    @include('frontend-views.rey-website-part-1.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])



@endsection
