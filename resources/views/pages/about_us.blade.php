<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png', env('REDIRECT_HTTPS')) }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="{{ url('/main') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="{{ asset('images/logo2.jpeg') }}" alt="park254" style="height: 60px;">
        </a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/about_us') }}" class="nav-item nav-link">About Us</a>
                <a href="{{ url('/how-it-works') }}" class="nav-item nav-link">How It Works</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our apps</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="https://play.google.com/store" class="dropdown-item">
                            <i class="fab fa-google-play btn-icon-prepend"></i>
                            Play Store
                        </a>
                        <a href="https://www.apple.com/app-store" class="dropdown-item">
                            <i class="fab fa-apple btn-icon-prepend"></i>
                            App Store
                        </a>
                    </div>
                </div>
                <a href="{{ url('/help') }}" class="nav-item nav-link">Help</a>
            </div>
{{--            <a href="{{ asset('apps/park254.apk') }}" download class="btn btn-success py-4 px-lg-5 d-none d-lg-block">Download app<i class="fa fa-arrow-down ms-3"></i></a>--}}
        </div>
    </nav>
    <!-- Navbar End -->


  <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid" src="{{ asset('images/logo3c.jpeg') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-success pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to Park254</h1>
                    <p class="mb-4">Park254 is an parking system currently being used in major towns in Kenya. Simply download our app and experince convenience.</p>
                    <p class="mb-4">By designing better ways to find, reserve and pay for parking, we make life easier, our cities more accessible, and our world more connected</p>
                    <p class="mb-4">With Park254, users get to book and pay for parking at the convenience of their phone and location. It avoids the hassle of moving around looking for parking physically. Some of the features include:</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Super-fast parking</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Best-price parking</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Easy reservations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Simple Payments</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Better car traceability</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-success me-2"></i>Save with monthly plans</p>
                        </div>
                    </div>
{{--                    <a class="btn btn-success py-3 px-5 mt-2" href="">Read More</a>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Founders</h6>
                <h1 class="mb-5">Our Team</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('images/gift-avi.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fas fa-envelope-square"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Gift Mazera</h5>
                            <small>Co-Founder & CEO</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('images/loise-avi.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fas fa-envelope-square"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Loise Nyawira</h5>
                            <small>Co-Founder & COO</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-success text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="{{ url('/about_us') }}">About Us</a>
                    <a class="btn btn-link" href="{{ url('/about_us') }}">Contact Us</a>
                    <a class="btn btn-link" href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                    <a class="btn btn-link" href="{{ url('/terms-and-conditions') }}">Terms & Condition</a>
                    <a class="btn btn-link" href="{{ url('/FAQs') }}">Cancellation Policy</a>
                    <a class="btn btn-link" href="{{ url('/FAQs') }}">Overstay Policy</a>
                    <a class="btn btn-link" href="{{ url('/FAQs') }}">FAQs & Help</a>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <a href="https://www.apple.com/app-store">
                                <img src="{{ asset('images/appstore001.svg') }}" alt="appstore">
                            </a>
                        </div>
                        <div class="col-md-6 mb-2">
                            <a href="https://play.google.com/store">
                                <img src="{{ asset('images/googleplay001.svg') }}" alt="playstore" style="width: 130px;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bogani East Road, Karen, Nairobi</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+254 729 558499</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@park254.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/park_254"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/park_254/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Cities and Towns</h4>
                    <a class="btn btn-link" href="">Nairobi</a>
                    <a class="btn btn-link" href="">Mombasa</a>
                    <a class="btn btn-link" href="">Kisumu</a>
                    <a class="btn btn-link" href="">Nakuru</a>
                    <a class="btn btn-link" href="">Kiambu</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Subscribe to our newsletter to receive the latest updates and offers.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        Park254 &copy; 2022 All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center ">
                        <div class="footer-menu">
                            <a href="{{ url('/main') }}">Home</a>
                            <a href="{{ url('/FAQs') }}">Help</a>
                            <a href="{{ url('/FAQs') }}">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>





    {{--        <main class="py-4">--}}
    {{--            @yield('content')--}}
    {{--        </main>--}}
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/wow.min.js') }}" defer></script>
<script src="{{ asset('js/easing.min.js') }}" defer></script>
<script src="{{ asset('js/waypoints.min.js') }}" defer></script>
<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>


</body>
</html>
