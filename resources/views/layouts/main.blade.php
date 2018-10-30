<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{env('APP_NAME')}}  - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicons -->
    <link href="/imgs/cropped-logo-02-PNG-1-1-32x32.png" rel="icon">
    {{--<link href="/imgs/logo-PNG-.png" rel="apple-touch-icon">--}}

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/js/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Libraries CSS Files -->
    <link href="/js/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/js/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/js/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/js/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/js/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link href="/js/lib/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: BizPage
      Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">ClassGame</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="/imgs/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Home</a></li>
                <li><a href="{{URL::to('course')}}">Courses</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

    @yield('intro')


<main id="main">
    @yield('content')
</main>

@include('layouts.footer')
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@yield('custom-style')

<!-- JavaScript Libraries -->

<script src="/js/lib/jquery/jquery.min.js"></script>

<script src="/js/lib/jquery/jquery-migrate.min.js"></script>
<script src="/js/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/js/lib/easing/easing.min.js"></script>
<script src="/js/lib/superfish/hoverIntent.js"></script>
<script src="/js/lib/superfish/superfish.min.js"></script>
<script src="/js/lib/wow/wow.min.js"></script>
<script src="/js/lib/waypoints/waypoints.min.js"></script>
<script src="/js/lib/counterup/counterup.min.js"></script>
<script src="/js/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/js/lib/isotope/isotope.pkgd.min.js"></script>
<script src="/js/lib/lightbox/js/lightbox.min.js"></script>
<script src="/js/lib/touchSwipe/jquery.touchSwipe.min.js"></script>

<script src="/js/lib/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js"></script>


<!-- Contact Form JavaScript File -->
<script src="/js/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="/js/main.js"></script>

@yield('custom-script')
</body>
</html>
