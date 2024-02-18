<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CABINET HANDLES</title>
    
    <!-- page css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/5.rey-website-shop-blum-fitting.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/selectImageIcon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/local.css') }}">
    <!-- hover image  -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/imageHover.css') }}">
    <!-- Navbar css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/mobile_navbar.css') }}" />

    <!--Tailwind css CDN -->
    @vite('../../../../resources/css/app.css')

</head>

<body class="overflow-x-hidden">

    {{-- header --}}
    @include('frontend-views.components.global.header')
    {{-- content --}}
    @include('frontend-views.components.fittings.hero')
    @include('frontend-views.components.fittings.breadcumn')
    @include('frontend-views.components.fittings.main')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/handle/handle-footer.png',
        'finishing_title' => 'Counter Tops',
    ])
    {{-- footer --}}
    @include('frontend-views.components.global.footer')


    <script defer src="{{ asset('front-end/assets/js/imageHover.js') }}"></script>
    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('front-end/assets/js/mobile-navbar.js') }}"></script>
    <script defer src="{{ asset('front-end/assets/js/counting.js') }}"></script>

</body>

</html>