@extends('frontend.layouts.app-navbar')
@section('title', 'TERMS OF SERVICE')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/termsAndPolicies.css') }}" />
@endpush

@section('content')
    @include('frontend.components.terms-of-service.hero')
    @include('frontend.components.terms-of-service.main')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'assets/images/terms-of-service/terms-of-policies-footer.png',
        'finishing_title' => 'Home',
    ])
@endsection
