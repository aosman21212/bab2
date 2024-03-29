<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/bootstrap/bootstrap.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/daterangepicker.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/fontawesome.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/footable.standalone.min.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/fullcalendar@5.2.0.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/jquery-jvectormap-2.0.5.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/jquery.mCustomScrollbar.min.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/leaflet.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/line-awesome.min.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/magnific-popup.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/MarkerCluster.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/MarkerCluster.Default.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/select2.min.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/slick.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/star-rating-svg.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/trumbowyg.min.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/wickedpicker.min.css') }}">

     <link rel="stylesheet"href="{{ asset('assets/vendor_assets/css/style.css') }}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">
</head>

<body>
    <main class="main-content">

        <div class="signUP-admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                        <div class="signUP-admin-left signIn-admin-left position-relative">
                            <div class="signUP-overlay">
                            <!-- <img class="svg signupTop" src="{{ asset('img/svg/signuptop.svg') }}" alt="img" /> -->
                                <!-- <img class="svg signupBottom" src="{{ asset('img/svg/signupbottom.svg') }}" alt="img" /> -->
                            </div><!-- End: .signUP-overlay  -->
                            <!-- <div class="signUP-admin-left__content">
                                <div class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                    <a class="wh-36 bg-primary text-white radius-md mr-10 content-center" href="index.html">a</a>
                                    <span class="text-dark">{{ config('app.name') }}</span>
                                </div>
                                <h1> </h1>
                            </div>End: .signUP-admin-left__content  -->
                            <div class="signUP-admin-left__img">
                            <img class="img-fluid svg" src="{{ asset('img/svg/signupIllustration.svg') }}" alt="img" />
                            </div><!-- End: .signUP-admin-left__img  -->
                        </div><!-- End: .signUP-admin-left  -->
                    </div><!-- End: .col-xl-4  -->
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                            <div class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                <p class="mb-0">
                                    Don't have an account?
                                    <a href="{{ route('register') }}" class="text-center">
                                    Sign up
                                    </a>
                                </p>
                            </div><!-- End: .signUp-topbar  -->
                            <div class="row justify-content-center" style="margin-top: 150px;">
                                    <div class="col-xl-7 col-lg-8 col-md-12">
                                    <div class="edit-profile mt-md-25 mt-0">   
                                          <div class="card-body">
                                                <div class="edit-profile__body">
                                    <form method="post" action="{{ url('/login') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Email"
                           class="form-control @error('email') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password"
                           name="password"
                           placeholder="Password"
                           class="form-control @error('password') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>

                </div>
            </form>
<!-- End: .card-body -->
</div><!-- End: .card -->
                                    </div><!-- End: .edit-profile -->
                                </div><!-- End: .col-xl-5 -->
                            </div>
                        </div><!-- End: .signUp-admin-right  -->
                    </div><!-- End: .col-xl-8  -->
                </div>
            </div>
        </div><!-- End: .signUP-admin  -->

    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>

    <!-- inject:js-->


    <script src="{{ asset('assets/vendor_assets/js/jquery/jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/jquery/jquery-ui.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/bootstrap/popper.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/bootstrap/bootstrap.min.js') }}"></script>

 <script src="{{ asset('assets/vendor_assets/js/accordion.js') }}"></script>

 <script src="{{asset('assets/vendor_assets/js/autoComplete.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/Chart.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/charts.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/daterangepicker.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/drawer.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/dynamicBadge.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/dynamicCheckbox.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/feather.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/footable.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/fullcalendar@5.2.0.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/google-chart.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/jquery.countdown.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/jquery.filterizr.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/jquery.mCustomScrollbar.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/jquery.peity.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/jquery.star-rating-svg.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/leaflet.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/leaflet.markercluster.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/loader.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/message.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/moment.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/muuri.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/notification.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/popover.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/select2.full.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/slick.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/trumbowyg.min.js') }}"></script>

<script src="{{ asset('assets/vendor_assets/js/wickedpicker.min.js') }}"></script>

<script src="{{ asset('assets/theme_assets/js/drag-drop.js') }}"></script>

<script src="{{ asset('assets/theme_assets/js/footable.js') }}"></script>

<script src="{{ asset('assets/theme_assets/js/full-calendar.js') }}"></script>

<script src="{{ asset('assets/theme_assets/js/googlemap-init.js') }}"></script>

<script src="{{ asset('assets/theme_assets/js/icon-loader.js') }}"></script>

<script src="{{ asset('assets/theme_assets/js/jvectormap-init.js') }}"></script>

<script src="{{ asset('assets/theme_assets/js/leaflet-init.js') }}"></script>

<script src="{{ asset('assets/theme_assets/js/main.js') }}"></script>


</html>



</html>
