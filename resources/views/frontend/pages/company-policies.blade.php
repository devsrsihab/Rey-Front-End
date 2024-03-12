@extends('layouts.app-navbar')
@section('title', 'COMPANY POLICIES')
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/termsAndPolicies.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/local.css') }}" />
@endpush

@section('content')
    @include('frontend.components.company-policies.hero')
    @include('frontend.components.company-policies.main')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'frontend/assets/images/terms-of-service/terms-of-policies-footer.png',
        'finishing_title' => 'Home',
    ])
@endsection
