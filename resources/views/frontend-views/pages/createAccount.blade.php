@extends('layouts.app')


@section('content')

        {{--  =====Component flowChart=====
      1.Header 
      2.Hero section
      3.Breadcrumn section
      4.Why-Choose section
      5.Create-Account section
      6.CTA section
      7.Finishing section
      8.Footer section                 --}}

      @include('frontend-views.components.global.header')
      @include('frontend-views.components.createAccount.Hero')
      @include('frontend-views.components.createAccount.Breadcrumn')
      @include('frontend-views.components.createAccount.whyChoose')
      @include('frontend-views.components.createAccount.createAccountFrom')
      @include('frontend-views.components.global.CTA')
      @include('frontend-views.components.global.finishing',['finishing_title'=>'Shop','finishing_bg'=>'front-end/assets/images/page2/Rey-Xpress-Shop-Footer.jpg'])
      @include('frontend-views.components.global.footer')



@endsection