<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rumah Sakit Umi Barokah</title>
    <link type="text/css" href="{{ asset('vendors/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('vendors/fontawesome/css/all.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('vendors/owlcarousel2/assets/owl.carousel.css') }}" rel="stylesheet" />
    <script type="text/javascript" src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
</head>
<body>
    <x-navbar></x-navbar>
    {{ $slot }}
    <script type="text/javascript" src="{{ asset('vendors/bootstrap/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/fontawesome/js/all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/owlcarousel2/owl.carousel.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                navigation : false,
                slideSpeed : 300,
                paginationSpeed : 400,
                items : 1, 
                itemsDesktop : false,
                itemsDesktopSmall : true,
                itemsTablet: true,
                itemsMobile : true
            });
        });
    </script>
</body>
</html>