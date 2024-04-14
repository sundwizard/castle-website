<div>
    <x-slot name="title">Contact Marketwell Solutions</x-slot>
    @section('contact') active @endsection

    <div class="page-title-wrap typo-white" wire:ignore>
        <div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('guest/images/contact/contact_bg1.jpg') }}">
            <span class="theme-overlay"></span>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="page-title-inner">
                            <div id="breadcrumb" class="breadcrumb margin-bottom-10">
                                <a href="{{ route('welcome')}}" class="theme-color">Home</a>
                                <span class="current">Contact</span>
                            </div>
                            <h1 class="page-title mb-0">Contact Us</h1>
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
            <section class="contact-form-section form-with-img bg-grey">
                <div class="container">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-6 align-self-center">
                            <!-- Contact Form -->
                            <div class="contact-img">
                                <img src="{{ asset('guest/images/contact/contact_bg1.jpg') }}" class="" alt="about-img">
                            </div>
                        </div>
                        <!-- .col -->
                        <div class="col-lg-6 ps-lg-5">
                            <div class="contact-info info-2">
                                <div class="section-title margin-bottom-50">
                                    <span class="sub-title theme-color text-uppercase">Get In Touch</span>
                                    <h2 class="section-title margin-top-5">Feel Free To Contact Us</h2>
                                    <span class="border-bottom"></span>
                                </div>
                                <div class="margin-bottom-30">
                                    <p class="mb-0">You can contact us on:.</p>
                                </div>
                                <!-- Feature List -->
                                <div class="feature-box-wrap f-list-4">
                                    <div class="feature-box-details">
                                        <!-- Media -->
                                        <div class="media">
                                            <div class="feature-list-icon me-3">
                                                <span class="ti-location-pin"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="feature-content">
                                                    <div class="feature-title">
                                                        <h5>Our Address</h5>
                                                    </div>
                                                    <div class="feature-box-content">
                                                        <p>Q 10 Quoi Street, Sabon Tasha, Kaduna State..</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Media -->
                                    </div>
                                </div>
                                <!-- Feature List -->
                                <!-- Feature List -->
                                <div class="feature-box-wrap f-list-4">
                                    <div class="feature-box-details">
                                        <!-- Media -->
                                        <div class="media">
                                            <div class="feature-list-icon me-3">
                                                <span class="ti-headphone-alt"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="feature-content">
                                                    <div class="feature-title">
                                                        <h5>Phone Number</h5>
                                                    </div>
                                                    <div class="feature-box-content">
                                                        <p><a href="tel:+2347037719388">+(234) 703 771 9388</a>,</p>
                                                        <p><a href="tel:+2349065350966">+(234) 906 535 0966</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Media -->
                                    </div>
                                </div>
                                <!-- Feature List -->
                                <!-- Feature List -->
                                <div class="feature-box-wrap f-list-4 mb-0">
                                    <div class="feature-box-details">
                                        <!-- Media -->
                                        <div class="media">
                                            <div class="feature-list-icon me-3">
                                                <span class="ti-email"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="feature-content">
                                                    <div class="feature-title">
                                                        <h5>Email Address</h5>
                                                    </div>
                                                    <div class="feature-box-content">
                                                        <p><a href="mailto:info@castleeduconsult.com.ng">info@castleeduconsult.com.ng</a>,</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Media -->
                                    </div>
                                </div>
                                <!-- Feature List -->
                            </div>
                        </div>
                         <!-- Col -->
                    </div>
                </div>
            </section>
            {{-- <!-- Contact Section -->
            <section class="contact-form-section form-with-img">
                <div class="container">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-6 pad-none">
                            <img src="{{ asset('guest/images/contact/contact.jpg')}}" width="80%" />
                        </div>
                        <div class="col-lg-6 pe-0">
                            <!-- Contact Form -->
                            <div class="contact-form-4 bg-white">
                                <!-- Form -->
                                <div class="contact-form-wrap">
                                    <!-- form inputs -->
                                    <form class="contact-form" wire:submit.prevent="sendMessage" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- form group -->
                                                <div class="form-group">
                                                    <input class="form-control" wire:model="name" name="name" placeholder="Name"  type="text" />
                                                    @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <!-- form group -->
                                                <div class="form-group">
                                                    <input id="email" class="form-control" wire:model="email" name="email" placeholder="Email"  type="email">
                                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <!-- form group -->
                                                <div class="form-group">
                                                    <input id="phone" class="form-control" wire:model="phone" name="phone" placeholder="Phone"  type="text">
                                                    @error('phone') <p class="text-danger">{{$message}}</p>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-message">
                                                    <!-- form group -->
                                                    <div class="form-group">
                                                        <textarea id="message" wire:model="comment" class="form-control textarea" rows="5" name="message" placeholder="Your Message" ></textarea>
                                                        @error('comment') <p class="text-danger">{{$message}}</p>@enderror
                                                    </div>
                                                </div>
                                                <!-- form button -->
                                                <button wire:loading.remove wire:target="sendMessage" type="submit" class="btn btn-default mt-0 theme-btn">Send Now</button>
                                                <button wire:loading wire:target="sendMessage" class="btn btn-default" type="submit"><x-guest-loader /></i></button>

                                            </div>
                                        </div>
                                    </form>
                                    <!-- form inputs end -->
                                </div>
                                <!-- Form End-->
                            </div>
                            <!-- contact-form-1 -->
                        </div>
                        <!-- .col -->

                         <!-- Col -->
                    </div>
                </div>
            </section>
            <!-- Contact Form Section End --> --}}
        </div>
    </div>
</div>
<!-- .page-wrapper-inner -->
