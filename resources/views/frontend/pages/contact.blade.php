@extends('layouts.app-navbar')
@section('title', 'Contact')
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/contact.css') }}" />
@endpush

@section('content')
    @include('frontend.components.contact.hero')
    @include('frontend.components.contact.main')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'frontend/assets/images/contact/contact-footer.png',
        'finishing_title' => 'Home',
    ])
@endsection
