<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- If using Vite for assets, use this: -->
    @vite('resources/css/app.css')

    <title>@yield('title', 'Ecommerce')</title>

    <!-- Swiper CSS -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">



</head>
<body class="bg-gray-100 text-gray-800">
    @yield('content')

    <!-- Include JavaScript Files -->
    <script src="{{ mix('js/app.js') }}"></script>
    {{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>


    {{-- @include('components.footer') --}}
</body>
</html>
 