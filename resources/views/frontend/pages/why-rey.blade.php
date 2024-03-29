@extends('frontend.layouts.app-navbar')
@section('title', 'Why Rey Xpress')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/why-rey-page.css') }}" />
    <style>
        #sample-wood-div {
            background-image: url('{{ asset('assets/images/why-rey-page/sample-wood-mobile.png') }}');
        }

        /* Change background image for screens 640px and larger */
        @media (min-width: 640px) {
            #sample-wood-div {
                background-image: url('{{ asset('assets/images/why-rey-page/Rey-Xpress-Free-Samples.jpg') }}');
            }
        }

        #best-price-div {
            background-image: url('{{ asset('assets/images/why-rey-page/room-sample-mobile.png') }}');
        }

        /* Change background image for screens 640px and larger */
        @media (min-width: 640px) {
            #best-price-div {
                background-image: url('{{ asset('assets/images/why-rey-page/Rey-Xpress-Best-Prices.jpg') }}');
            }
        }
    </style>
@endpush

@section('content')
    @include('frontend.components.why-rey.hero')
    @include('frontend.components.why-rey.breadcumn')
    @include('frontend.components.why-rey.advance')
    @include('frontend.components.why-rey.main')
    @include('frontend.components.why-rey.sample-gurantee')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'assets/images/why-rey-page/why-rey-footer.png',
        'finishing_title' => 'Tutorial',
    ])
@endsection

@push('js')
    <script src="{{ asset('assets/js/why-rey-page.js') }}"></script>
@endpush
