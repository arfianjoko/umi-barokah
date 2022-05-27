<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rumah Sakit Umi Barokah</title>
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/plugins-css.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/typography.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/shortcodes/shortcodes.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('font/css/all.css') }}" rel="stylesheet" />
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>
<body>
    <x-navbar></x-navbar>
    {{ $slot }}
    <script type="text/javascript" src="{{ asset('js/plugins-jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('font/js/all.js') }}"></script>
    <script type="text/javascript">
        var plugin_path = 'js/';
    </script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

</body>
</html>