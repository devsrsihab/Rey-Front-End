<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drawers</title>

    <!-- page css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/accountCategoryRadio.css') }}">


    <link rel="stylesheet" href="{{ asset('front-end/assets/css/3.Rey_website_shop_doors.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/5.rey-website-shop-blum-fitting.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/selectImageIcon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/local.css') }}">
    <script defer src="{{ asset('front-end/assets/js/counting.js') }}"></script>
    <!-- hover image  -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/imageHover.css') }}">
    <!-- Navbar css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/mobile_navbar.css') }}" />


    <!--Tailwind css CDN -->
    @vite('../../../../resources/css/app.css')

</head>

<body class="overflow-x-hidden">

    {{-- header --}}
    @include('frontend.components.global.header')
    {{-- content --}}
    @include('frontend.components.drawers.hero')
    @include('frontend.components.drawers.breadcumn')
    @include('frontend.components.drawers.main')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/drawers/drawers-footer.png',
        'finishing_title' => 'Fittings',
    ])
    {{-- footer --}}
    @include('frontend.components.global.footer')


    <script defer src="{{ asset('front-end/assets/js/imageHover.js') }}"></script>
    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('front-end/assets/js/mobile-navbar.js') }}"></script>
    <script defer src="{{ asset('front-end/assets/js/accountCategoryRadio.js') }}"></script>

</body>

</html>
