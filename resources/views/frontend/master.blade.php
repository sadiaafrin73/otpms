<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TutionHub</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('/frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('/frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

 <!-- @stack('css') -->
  <!-- Template Main CSS File -->
  <link href="{{asset('/frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KnightOne - v2.1.0
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  @include('frontend.partials.header')
 <!-- End Header -->
<div class="wrap" style="margin-top:20px;"> 
  @yield('main')
  <!-- End #main -->
</div>

  <!-- ======= Footer ======= -->
  @include('frontend.partials.footer')
 <!-- End Footer -->
 

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/frontend/assets/js/main.js')}}"></script>
  <!-- @stack('js') -->

</body>

</html>