@extends('layouts.app')
@section('title', 'TERMS OF SERVICE')
@section('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/termsAndPolicies.css') }}" />
@endsection

@section('content')

    {{--  =====Component flowChart=====
      1.hero 
      3.main 
      5.finishing section       
 --}}


    @include('frontend-views.components.terms-of-service.hero')
    @include('frontend-views.components.terms-of-service.main')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/terms-of-service/terms-of-policies-footer.png',
        'finishing_title' => 'Home',
    ])



@endsection


