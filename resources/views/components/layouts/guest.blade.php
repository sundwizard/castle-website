<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/favicon.png') }}" rel="icon" />
    <!--Title-->
    <title>Zegen - Home 2</title>
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('guest/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('guest/css/font-awesome.min.css') }}">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{ asset('guest/css/simple-line-icons.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('guest/css/themify-icons.css') }}">
    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{ asset('guest/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/owl.theme.default.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('guest/css/magnific-popup.css') }}">
	 <!-- Revolution Slider -->
	 <link rel="stylesheet" type="text/css" href="{{ asset('guest/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
	 <!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('guest/rs-plugin/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('guest/rs-plugin/css/home-2/rs6.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('guest/css/color-schemes/red.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/style.css') }}" class="main-style">
    <style>	#rev_slider_6_1_wrapper .tp-loader.spinner1{ background-color: #FFFFFF !important; } </style>
	<style>.rs-layer.Concept-Content a,.rs-layer.Concept-Content a:visited{color:#fff !important; border-bottom:1px solid #fff !important; font-weight:700 !important}.rs-layer.Concept-Content a:hover{border-bottom:1px solid transparent !important}.rs-layer.Concept-Content-Dark a,.rs-layer.Concept-Content-Dark a:visited{color:#000 !important; border-bottom:1px solid #000 !important; font-weight:700 !important}.rs-layer.Concept-Content-Dark a:hover{border-bottom:1px solid transparent !important}@media only screen and (max-width:575px){rs-layer.res-slide-btn{padding:7px 16px !important;  font-size:13px !important}}#rev_slider_2_1_wrapper .uranus.tparrows{width:50px; height:50px; background:rgba(255,255,255,0)}#rev_slider_2_1_wrapper .uranus.tparrows:before{width:50px; height:50px; line-height:50px; font-size:40px; transition:all 0.3s;-webkit-transition:all 0.3s}#rev_slider_2_1_wrapper .uranus.tparrows.rs-touchhover:before{opacity:0.75}</style>
</head>
<!--Body Start-->
<body data-res-from="1025">
    <div class="page-loader"></div>
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            @yield('navbar')
            <!-- header -->
			<!-- START Zegen Home 2 REVOLUTION SLIDER 6.6.5 --><p class="rs-p-wp-fix"></p>

            {{ $slot }}
        </div>
        <!-- .page-wrapper-inner -->
    </div>
    <!--page-wrapper-->

    <!-- Footer -->
    @include('includes.footer')
    <!-- Footer -->
    <!-- jQuery Lib -->
    <script src="{{ asset('guest/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('guest/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Easing Js -->
    <script src="{{ asset('guest/js/jquery.easing.min.js') }}"></script>
    <!-- Carousel Js Code -->
    <script src="{{ asset('guest/js/owl.carousel.min.js') }}"></script>
    <!-- Isotope Js -->
    <script src="{{ asset('guest/js/isotope.pkgd.min.js') }}"></script>
    <!-- Magnific Popup Js -->
    <script src="{{ asset('guest/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Day Counter Js -->
    <script src="{{ asset('guest/js/jquery.countdown.min.js') }}"></script>
	<!-- Circle Progress Js -->
    <script src="{{ asset('guest/js/jquery.circle.progress.min.js') }}"></script>
	<!-- Validator Js -->
    <script src="{{ asset('guest/js/validator.min.js') }}"></script>
    <!-- Smart Resize Js -->
    <script src="{{ asset('guest/js/smartresize.min.js') }}"></script>
    <!-- Appear Js -->
    <script src="{{ asset('guest/js/jquery.appear.min.js') }}"></script>
    <!-- Theme Custom Js -->
    <script src="{{ asset('guest/js/custom.js') }}"></script>
	<!-- REVOLUTION JS FILES -->
	<script src="{{ asset('guest/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('guest/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script src="{{ asset('guest/rs-plugin/js/home-2/rbtools.min.js') }}"></script>
	<script src="{{ asset('guest/rs-plugin/js/home-2/rs6.min.js') }}"></script>
	<script src="{{ asset('guest/rs-plugin/js/home-2/home-2.js') }}"></script>
</body>
<!-- Body End -->
</html>
