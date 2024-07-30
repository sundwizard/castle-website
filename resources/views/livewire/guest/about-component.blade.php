<div>
    <x-slot name="title">About Castle Education Consult</x-slot>
    @section('about') active @endsection

    <x-slot name="logo">{{ asset('assets/images/about-us/about-us-img.jpg')}}</x-slot>
    <x-slot name="description">{{ "LivingWord Global Leadership Mission is a non-denominational, mission-based Christian organisation, commissioned to raise workforce for global impact by creating links between denominations, churches and ministries with the mission fields"}}</x-slot>

    <div class="page-title-wrap typo-white">
        <div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('/guest/rs-plugin/assets/z2-slider-1.jpg') }}">
            <span class="theme-overlay"></span>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="page-title-inner">
                            <div id="breadcrumb" class="breadcrumb margin-bottom-10">
                                <a href="{{ route('welcome')}}" class="theme-color">Home</a>
                                <span class="current">About Us</span>
                            </div>
                            <h1 class="page-title mb-0">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header -->
    <!-- Page Content -->
    <div class="content-wrapper pad-none">
        <div class="content-inner">
            <!-- About Section -->
            <section id="section-about" class="section-about pad-bottom-none">
                <div class="container">
                    <!-- Row -->
                    <div class="row d-flex align-items-center">
                        <!-- Col -->
                        <div class="col-lg-6">
                            <!-- about wrap -->
                            <div class="about-wrap relative">
                                <div class="about-wrap-inner">
                                    <!-- about details -->
                                    <div class="about-wrap-details">
                                        <!-- about button -->
                                        <div class="text-center">
                                            <div class="about-img mb-4 mb-md-0">
                                                <img src="{{ asset('guest/images/about-us/about-us-img.png') }}" width="60%" class="" alt="about-img">
                                            </div>
                                            <!-- .col -->
                                        </div>
                                    </div>
                                    <!-- about details End-->
                                </div>
                            </div>
                            <!-- about wrap end -->
                        </div>
                        <!-- .col -->
                        <!-- Col -->
                        <div class="col-lg-6 ps-lg-0">
                            <div class="title-wrap margin-bottom-50">
                                <div class="section-title">
                                    <span class="sub-title theme-color text-uppercase">About</span>
                                    <h2 class="section-title margin-top-5">Castle Education Consult</h2>
                                    <span class="border-bottom"></span>
                                </div>
                                <div class="pad-top-15">
                                    <p class="margin-bottom-20">Castle Education Consult is dedicated to reorienting individuals across various fields to foster progressive and productive learning outcomes in Africa.</p>
                                    <p class="margin-bottom-20">We are committed to identifying and addressing educational challenges while building capacities for future leaders through innovation and creativity. Our goal is to ensure that education encompasses all knowledge, skills, and experiences that contribute to a better life and society, regardless of the learning format.</p>
                                </div>
                            </div>

                        </div>
                        <!-- Col -->
                    </div>
                    <!-- Row -->
                </div>
                <!-- Container -->
            </section>

            <section id="feature-section" class="feature-section pad-none pad-bottom-100 broken-top-1500 pad-bottom-md-none">
                <div class="container">
                    <!-- Row -->
                    <div class="row">
                        <!-- Col -->

                        <!-- Col -->
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="f-box-style-2 text-center">
                                <div class="f-box-inner div-bg-img b-radius-20" >
                                    <div class="feature-icon margin-bottom-15">
                                        <img src="{{ asset('guest/images/icons/vision.png') }}" width="50" />
                                    </div>
                                    <div class="feature-content mb-3">
                                        <div class="feature-title">
                                            <h5 class="margin-bottom-15">Vision</h5>
                                        </div>
                                        <p class="mb-0">Redefining Education in Africa for Self-Development and Community Growth.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="f-box-style-2 text-center">
                                <div class="f-box-inner div-bg-img b-radius-20">
                                    <div class="feature-icon margin-bottom-15">
                                        <img src="{{ asset('guest/images/icons/mission.png') }}" width="50" />
                                    </div>
                                    <div class="feature-content mb-3">
                                        <div class="feature-title">
                                            <h5 class="margin-bottom-15">Mission</h5>
                                        </div>
                                        <p class="mb-0">Our mission is to provide innovative learning, development, and strategic planning to individuals, schools, communities, government, and private organizations to enhance learning outcomes and productivity at all business engagement levels. We also collaborate with NGOs to implement educational projects.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-lg-4">
                            <div class="f-box-style-2 text-center">
                                <div class="f-box-inner div-bg-img b-radius-20" >
                                    <div class="feature-icon margin-bottom-15">
                                        <img src="{{ asset('guest/images/icons/values.png') }}" width="50" />
                                    </div>
                                    <div class="feature-content mb-3">
                                        <div class="feature-title">
                                            <h5 class="margin-bottom-15">Core Values</h5>
                                        </div>
                                        <p class="mb-0">Innovativeness, Integrity, Simplicity, Collaboration and Growth (IISCG)
                                            .</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                </div>
                <!-- Container -->
            </section>
        </div>
    </div>

</div>
<!-- .page-wrapper-inner -->
<!--page-wrapper-->
