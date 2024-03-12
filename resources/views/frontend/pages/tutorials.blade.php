@extends('layouts.app-navbar')
@section('title', 'Tutorials')
@push('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/tutorials-page.css') }}" />
    <style>
        ul.list {

            list-style-type: disc !important;

        }


        #drawers-section {
            background-image: url('{{ asset('front-end/assets/images/tutorials-page/drawers-mobile.png') }}');
        }

        /* Change background image for screens 640px and larger */
        @media (min-width: 640px) {
            #drawers-section {
                background-image: url('{{ asset('front-end/assets/images/tutorials-page/order4.png') }}');
            }
        }

        #base-section {
            background-image: url('{{ asset('front-end/assets/images/tutorials-page/orde10-mobile.png') }}');
        }

        /* Change background image for screens 640px and larger */
        @media (min-width: 640px) {
            #base-section {
                background-image: url('{{ asset('front-end/assets/images/tutorials-page/order10.png') }}');
            }
        }
    </style>
@endpush

@section('content')
    @include('frontend.components.tutorials.hero')
    @include('frontend.components.tutorials.steps')
    @include('frontend.components.tutorials.main')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/tutorials-page/footer-end.png',
        'finishing_title' => 'Shop',
    ])
@endsection
