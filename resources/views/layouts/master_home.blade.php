<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Harborlights - </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('fontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('fontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/rooms.css')}}">

    <link rel="stylesheet" href="{{asset('fontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{asset('fontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/style.css')}}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
  </head>
  <body>

@include('layouts.body.navbar')
@include('layouts.body.slider')
    
    <!-- END nav -->
	
    @yield('home_content')
@include('layouts.body.footer')
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('fontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('fontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('fontend/js/popper.min.js')}}"></script>
  <script src="{{asset('fontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('fontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('fontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('fontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('fontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('fontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('fontend/js/aos.js')}}"></script>
  <script src="{{asset('fontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('fontend/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('fontend/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('fontend/js/google-map.js')}}"></script>
  <script src="{{asset('fontend/js/main.js')}}"></script>
  <script src="https://kit.fontawesome.com/b085bde827.js" crossorigin="anonymous"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
    
  </body>
</html>