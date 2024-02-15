<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KITCHEN ORGANIZERS</title>

    <!-- page css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/5.rey-website-shop-blum-fitting.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/selectImageIcon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/local.css') }}">
    <!-- hover image  -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/imageHover.css') }}">
    <!-- Navbar css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/navbar/mobile_navbar.css') }}" />

    <!--Tailwind css CDN -->
    @vite('../../../../resources/css/app.css')

</head>

<body class="overflow-x-hidden">

    {{-- header --}}
    @include('frontend-views.components.global.header')
    {{-- content --}}
    @include('frontend-views.components.kitchen-organizers.hero')
    @include('frontend-views.components.kitchen-organizers.breadcumn')
    @include('frontend-views.components.kitchen-organizers.main')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/fitting/fitting-footer.png',
        'finishing_title' => 'Organizers',
    ])
    {{-- footer --}}
    @include('frontend-views.components.global.footer')


    <script defer src="{{ asset('front-end/assets/js/counting.js') }}"></script>
    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('front-end/assets/navbar/mobile-navbar.js') }}"></script>
    <script defer src="{{ asset('front-end/assets/js/imageHover.js') }}"></script>

</body>

</html>
