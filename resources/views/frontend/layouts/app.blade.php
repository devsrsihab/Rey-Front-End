<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <!-- custom css -->
    @yield('css')
    <!--Tailwind css CDN -->
    @vite('resources/css/app.css')

</head>

<body>

    {{-- Check if the current route is not the root --}}
    @if (!request()->is('/'))
        @include('frontend.components.global.header')
    @endif

    @yield('content')


    <!-- component js -->
    @yield('js')

</body>

</html>
