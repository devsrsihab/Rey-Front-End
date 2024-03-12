@extends('layouts.app-navbar')
@section('title', 'Rey Projects')
@push('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/local.css') }}" />
@endpush

@section('content')
    @include('frontend.components.projects.hero')
    @include('frontend.components.projects.breadcumn')
    @include('frontend.components.projects.main')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/rey-projects/footer-shop.png',
        'finishing_title' => 'Shop',
    ])
@endsection

@push('js')
    <script defer src="{{ asset('front-end/assets/js/reyProjects.js') }}"></script>
@endpush
