<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit Umi Barokah</title>
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon">
    <link type="text/css" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendors/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendors/fontawesome/css/all.css') }}" rel="stylesheet">
    <link type="text/css" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet" id="theme-opt">
    <link type="text/css" href="{{ asset('css/color-skin/skyblue.css') }}" rel="stylesheet" id="color-opt">
    <script type="text/javascript" src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
</head>
<body class="bg-dark">
    <x-navbar></x-navbar>
    {{ $slot }}
    <script type="text/javascript" src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendors/fontawesome/js/all.js') }} "></script>
    <script type="text/javascript" src="{{ asset('js/plugins.init.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
        },
    });
</script>
</body>
</html>