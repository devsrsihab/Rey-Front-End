<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>


    <!-- Navbar css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/navbar/mobile_navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/navbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}" />
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/icons/all.min.css') }}" />

    <!-- component css -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/homeHero.css') }}" />
    <!-- Shop Page css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/shop-page.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/hover-image.css') }}">
    <!-- Create Account css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/policy-checkbox.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/page3.css') }}">
    <!-- Product Details css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/page4.css') }}">
    <!-- Contact css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/contact.css') }}">
    <!-- Shop css-->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/shop-page.css') }}">
    <!--Tailwind css CDN -->
    @vite('resources/css/app.css')


</head>

<body>
    @yield('content')


    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('front-end/assets/navbar/mobile-navbar.js') }}"></script>
    <!-- component js -->
    <script src="{{ asset('front-end/assets/js/shop-page.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/hover-image.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/index.js') }}"></script>
    <script src="{{ asset('front-end/assets/navbar/navbar.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/page4.js') }}"></script>

</body>

</html>
