@extends('layouts.app')
@section('title','Home')

@section('content')

    {{--  =====Component flowChart=====
      1. Main Section
      3. Hero Section

               --}}

      @include('frontend-views.components.home2.main')
      @include('frontend-views.components.home2.footer')
  
@endsection