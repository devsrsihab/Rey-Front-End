<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>


    <!-- Navbar css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/navbar/mobile_navbar.css') }}" />
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/icons/all.min.css') }}" />
    <!-- custom css -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}" />
    <!--Tailwind css CDN -->
    @vite('resources/css/app.css')
    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('front-end/assets/navbar/mobile-navbar.js') }}"></script>

</head>

<body>
    @include('frontend-views.components.global.header')

    @yield('content')

    @include('frontend-views.components.global.footer')

    <!-- component js -->
    @yield('js')
    <script src="{{ asset('front-end/assets/js/shop-page.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/hover-image.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/index.js') }}"></script>
    <script src="{{ asset('front-end/assets/navbar/navbar.js') }}"></script>


</body>

</html>
