@extends('layouts.app')
@section('title', 'COMPANY POLICIES')
@section('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/termsAndPolicies.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/local.css') }}" />
@endsection

@section('content')

    {{--  =====Component flowChart=====
      1.hero 
      2.main
      3.finishing section       
 --}}


    @include('frontend-views.components.company-policies.hero')
    @include('frontend-views.components.company-policies.main')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/terms-of-service/terms-of-policies-footer.png',
        'finishing_title' => 'Home',
    ])



@endsection
