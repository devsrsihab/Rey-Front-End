@extends('layouts.app')
@section('title', 'CONTACT')
@section('content')

    {{--  =====Component flowChart=====
      1.Header 
      2.Banner section
      3.Main section
      4.Finishing section
      5.Footer section                 --}}


      @include('frontend-views.components.global.header')
      @include('frontend-views.components.contact.hero')
      @include('frontend-views.components.contact.main')
      @include('frontend-views.components.global.finishing',['finishing_title'=>'Shop','finishing_bg'=>'front-end/assets/images/contact/contact-footer.png']) 
      @include('frontend-views.components.global.footer')



@endsection