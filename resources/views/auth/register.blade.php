<x-guest-layout>
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
                                <span class="current">Signup</span>
                            </div>
                            <h1 class="page-title mb-0">Signup</h1>
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

            <!-- Contact Section -->
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
                                                    <input class="form-control" name="surname" placeholder="Surname"  type="text" />
                                                    @error('surname') <p class="text-danger">{{$message}}</p>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <!-- form group -->
                                                <div class="form-group">
                                                    <input class="form-control" name="othernames" placeholder="Othernames"  type="text" />
                                                    @error('othernames') <p class="text-danger">{{$message}}</p>@enderror
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
                                            <button wire:loading.remove wire:target="sendMessage" type="submit" class="btn btn-default mt-0 theme-btn">Signup</button>
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
            <!-- Contact Form Section End -->
        </div>
    </div>
</x-app-layout>
<!-- .page-wrapper-inner -->
