<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DOORS</title>

    <!-- page css file -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/accountCategoryRadio.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/3.Rey_website_shop_doors.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/5.rey-website-shop-blum-fitting.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/dimention.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/selectImageIcon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/local.css') }}">
    <script defer src="{{ asset('frontend/assets/js/counting.js') }}"></script>
    <!-- hover image  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/imageHover.css') }}">
    <script defer src="{{ asset('frontend/assets/js/imageHover.js') }}"></script>
    <!-- Navbar css file -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/mobile_navbar.css') }}" />

    <!--Tailwind css CDN -->
    @vite('../../../../resources/css/app.css')

</head>

<body class="overflow-x-hidden">

    {{-- header --}}
    @include('frontend.components.global.header')
    {{-- content --}}
    @include('frontend.components.doors.hero')
    @include('frontend.components.doors.breadcumn')
    @include('frontend.components.doors.main')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'frontend/assets/images/doors/door-footer.png',
        'finishing_title' => 'Drawers',
    ])
    {{-- footer --}}
    @include('frontend.components.global.footer')

    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('frontend/assets/js/mobile-navbar.js') }}"></script>
    <script defer src="{{ asset('frontend/assets/js/accountCategoryRadio.js') }}"></script>
</body>

</html>
