<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{config('APP_TITLE')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{config("SEO_KEYWORD")}}" name="keywords">
    <meta content="{{config("SEO_DESCRIPTION")}}" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{asset('css/font.css')}}" rel="stylesheet">

    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/modal-video/css/modal-video.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: eStartup
      Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body id="#body">

@include('layouts.header')

<!--==========================
  Banner Section
============================-->
@include('components.banner')

<!--==========================
  About Us Section
============================-->
@include('components.about-us')

<!--==========================
  Features Section
============================-->
@include('components.services')

<!--==========================
  Screenshots Section
============================-->
@include('components.example')

<!--==========================
  Video Section
============================-->
@include('components.video')

{{--@include('team')--}}

{{--
<!--==========================
  Blog Section
============================-->
@include('components.blogs')
--}}

<!--==========================
  Newsletter Section
============================-->
@include('components.contact')

<!--==========================
  Contact Section
============================-->
@include('components.joinus')

<!--==========================
  Footer
============================-->
@include('layouts.footer')


<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/modal-video/js/modal-video.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{asset('contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
