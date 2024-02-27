<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>



    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/icons/font-awesome-all.min.css') }}" />
    <!-- custom css -->
    @stack('css')
    
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}" />
    <!--Tailwind css CDN -->
    @vite('resources/css/app.css')
    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('front-end/assets/navbar/mobile-navbar.js') }}"></script>
    <!-- Navbar css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/navbar/mobile_navbar.css') }}" />
</head>

<body>
    
    {{-- Check if the current route is not the root --}}
    @if (!request()->is('/'))
        @include('frontend-views.components.global.header')
    @endif

    @yield('content')

    {{-- Check if the current route is not the root --}}
    @if (!request()->is('/'))
        @include('frontend-views.components.global.footer')
    @endif

    <!-- component js -->
    @stack('js')


</body>

</html>
