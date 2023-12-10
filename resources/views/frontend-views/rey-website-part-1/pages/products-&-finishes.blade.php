@extends('layouts.app')
@section('title', 'Products & Finishes')

@section('content')

    {{--  =====Component flowChart=====
      1.hero section
      1.main section
      1.CTA section
      1.finishing section
    
 --}}



    @include('frontend-views.rey-website-part-1.components.products-&-finishes.hero')
    @include('frontend-views.rey-website-part-1.components.products-&-finishes.main')
    @include('frontend-views.rey-website-part-1.components.global.CTA')
    @include('frontend-views.rey-website-part-1.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/productsAndFinishes/Rey-Xpress-Shop-Footer.jpg',
        'finishing_title' => 'Shop',
    ])



@endsection
