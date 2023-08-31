@extends('layouts.app')
@section('title','Tutorials')
@section('content')
     {{--  =====Component flowChart=====
      1. Header Section
      2. Hero Section
      3. work Section
      4. cabinet Section
      5. doors Section
      6. drawers Section
      7. accessories Section
      8. CTA Section
      9. Finishing Section
      10. Footer Section

               --}}
               
      @include('frontend-views.components.global.header')
      @include('frontend-views.components.tutorials.hero')
      @include('frontend-views.components.tutorials.work')
      @include('frontend-views.components.tutorials.cabinet')
      @include('frontend-views.components.tutorials.doors')
      @include('frontend-views.components.tutorials.drawers')
      @include('frontend-views.components.tutorials.accessories')
      @include('frontend-views.components.global.CTA')
      @include('frontend-views.components.global.finishing',['finishing_title'=>'Shop','finishing_bg'=>'front-end/assets/images/shop-page/footer-shop-page.png']) 
      @include('frontend-views.components.global.Footer')

@endsection