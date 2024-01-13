@extends('layouts.app')
@section('title', 'Tutorials')
@section('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/tutorials-page.css') }}" />
    <style>
        ul.list{

            list-style-type: disc !important;

        }


        #drawers-section {
            background-image: url('{{ asset("front-end/assets/images/tutorials-page/drawers-mobile.png") }}');
        }

        /* Change background image for screens 640px and larger */
        @media (min-width: 640px) {
            #drawers-section {
                background-image: url('{{ asset("front-end/assets/images/tutorials-page/order4.png") }}');
            }
        }
        #base-section {
            background-image: url('{{ asset("front-end/assets/images/tutorials-page/orde10-mobile.png") }}');
        }

        /* Change background image for screens 640px and larger */
        @media (min-width: 640px) {
            #base-section {
                background-image: url('{{ asset("front-end/assets/images/tutorials-page/order10.png") }}');
            }
        }
    </style>
@endsection

@section('content')

    {{--  =====Component flowChart=====
      1.hero section
      2.breadcumn section
      2.category-grid section
      3.CTA section
      4.finishing section       
 --}}


    @include('frontend-views.components.tutorials.hero')
    @include('frontend-views.components.tutorials.steps')
    @include('frontend-views.components.tutorials.main')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/tutorials-page/footer-end.png',
        'finishing_title' => 'Shop',
    ])



@endsection
