@extends('layouts.app-navbar')
@section('title', 'Rey Projects')
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/local.css') }}" />
@endpush

@section('content')
    @include('frontend.components.projects.hero')
    @include('frontend.components.projects.breadcumn')
    @include('frontend.components.projects.main')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'frontend/assets/images/rey-projects/footer-shop.png',
        'finishing_title' => 'Shop',
    ])
@endsection

@push('js')
    <script defer src="{{ asset('frontend/assets/js/reyProjects.js') }}"></script>
@endpush
