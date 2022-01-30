<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--    <script src="{{ asset('js/scripts.js') }}" defer></script>--}}

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
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Download the app</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="https://play.google.com/store" class="dropdown-item">
                            <i class="fab fa-google-play btn-icon-prepend"></i>
                            Play Store
                        </a>
                        <a href="https://www.apple.com/app-store" class="dropdown-item">
                            <i class="fab fa-apple btn-icon-prepend"></i>
                            App Store
                        </a>
                        <a href="{{ secure_asset('apps/park254.apk') }}" class="dropdown-item">
                            <i class="fab fa-google-play btn-icon-prepend"></i>
                            Download
                        </a>
                    </div>
                </div>
                <a href="{{ url('/help') }}" class="nav-item nav-link">Help</a>
            </div>
            {{--            <a href="{{ asset('apps/park254.apk') }}" download class="btn btn-success py-4 px-lg-5 d-none d-lg-block">Download app<i class="fa fa-arrow-down ms-3"></i></a>--}}
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- FAQs Start -->
    <div class="container">
        <h3>
            Frequently Asked Questions
        </h3>
        <div id="auditsAccordion">
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#occupationalSafetyAudits">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="collapseOne">
                            Are there any additional fees?
                        </button>

                    </h5>
                </div>
                <div id="occupationalSafetyAudits" class="collapse" aria-labelledby="ocuupationalSafetyAudits"
                     data-parent="#auditsAccordion">
                    <div class="card-body">
                        <p>
                            Any time parked outside the arrival or departure listed on your pass will likely incur an additional onsite fee, as determined by the parking provider. Also, oversize vehicles may be charged an additional fee, which may apply to any vehicle larger than a sedan. Fee amounts vary between individual Parking Operators, and will be assessed on-site if you do not prepay for an oversize vehicle through our platform.
                            You may also be charged a parking fee at check out. At Park254 we want to make parking easier and more convenient. While we understand no one likes to pay more, fees are necessary to continue to fund the improvements in parking convenience that we strive to provide.
                            Although pricing structures are determined individually by the facility owner/operator, Park254 prices tend to be cheaper than drive-up in most cases! If you ever feel the rate on ParkWhiz was more expensive than drive-up, take a photo of the price on-site and send us an email! We love deals as much as you do and are eager to ensure you're getting a fair rate.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#fireSafetyAudits">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="fireSafetyAudits">
                            What if my event is canceled or postponed?
                        </button>

                    </h5>
                </div>
                <div id="fireSafetyAudits" class="collapse" aria-labelledby="fireSafetyAudits"
                     data-parent="#auditsAccordion">
                    <div class="card-body">
                        <p>
                            If your event is cancelled or postponed more than one hour before the event is scheduled to start, you're entitled to a full refund. You will receive an email a day after the scheduled event date, at the latest, letting you know your purchase has been refunded due to event cancellation.
                            If your event is cancelled or postponed less than one hour before the event is scheduled to start, your parking pass becomes non-refundable. Please see Part II Section 4 of our Terms for more information.
                            In the case that your event was postponed more than one hour before the event is scheduled to start, your parking pass will update automatically to reflect the new event date. If you're unable to make the rescheduled event, you're welcome to cancel your updated pass by following the normal cancellation steps.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#riskAssessment">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="riskAssessment">
                            Can I park for 24 hours a day?
                        </button>

                    </h5>
                </div>
                <div id="riskAssessment" class="collapse" aria-labelledby="riskAssessment"
                     data-parent="#auditsAccordion">
                    <div class="card-body">
                        <p>
                            You can park overnight in any space that can be booked for more than one day in a row.
                            Please bear in mind that even if you can leave your vehicle overnight, the parking space might not be accessible at all times.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#environmentAudits">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="environmentAudits">
                            Do I have in-and-out privileges?
                        </button>

                    </h5>

                </div>
                <div id="environmentAudits" class="collapse" aria-labelledby="osha2007" data-parent="#auditsAccordion">
                    <div class="card-body">
                        In most instances, yes. The majority of locations on Park254, including all those in Nairobi, do allow re-entry.

                        If any specific parking facility does allow for you to come and go during the reserved timeframe, you'll see a "Reentry Allowed" amenity icon listed; this is shown in the details section both pre-purchase and post-purchase.

                        If you don't see anything on the listing page pertaining to specifically to reentry privileges, it's best to assume that you will not be allowed to come and go throughout the duration of your parking pass.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#energyAudits">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="energyAudits">
                            How do I present my my pass on-site?
                        </button>

                    </h5>
                </div>
                <div id="energyAudits" class="collapse" aria-labelledby="energyAudits"
                     data-parent="#auditsAccordion">
                    <div class="card-body">
                        Easy peasy! The vast majority of locations in our network accept a mobile pass, which means you can use your phone or other smart device to show proof of your prepaid purchase once you arrive at the parking facility.

                        To be sure, verify the validation method instructions on your pass. This section is titled "When You Arrive" in-app or "How To Park" if viewing on a desktop or mobile web. If your location does not accept mobile passes, you'll need to print the pass before leaving the house.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#noiseMeasurement">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="noiseMeasurement">
                            How do I apply a discount code?
                        </button>

                    </h5>
                </div>
                <div id="noiseMeasurement" class="collapse" aria-labelledby="noiseMeasurement"
                     data-parent="#auditsAccordion">
                    <div class="card-body">
                        If you received a promotional discount code from Park254, you'll want to be logged into your ParkWhiz account before applying the code on the checkout page. Make sure you’re using the same email address to log in as the one where you received that coupon! Also note the fine print of the promo - "book by" and "park by" requirements often apply.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#airQualityMeasurement">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="airQualityMeasurement">
                            What's the cancellation policy?
                        </button>

                    </h5>
                </div>
                <div id="airQualityMeasurement" class="collapse" aria-labelledby="airQualityMeasurement"
                     data-parent="#auditsAccordion">
                    <div class="card-body">
                        <h5>CANCELLATION POLICY</h5>
                        <p>Plans change. We get it. Receive a full refund or free cancellation until 6 hours before check-in (time shown in the parking pass).After that, cancel before check-in and get a 70% refund, minus the service fee.</p>
                        <p>You can cancel your spot by going to “My Parking”  in your account and clicking CANCEL. If you need to cancel after your reservation’s start time, call our customer service team at 0729558499</p>
                        <p>Our mission is to make parking easy. If anything about your experience goes awry, let us know and we’ll make it right.</p>
                        <h6>How long does it take to get a refund?</h6>
                        <p>We send refunds immediately upon cancellation and they usually show up within 3-5 days, but sometimes it takes a little longer before they reflect on the original payment method.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#airQualityMeasurement1">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="airQualityMeasurement1">
                            What's the overstay policy?
                        </button>

                    </h5>
                </div>
                <div id="airQualityMeasurement1" class="collapse" aria-labelledby="airQualityMeasurement1"
                     data-parent="#auditsAccordion">
                    <div class="card-body">
                        <h5>Overstay Policy</h5>
                        <p>A driver will be liable to pay the full price for any additional time stayed.</p>
                        <p>The driver will be liable to pay:</p>
                        <p>°The hourly rate for every additional hour stayed. Any minutes under 1 hour will be charged as 1 hour.</p>
                        <p>°Ksh.100 penalty charge to Park254 for administration and processing.</p>
                        <p>However, if it is the first time the driver overstays, he/she will only pay for the additional time stayed(no penalty charge)</p>
                        <p>The Owner shall authorize Park254 to collect payment of any such additional fees from the Driver on behalf of the Owner.</p>
                        <p>Park254 has full discretion about whether any fees or fines will be applied for overstays and Park254's decision will be final.</p>
                    </div>
                </div>
            </div>
            <div class="card" >
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#medicalExamination">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="medicalExamination">
                            can I still make a booking with a rental car?
                        </button>

                    </h5>
                </div>
                <div id="medicalExamination" class="collapse" aria-labelledby="medicalExamination"
                     data-parent="#auditsAccordion">
                    <div class="card-body">
                        Yes, you can book a space with Park254 if you've hired a vehicle. You may have noticed that you need to supply a vehicle registration when making a booking with us.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- FAQs End -->

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
{{--<script src="{{ asset('js/app.js') }}"></script>--}}

<script src="{{ asset('js/wow.min.js') }}" defer></script>
<script src="{{ asset('js/easing.min.js') }}" defer></script>
<script src="{{ asset('js/waypoints.min.js') }}" defer></script>
<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>


</body>
</html>
