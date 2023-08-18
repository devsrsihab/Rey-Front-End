<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rey-Xpress</title>

    <!--Tailwind css CDN -->
    @vite('resources/css/app.css')
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

</head>

<body>
    @yield('content')


    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('front-end/assets/navbar/mobile-navbar.js') }}"></script>
    <!-- component js -->
    <script src="{{ asset('front-end/assets/js/shop-page.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/hover-image.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/index.js') }}"></script>
</body>

</html>
