<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SHOP KITCHEN CABINETS AND VANETIES</title>
    <!--Tailwind css CDN -->
    @vite('../../../../resources/css/app.css')
    <!-- page css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/accountCategoryRadio.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Font awesome icons 1 -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/page5.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/3.Rey_website_shop_doors.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/5.rey-website-shop-blum-fitting.css') }}" />
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/selectImageIcon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/local.css') }}">
    <script defer src="{{ asset('front-end/assets/js/counting.js') }}"></script>

    <!-- hover image  -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/imageHover.css') }}">
    <script defer src="{{ asset('front-end/assets/js/imageHover.js') }}"></script>


    <!-- Navbar css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/mobile_navbar.css') }}" />
    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('front-end/assets/js/mobile-navbar.js') }}"></script>
    <script defer src="{{ asset('front-end/assets/js/accountCategoryRadio.js') }}"></script>

    <!-- <script defer src="../js/page5.js"></script> -->
</head>

<body class="overflow-x-hidden">

    {{-- header --}}
    @include('frontend-views.components.global.header')
    {{-- content --}}
    @include('frontend-views.components.vanities.hero')
    @include('frontend-views.components.vanities.breadcumn')
    @include('frontend-views.components.vanities.main')
    @include('frontend-views.components.global.CTA')
    @include('frontend-views.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/vanities/vaneties-footer.png',
        'finishing_title' => 'Drawers',
    ])
    {{-- footer --}}
    @include('frontend-views.components.global.footer')


    <script src="{{ asset('front-end/assets/js/tab-cabinet.js') }}"></script>
</body>

</html>
