<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SHOP KITCHEN CABINETS AND VANETIES</title>
    <!--Tailwind css CDN -->
    @vite('../../../../resources/css/app.css')
    <!-- page css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/accountCategoryRadio.css') }}">
    <!-- Font awesome icons 1 -->
    <link rel="stylesheet" href="{{ asset('assets/css/page5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/3.Rey_website_shop_doors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/5.rey-website-shop-blum-fitting.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/selectImageIcon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/local.css') }}">
    <script defer src="{{ asset('assets/js/counting.js') }}"></script>

    <!-- hover image  -->
    <link rel="stylesheet" href="{{ asset('assets/css/imageHover.css') }}">
    <script defer src="{{ asset('assets/js/imageHover.js') }}"></script>


    <!-- Navbar css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/mobile_navbar.css') }}" />
    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('assets/js/mobile-navbar.js') }}"></script>
    <script defer src="{{ asset('assets/js/accountCategoryRadio.js') }}"></script>

    <!-- <script defer src="../js/page5.js"></script> -->
</head>

<body class="overflow-x-hidden">

    {{-- header --}}
    @include('frontend.components.global.header')
    {{-- content --}}
    @include('frontend.components.vanities.hero')
    @include('frontend.components.vanities.breadcumn')
    @include('frontend.components.vanities.main')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'assets/images/vanities/vaneties-footer.png',
        'finishing_title' => 'Drawers',
    ])
    {{-- footer --}}
    @include('frontend.components.global.footer')


    <script src="{{ asset('assets/js/tab-cabinet.js') }}"></script>
</body>

</html>
