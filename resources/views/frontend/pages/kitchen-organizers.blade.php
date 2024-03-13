<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KITCHEN ORGANIZERS</title>

    <!-- page css file -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/5.rey-website-shop-blum-fitting.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/selectImageIcon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/local.css') }}">
    <!-- hover image  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/imageHover.css') }}">
    <!-- Navbar css file -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/mobile_navbar.css') }}" />

    <!--Tailwind css CDN -->
    @vite('../../../../resources/css/app.css')

</head>

<body class="overflow-x-hidden">

    {{-- header --}}
    @include('frontend.components.global.header')
    {{-- content --}}
    @include('frontend.components.kitchen-organizers.hero')
    @include('frontend.components.kitchen-organizers.breadcumn')
    @include('frontend.components.kitchen-organizers.main')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'frontend/assets/images/fitting/fitting-footer.png',
        'finishing_title' => 'Organizers',
    ])
    {{-- footer --}}
    @include('frontend.components.global.footer')


    <script defer src="{{ asset('frontend/assets/js/counting.js') }}"></script>
    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('frontend/assets/js/mobile-navbar.js') }}"></script>
    <script defer src="{{ asset('frontend/assets/js/imageHover.js') }}"></script>

</body>

</html>