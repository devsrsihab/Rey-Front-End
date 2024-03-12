@extends('layouts.app-navbar')
@section('title', 'TERMS OF SERVICE')
@push('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/termsAndPolicies.css') }}" />
@endpush

@section('content')
    @include('frontend-views.components.terms-of-service.hero')
    @include('frontend-views.components.terms-of-service.main')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/terms-of-service/terms-of-policies-footer.png',
        'finishing_title' => 'Home',
    ])
@endsection
