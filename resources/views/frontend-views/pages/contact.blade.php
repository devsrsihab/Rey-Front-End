@extends('layouts.app')
@section('title', 'Contact')
@section('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/contact.css') }}" />
@endsection

@section('content')

    {{--  =====Component flowChart=====
      1.hero 
      2.main 
      3.finishing section       
     --}}


    @include('frontend-views.components.contact.hero')
    @include('frontend-views.components.contact.main')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/contact/contact-footer.png',
        'finishing_title' => 'Home',
    ])

@endsection