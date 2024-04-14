<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_NG">
    <meta property="og:url" content="https:://www.lighthubtech.com">
    <meta property="og:title" content="Lighthub">
    <meta property="og:description"
        content="Lighthub Technologies.">
    <meta property="og:image" content="{{ asset('assets/images/bg-logo.png') }}">
    <meta name="google:card" content="summary_large_image">
    <meta name="google:description"
        content="Lighthub Technologies">
    <meta name="google:title" content="Lighthub">
    <meta name="google:image" content="{{ asset('assets/images/bg-logo.png') }}">
    <meta name="description"
        content="Lighthub Technologies." />
    <meta name="author" content="Lighthub" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="Cypto, P2P, " />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>{{ $title ?? 'Authorized Access' }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.1.3')}}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=3.1.3') }}">
    @livewireStyles()
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <style>
                .disabled-button {
                      cursor: not-allowed;
                      opacity: 0.6;
                      pointer-events: none;
                    }
                </style>
                <div class="nk-wrap nk-wrap-nosidebar">
                    <!-- content @s -->
                    <div class="nk-content ">
                        <div class="nk-split nk-split-page nk-split-lg">
                            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                                </div><br>
                                <div class="nk-block nk-block-middle nk-auth-body ">
                                    <div class="brand-logo pb-5">
                                        <a href="#" class="logo-link">
                                            <img class="logo-light logo-img logo-img-lg" src="{{ asset('guest/images/logo-dark.png') }}" alt="logo">
                                            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('guest/images/logo-dark.png') }}" alt="logo-dark">
                                        </a>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">Authorized Accesss</h5><hr>
                                            <div class="nk-block-des">
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <x-feedback-alert />

                                    <form action="{{ route('login') }}" method="POST" class="form-validate is-alter" autocomplete="off"  onsubmit="this.submit_button.disabled = true;">
                                        @csrf
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="email-address">Email</label>
                                            </div>
                                            <div class="form-control-wrap">
                                                <input autocomplete="off" name="email" type="text" class="form-control form-control-lg" required id="email-address" placeholder="Enter your email address">
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div><!-- .form-group -->
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="password">Password</label>
                                                <a class="link link-primary link-sm" tabindex="-1" href="#">Forgot Password?</a>
                                            </div>
                                            <div class="form-control-wrap">
                                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input autocomplete="new-password" name="password" type="password" class="form-control form-control-lg" required id="password" placeholder="Enter your password">
                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div><!-- .form-group -->
                                        <div class="form-group">
                                            <button onclick="disableButton(this)" class="btn btn-lg btn-danger btn-block">Sign in</button>
                                        </div>
                                    </form><!-- form -->
                                </div><!-- .nk-block -->

                            </div><!-- .nk-split-content -->
                            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                    <div class="slider-init">
                                        <div class="slider-item">
                                            <div class="nk-feature nk-feature-center">
                                                <div class="nk-feature-img">
                                                    <img class="round" src="{{ asset('guest/images/risk2.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div><!-- .slider-item -->
                                    </div><!-- .slider-init -->
                                    <div class="slider-dots"></div>
                                    <div class="slider-arrows"></div>
                                </div><!-- .slider-wrap -->
                            </div><!-- .nk-split-content -->
                        </div><!-- .nk-split -->
                    </div>
                    <!-- wrap @e -->
                </div>
            <script>
             function disableButton(button) {
                 button.disabled = true;
                 button.value = "submitting...."
                 button.form.submit();
            }
            </script>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @livewireScripts()
    <script src="{{ asset('assets/js/bundle.js?ver=3.1.3') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.1.3') }}"></script>
</html>
