<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>{{ $title ?? 'Castle Education Consult' }}</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_NG">
    <meta property="og:url" content="{{ \URL::current() }}">
    <meta property="og:title" content="{{ $title ?? 'Castle Education Consult' }}">
    <meta property="og:description"  content="{{ $description ?? 'CASTLE EDUCATION CONSULT is a firm with a passion to re-orient the minds of students, schools, and educational administrators at all levels on progressively productive learning outcomes in Africa.' }}">
    <meta property="og:image" content="{{ $logo ?? asset('guest/images/meta-logo.png') }}">

    <meta property="twitter:type" content="website">
    <meta property="twitter:locale" content="en_NG">
    <meta property="twitter:url" content="{{ \URL::current() }}">
    <meta property="twitter:title" content="{{ $title ?? 'Castle Education Consult' }}">
    <meta property="twitter:description"  content="{{ $description ?? 'CASTLE EDUCATION CONSULT is a firm with a passion to re-orient the minds of students, schools, and educational administrators at all levels on progressively productive learning outcomes in Africa.' }}">
    <meta property="twitter:image" content="{{ $logo ?? asset('guest/images/meta-logo.png') }}">

    <meta name="google:card" content="summary_large_image">
    <meta name="google:url" content="{{ \URL::current() }}">
    <meta name="google:description" content="{{ $description ?? 'CASTLE EDUCATION CONSULT is a firm with a passion to re-orient the minds of students, schools, and educational administrators at all levels on progressively productive learning outcomes in Africa.' }}">
    <meta name="google:title" content="{{ $title ?? 'Castle Education Consult' }}">
    <meta name="google:image" content="{{ $logo ?? asset('guest/images/meta-logo.png') }}">

    <meta name="description" content="{{ $description ?? 'CASTLE EDUCATION CONSULT is a firm with a passion to re-orient the minds of students, schools, and educational administrators at all levels on progressively productive learning outcomes in Africa.' }}" />
    <meta name="author" content="Castle Education Consult" />
    <meta name="url" content="{{ \URL::current() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="mission, mobilizing, igniting, training, seminars, Grow with Mike " />
    <link href="{{ asset('guest/images/favicon.png')}}" rel="icon">
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

    <div class="zmm-wrapper">
        <a href="#" class="zmm-close close"></a>
        <div class="zmm-inner bg-white typo-dark">
            <div class="text-center mobile-logo-part margin-bottom-30">
                 <a href="{{ route('welcome')}}" class="img-before"><img src="{{ asset('guest/images/logo-dark.png') }}" class="img-fluid" width="170" height="51" alt="Logo"></a>
            </div>
            <div class="zmm-main-nav">
            </div>
			<div class="search-form-wrapper margin-top-30">
			    <form class="search-form" role="search">
			        <div class="input-group add-on">
			            <input class="form-control" placeholder="Search for.." name="srch-term" type="text">
			            <div class="input-group-btn">
			                <button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
			            </div>
			        </div>
			    </form>
			</div>
        </div>
    </div>

    <!-- Main wrapper-->
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            @include('includes.page-navbar')

            <!-- header -->
			<!-- START Zegen Home 2 REVOLUTION SLIDER 6.6.5 --><p class="rs-p-wp-fix"></p>

            {{ $slot }}
        </div>
        <!-- .page-wrapper-inner -->
    </div>
    <!--page-wrapper-->

    <!-- Footer -->
    <footer id="footer" class="footer footer-1 footer-bg-img" data-bg="images/bg/footer-bg.jpg') }}">
        <!--Footer Widgets Columns Posibilities 4-->
        <div class="footer-widgets">
            <div class="footer-middle-wrap footer-overlay-dark">
                <div class="color-overlay"></div>
                <div class="container">
                    <div class="row">
                         <div class="col-lg-3 widget text-widget">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title typo-white">About CEC </h3>
                            </div>
                            <!-- Text -->
                            <div class="widget-text margin-bottom-30">
                                <p>CASTLE EDUCATION CONSULT is a firm with a passion to re-orient the minds of students, schools, and educational administrators at all levels on progressively productive learning outcomes in Africa.</p>
                            </div>
                            {{-- <div class="social-icons">
                                <a href="#" class="social-fb"><span class="ti-facebook"></span></a>
                                <a href="#" class="social-twitter"><span class="ti-twitter"></span></a>
                                <a href="#" class="social-instagram"><span class="ti-instagram"></span></a>
                                <a href="#" class="social-pinterest"><span class="ti-pinterest"></span></a>
                                <a href="#" class="social-youtube"><span class="ti-youtube"></span></a>
                            </div> --}}
                        </div>
                        <!-- Col -->
                        <div class="col-lg-2 widget text-widget">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title typo-white">Quick Links</h3>
                            </div>
                            <!-- Text -->
                            <div class="menu-quick-links">
                                <ul class="menu">
                                    <li class="menu-item"><a href="{{ route('services')}}">What we do</a></li>
                                    <li class="menu-item"><a href="{{ route('about')}}">About</a></li>
                                    <li class="menu-item"><a href="{{ route('contact')}}">Contact</a></li>
                                    <li class="menu-item"><a href="{{ route('events')}}">Events</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Col -->
                        @if(count(getEvents())>0)
                        <div class="col-lg-4 widget recent-posts">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title typo-white">Upcoming Event</h3>
                            </div>
                            <nav>
                                <ul class="footer-list-posts">
                                    <!-- List Items -->
                                    @foreach(getEvents() as $event)
                                    <li>
                                        <div class="side-image">
                                            <a href="{{ route('events.show',[$event->event_title,$event->id])}}"><img width="80" height="80" alt="{{ $event->event_title}}"
                                                    src="{{ asset('guest/images/uploads/'.$event->image)}}" class="img-responsive wp-post-image" alt="Blog"></a>
                                        </div>
                                        <div class="side-item-text"><a href="{{ route('events.show',[$event->event_title,$event->id])}}">{{ $event->event_title}}</a>
                                            <span class="post-date d-block">{{ $event->event_date->format('d M, Y')}}</span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        @else
                        <div class="col-lg-4 widget recent-posts">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title typo-white">Our Services</h3>
                            </div>
                            <nav>
                                <ul class="footer-list-posts">
                                    <!-- List Items -->
                                    @foreach(getServices() as $service)
                                    <li>
                                        <div class="side-image">
                                            <a href="{{ route('services.show',[str_replace("/","",$service->service_title),$service->id])}}"><img width="80" height="80" alt="{{ $service->service_title}}"
                                                    src="{{ asset('guest/uploads/'.$service->service_image)}}" class="img-responsive wp-post-image" alt="Blog"></a>
                                        </div>
                                        <div class="side-item-text"><a href="{{ route('services.show',[str_replace("/","",$service->service_title),$service->id])}}">{{ $service->service_title}}</a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        @endif
                        <!-- Col -->
                        <div class="col-lg-3 widget contact-info-widget">
                            <div class="widget-title">
                                <!-- Title -->
                                <h3 class="title typo-white">Newsletter</h3>
                            </div>
                            <p>Sign up for our newsletter to stay updated on all events at Castle Education Consult, Special Promotions and More.</p>
                            <div class="mailchimp-widget-wrap">
                                <!-- subscribe form -->
                                <form id="subscribe-form-1" class="subscribe-form" action="inc/function.php">
                                    <div class="input-group add-on">
                                        <input type="text" class="form-control" name="mcemail" autocomplete="off" id="mcemail-1" placeholder="Email Address">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default subscribe-btn" type="submit">Sign Up</button>
                                        </div>
                                    </div>
                                    <p class="subscribe-status-msg hide"></p>
                                </form>
                            </div>
                        </div>
                        <!-- Col -->
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Copyright Columns Posibilities 4-->
        <div class="footer-copyright">
            <div class="footer-bottom-wrap pad-tb-20 typo-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="footer-bottom-items ">
                                <li class="nav-item">
                                    <div class="nav-item-inner">
                                        Copyrights  © 2024 <a href="#">Castle Education Consult</a>. </span>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
