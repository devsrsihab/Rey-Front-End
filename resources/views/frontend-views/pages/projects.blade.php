@extends('layouts.app')
@section('title', 'Rey Projects')
@section('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/local.css') }}" />
@endsection

@section('content')

    {{--  =====Component flowChart=====
      1.hero 
      2.breadcumn 
      3.main 
      4.CTA section
      5.finishing section       
 --}}


    @include('frontend-views.components.projects.hero')
    @include('frontend-views.components.projects.breadcumn')
    @include('frontend-views.components.projects.main')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/rey-projects/footer-shop.png',
        'finishing_title' => 'Shop',
    ])



@endsection

@section('js')
<script defer src="{{ asset('front-end/assets/js/reyProjects.js') }}"></script>
@endsection