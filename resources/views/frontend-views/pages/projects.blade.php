@extends('layouts.app-navbar')
@section('title', 'Rey Projects')
@push('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/local.css') }}" />
@endpush

@section('content')
    @include('frontend-views.components.projects.hero')
    @include('frontend-views.components.projects.breadcumn')
    @include('frontend-views.components.projects.main')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/rey-projects/footer-shop.png',
        'finishing_title' => 'Shop',
    ])
@endsection

@push('js')
    <script defer src="{{ asset('front-end/assets/js/reyProjects.js') }}"></script>
@endpush
