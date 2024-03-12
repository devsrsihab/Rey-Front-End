@extends('layouts.app-navbar')
@section('title', 'Contact')
@push('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/contact.css') }}" />
@endpush

@section('content')
    @include('frontend-views.components.contact.hero')
    @include('frontend-views.components.contact.main')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/contact/contact-footer.png',
        'finishing_title' => 'Home',
    ])
@endsection
