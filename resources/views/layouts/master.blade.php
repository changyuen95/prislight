<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Website')</title>

    <!-- CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/animation/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/themify/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/loader/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <title>Pixel Builders</title>
</head>
<body>
    <div class="layout animsition">
        <div class="body_wrapper">
            @include('partials.header')

            <div class="content">
                @yield('content')
            </div>

            @include('partials.footer')
        </div>
        <form action="#" class="search_boxs" role="search">
            <div class="search_box_inner">
                <div class="close_icon">
                    <i class="ti-close"></i>
                </div>
                <div class="input-group">
                    <input type="text" name="search" class="form_control search-input" placeholder="Search Here" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="ti-email"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- JS -->
    {{-- <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/slick/slick.min.js') }}"></script>
    <script src="{{ asset('vendors/stellar/jquery.stellar.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('vendors/stellar/parallax-scroll.js') }}"></script>
    <script src="{{ asset('vendors/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendors/loader/animation.js') }}"></script>
    <script src="{{ asset('vendors/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('vendors/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendors/magnify-pop/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>