@extends('layouts.main')
@section('head')
    @include('includes.head')
@endsection
@section('content')
    <div class="vertical-layout vertical-menu-modern  dark-layout blank-page blank-page" data-menu="vertical-menu-modern"
        data-col="blank-page" data-framework="laravel"
        data-asset-path="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/">

        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>

            <div class="content-wrapper">
                <div class="content-body">


                    <div class="auth-wrapper auth-cover">
                        <div class="auth-inner row m-0">
                            <!-- Brand logo-->
                            <a class="brand-logo" href="#">
                                <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                                    <defs>
                                        <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                            y2="89.4879456%">
                                            <stop stop-color="#000000" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                        <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                            x2="37.373316%" y2="100%">
                                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                                <path class="text-primary" id="Path"
                                                    d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                    style="fill: currentColor"></path>
                                                <path id="Path1"
                                                    d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                    fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                    points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                                </polygon>
                                                <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                    points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                                </polygon>
                                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                    points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                                </polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <h2 class="brand-text text-primary ms-1">Kemang</h2>
                            </a>
                            <!-- /Brand logo-->

                            <!-- Left Text-->
                            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                                    <img class="img-fluid" src="{{ asset('app-assets/images/pages/login-v2-dark.svg') }}"
                                        alt="Login V2" />
                                </div>
                            </div>
                            <!-- /Left Text-->

                            <!-- Login-->
                            <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                    <h2 class="card-title fw-bold mb-1">Welcome to Kemang! 👋</h2>
                                    <p class="card-text mb-2">Silahkan Login untuk melihat lebih lanjut informasi seputar
                                        Kemang!</p>
                                    <form class="auth-login-form mt-2" action="/" method="GET">
                                        <div class="mb-1">
                                            <label class="form-label" for="login-email">Email</label>
                                            <input class="form-control" id="login-email" type="text" name="login-email"
                                                placeholder="john@example.com" aria-describedby="login-email" autofocus=""
                                                tabindex="1" />
                                        </div>
                                        <div class="mb-1">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label" for="login-password">Password</label>
                                                <a
                                                    href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/auth/forgot-password-cover">
                                                    <small>Forgot Password?</small>
                                                </a>
                                            </div>
                                            <div class="input-group input-group-merge form-password-toggle">
                                                <input class="form-control form-control-merge" id="login-password"
                                                    type="password" name="login-password" placeholder="············"
                                                    aria-describedby="login-password" tabindex="2" />
                                                <span class="input-group-text cursor-pointer"><i
                                                        data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <div class="form-check">
                                                <input class="form-check-input" id="remember-me" type="checkbox"
                                                    tabindex="3" />
                                                <label class="form-check-label" for="remember-me"> Remember Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                                    </form>
                                    <p class="text-center mt-2">
                                        <span>New on our platform?</span>
                                        <a
                                            href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/auth/register-cover"><span>&nbsp;Create
                                                an account</span></a>
                                    </p>
                                    <div class="divider my-2">
                                        <div class="divider-text">or</div>
                                    </div>
                                    <div class="auth-footer-btn d-flex justify-content-center">
                                        <a class="btn btn-facebook" href="#"><i data-feather="facebook"></i></a>
                                        <a class="btn btn-twitter white" href="#"><i
                                                data-feather="twitter"></i></a>
                                        <a class="btn btn-google" href="#"><i data-feather="mail"></i></a>
                                        <a class="btn btn-github" href="#"><i data-feather="github"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Login-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End: Content-->


        <!-- BEGIN: Vendor JS-->
        <script
            src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/vendors/js/vendors.min.js?id=7dca1a1f6b86fd5d70ac">
        </script>
        <!-- BEGIN Vendor JS-->
        <!-- BEGIN: Page Vendor JS-->
        <script
            src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/vendors/js/ui/jquery.sticky.js?id=17f0788e54b9dc4eb93d">
        </script>
        <script
            src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/vendors/js/forms/validation/jquery.validate.min.js?id=e47dfa83559c1c2e2803">
        </script>
        <!-- END: Page Vendor JS-->
        <!-- BEGIN: Theme JS-->
        <script
            src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/js/core/app-menu.js?id=0a3ed793d05ee5f6a9db">
        </script>
        <script
            src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/js/core/app.js?id=6b6c2cc9a41161053158">
        </script>

        <!-- custome scripts file for user -->
        <script
            src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/js/core/scripts.js?id=22050af26ee69f8533fc">
        </script>

        <!-- END: Theme JS-->
        <!-- BEGIN: Page JS-->
        <script
            src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-4/js/scripts/pages/auth-login.js?id=caae8ff29789b83c3a91">
        </script>
        <!-- END: Page JS-->

        <script type="text/javascript">
            $(window).on('load', function() {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            })
        </script>

    </div>
@endsection
