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
    <link href="{{ asset('css/app.css', env('REDIRECT_HTTPS')) }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css', env('REDIRECT_HTTPS')) }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css', env('REDIRECT_HTTPS')) }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css', env('REDIRECT_HTTPS')) }}" rel="stylesheet">
    <link href="{{ asset('css/style.css', env('REDIRECT_HTTPS')) }}" rel="stylesheet">

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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-2">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('images/parking_sample2.jpg', env('REDIRECT_HTTPS')) }}" alt="" style="max-height: 370px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-danger text-uppercase mb-3 animated slideInDown">Best Parking Services</h5>
                                <h1 class="display-3 text-white animated slideInDown">The Best Online Parking Platform</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Interact with the best parking app in the country. Save lots of money while enjoying convenience.</p>
                                <div class="row container d-flex justify-content-center">
{{--                                    <div class=" mt-2">--}}
{{--                                        <a href="https://www.apple.com/app-store">--}}
{{--                                            <button class="btn btn-success btn-icon-text">--}}
{{--                                                <i class="fab fa-apple btn-icon-prepend mdi-36px" style="font-size: 39px;margin-right: 10px"></i>--}}
{{--                                                <span class="d-inline-block text-left">--}}
{{--                                                        <small class="font-weight-light d-block">Available on the</small> App Store </span>--}}
{{--                                            </button>--}}
{{--                                        </a>--}}
{{--                                        <a href="https://play.google.com/store">--}}
{{--                                            <button class="btn btn-light btn-icon-text">--}}
{{--                                                <i class="fab fa-google-play btn-icon-prepend mdi-36px" style="font-size: 39px;margin-right: 10px"></i>--}}
{{--                                                <span class="d-inline-block text-left">--}}
{{--                                                        <small class="font-weight-light d-block">Get it on the</small> Google Play </span>--}}
{{--                                            </button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('images/parking_sample1.png', env('REDIRECT_HTTPS')) }}" alt="" style="max-height: 370px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-danger text-uppercase mb-3 animated slideInDown">Convenient Reservations</h5>
                                <h1 class="display-3 text-white animated slideInDown">Secure Parking Online From Anywhere</h1>
                                <p class="fs-5 text-white mb-4 pb-2">View and compare several different parking spaces that are secure. Pay for from as short as one hour periods.</p>
                                <div class="row container d-flex justify-content-center">
{{--                                    <div class=" mt-2">--}}
{{--                                        <a href="https://www.apple.com/app-store">--}}
{{--                                            <button class="btn btn-success btn-icon-text">--}}
{{--                                                <i class="fab fa-apple btn-icon-prepend mdi-36px" style="font-size: 39px;margin-right: 10px"></i>--}}
{{--                                                <span class="d-inline-block text-left">--}}
{{--                                                        <small class="font-weight-light d-block">Available on the</small> App Store </span>--}}
{{--                                            </button>--}}
{{--                                        </a>--}}
{{--                                        <a href="https://play.google.com/store">--}}
{{--                                            <button class="btn btn-light btn-icon-text">--}}
{{--                                                <i class="fab fa-google-play btn-icon-prepend mdi-36px" style="font-size: 39px;margin-right: 10px"></i>--}}
{{--                                                <span class="d-inline-block text-left">--}}
{{--                                                        <small class="font-weight-light d-block">Get it on the</small> Google Play </span>--}}
{{--                                            </button>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('images/basement_parking.jpg', env('REDIRECT_HTTPS')) }}" alt="" style="max-height: 370px;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-danger text-uppercase mb-3 animated slideInDown">Save time and money!</h5>
                                <h1 class="display-3 text-white animated slideInDown">Compare prices and save</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Compare prices and locations and save upto 50% of standard rates on our app.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-tasks text-success mb-4"></i>
                            <h5 class="mb-3">Compare Prices</h5>
                            <p>Save up to 50% by comparing prices from different parking slots</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-sitemap text-success mb-4"></i>
                            <h5 class="mb-3">Convenient Booking</h5>
                            <p>Reserve parking spaces conveniently at home or on the way!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-random text-success mb-4"></i>
                            <h5 class="mb-3">No Price surprises</h5>
                            <p>What you see is exactly what you get and is what you pay for!!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hourglass-half text-success mb-4"></i>
                            <h5 class="mb-3">Easy Time Extensions</h5>
                            <p>Enjoy the opportunity to extend parking time to your comfort</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Parking Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('images/basement_parking.jpg', env('REDIRECT_HTTPS')) }}" alt="" style="object-fit: cover">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Basement Parking</h5>
                                    <small class="text-primary">203 Slots</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('images/openground_parking.jpg', env('REDIRECT_HTTPS')) }}" alt="" style="object-fit: cover;">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Open ground</h5>
                                    <small class="text-primary">56 slots</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('images/private_parking02.jpg', env('REDIRECT_HTTPS')) }}" alt="" style="object-fit: cover;">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Private Parking</h5>
                                    <small class="text-primary">67 slots</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid" src="{{ asset('images/mall_park.jpg', env('REDIRECT_HTTPS')) }}" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Mall Parking</h5>
                            <small class="text-primary">128 slots</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- parking Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Parking</h6>
                <h1 class="mb-5">Popular Parking</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('images/westside.jpg', env('REDIRECT_HTTPS')) }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">ksh 205.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-white"></small>
                                <small>(44)</small>
                            </div>
                            <h5 class="mb-4">West Side Mall</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Private</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>24 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>25 Slots</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('images/galleria.png', env('REDIRECT_HTTPS')) }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Ksh 150.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-white"></small>
                                <small class="fa fa-star text-white"></small>
                                <small>(13)</small>
                            </div>
                            <h5 class="mb-4">Galleria mall</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Galleria</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>8am-7pm</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>16 slots</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('images/afya_centre.png', env('REDIRECT_HTTPS')) }}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">ksh 175.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(67)</small>
                            </div>
                            <h5 class="mb-4">Afya Center Basement</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Capital investments</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>7am-10pm</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>28 Slots</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- parking End -->

        <!-- screenshot Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>
                    <h1 class="mb-5">Screen shots</h1>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="testimonial-item text-center" >
                        <div class="course-item bg-light m-0" style="height: 30rem; width: 15rem;">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('images/screenshot009.jpeg', env('REDIRECT_HTTPS')) }}" alt="" style="height: 30rem; width: 15rem;">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="course-item bg-light m-0" style="height: 30rem; width: 15rem;">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('images/screenshot008.jpeg', env('REDIRECT_HTTPS')) }}" alt="" style="height: 30rem; width: 15rem;">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="course-item bg-light m-0" style="height: 30rem; width: 15rem;">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('images/screenshot007.jpeg', env('REDIRECT_HTTPS')) }}" alt="" style="height: 30rem; width: 15rem;">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="course-item bg-light m-0" style="height: 30rem; width: 15rem;">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('images/screenshot001.png', env('REDIRECT_HTTPS')) }}" alt="" style="height: 30rem; width: 15rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- screenshot End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">What People Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('images/avator.jpg', env('REDIRECT_HTTPS')) }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Dennis W</h5>
                    <p>Nairobi</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">I save tons of time and money parking everywhere with Park254. Use my link to get your Ksh. 150 off promo code for your first spot and I'll get Ksh. 150 off too! Your code is redeemable only in the app, so be sure to download.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('images/avator.jpg', env('REDIRECT_HTTPS')) }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Mercy Mutava</h5>
                    <p>Thika</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0"> Park254 has really improved parking in Thika town especially when I have to be in town for one or two hours. I save more using the app </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('images/avator.jpg', env('REDIRECT_HTTPS')) }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Wekesa J</h5>
                    <p>Mombasa</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Since I started using park254 I no longer worry about parking if I have an errand in town. Booking is easy and convenient</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->





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
                        <a class="btn btn-link" href="{{ url('/FAQs') }}">FAQs & Help</a>
                        <div class="row">
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
    <script src="{{ secure_asset('js/wow.min.js') }}" defer></script>
    <script src="{{ secure_asset('js/easing.min.js') }}" defer></script>
    <script src="{{ secure_asset('js/waypoints.min.js') }}" defer></script>
    <script src="{{ secure_asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ secure_asset('js/main.js') }}" defer></script>


</body>
</html>
