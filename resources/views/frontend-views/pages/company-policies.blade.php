@extends('layouts.app')
@section('title', 'Rey-Xpress')
@section('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/termsAndPolicies.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/local.css') }}" />
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


    @include('frontend-views.components.company-policies.hero')
    @include('frontend-views.components.company-policies.main')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/terms-of-service/terms-of-policies-footer.png',
        'finishing_title' => 'Home',
    ])



@endsection
