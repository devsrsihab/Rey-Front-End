<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CROWN MOULDING</title>

    <!-- page css file -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/accountCategoryRadio.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/3.Rey_website_shop_doors.css') }}">
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
    @include('frontend.components.global.header')
    {{-- content --}}
    @include('frontend.components.crown-moulding.hero')
    @include('frontend.components.crown-moulding.breadcumn')
    @include('frontend.components.crown-moulding.main')
    @include('frontend.components.global.CTA')
    @include('frontend.components.global.finishing', [
        'finishing_bg' => 'front-end/assets/images/crown/crown-moulding-footer.png',
        'finishing_title' => 'Counter Tops',
    ])
    {{-- footer --}}
    @include('frontend.components.global.footer')

    <script defer src="{{ asset('front-end/assets/js/accountCategoryRadio.js') }}"></script>
    <script defer src="{{ asset('front-end/assets/js/imageHover.js') }}"></script>
    <!-- Navbar javascript file  -->
    <script defer src="{{ asset('front-end/assets/js/mobile-navbar.js') }}"></script>
    <script defer src="{{ asset('front-end/assets/js/counting.js') }}"></script>

</body>

</html>
