<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png', env('REDIRECT_HTTPS')) }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">

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
                    </div>
                </div>
                <a href="{{ url('/help') }}" class="nav-item nav-link">Help</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- help image start -->
    <div class="container">
        <img class="img-fluid" src="{{ asset('images/faqs002.jpeg') }}" alt="">
    </div>
    <!-- help image end-->



    <!-- Drivers Start -->
    <div class="container my-3">
        <h3 class="text-center">
            Drivers
        </h3>
        <div id="driversAccordion">
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#bookSpace">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="bookSpace">
                            How do I book a parking space with Park254?
                        </button>

                    </h5>
                </div>
                <div id="bookSpace" class="collapse" aria-labelledby="bookSpace"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>You can find a great space to book quickly and easily in three simple steps!</p>
                        <p> 1. Find your Space</p>
                        <p>You simply search by key destinations such as malls, hospitals, train stations or landmarks!</p>
                        <p>You can sort the search results by price, distance or best match (best match is our clever algorithm which finds the optimum space for you).
                        </p>
                        <p>2. Choose the Right Space</p>
                        <p>Click a pin on the map or a card in the list to see reviews, descriptions, photos, rules, amenities, and distance to nearby landmarks.
                        </p>
                        <p>3. Pay</p>
                        <p>We currently support payments via</p>
                        <p>M-Pesa and discourage cash transactions due to Covid -19 protocols</p>
                        <p>Tell us about the vehicle you will be parking. We will then share this with the space owner so they know who to expect.
                        </p>
                        <p>We securely encrypt all your personal details.</p>
                        <p>You will receive a parking pass containing all the vital information for your booking, including QR code, directions and access instructions.
                        </p>
                        <p>*Please note that a booking can only be related to 1 vehicle. This means that if you wish to make a booking for a second vehicle, this will have to be a separate booking.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#vehicleDetails">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="fireSafetyAudits">
                            How do I change my vehicle details?
                        </button>

                    </h5>
                </div>
                <div id="vehicleDetails" class="collapse" aria-labelledby="vehicleDetails"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>Here's how to edit your vehicle details:</p>
                        <p>Select ‘My parking’ and click on the booking in question</p>
                        <p>Scroll down to the vehicle section and select the change icon</p>
                        <p>Click on ‘Add New Vehicle'</p>
                        <p>Select or add your preferred vehicle and the vehicle will be updated</p>
                        <p>Note: It isn't possible to change the vehicle on a booking once 5 minutes of a booking has passed. If more than 5 minutes of your booking has passed then please make a new booking with the correct vehicle and contact us on Submit a request –Park254 Help Centre to request a refund.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#anotherVehicle">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="anotherVehicle">
                            How to add another vehicle to your booking?
                        </button>

                    </h5>
                </div>
                <div id="anotherVehicle" class="collapse" aria-labelledby="anotherVehicle"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>In short, this is not possible.</p>
                        <p>A booking can only be linked to one vehicle. You have the ability to change a vehicle on a booking however, adding another vehicle to a booking is not possible.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#overStay">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="overStay">
                            What if I overstay my booking?
                        </button>

                    </h5>

                </div>
                <div id="overStay" class="collapse" aria-labelledby="overStay" data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>If you've booked a space then it is only available to you for the period that you have booked for. If you do require the space for longer than expected, you will be able to extend the booking, provided that there is:
                        </p>
                        <p>°availability at the car park for the extra time you are requesting, and</p>
                        <p>°the extension is done before the original booking period ends.</p>
                        <p>Charges will be applied for the time you have overstayed for. Overstaying can result in a parking fine being issued because overstaying prevents another driver who has booked the space from using it.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#timeChange">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="timeChange">
                            How do I change the times for my booking?
                        </button>

                    </h5>
                </div>
                <div id="timeChange" class="collapse" aria-labelledby="timeChange"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>It may be possible to extend your booking before it ends if there is availability and if the car park rules allow it.</p>
                        <p>To extend your booking:</p>
                        <p>Open the Park254 app.</p>
                        <p>Select My parking and click on the relevant booking.</p>
                        <p>Find the Extend booking option and select it.</p>
                        <p>Input the new times you want for your booking. This can be done after you have already parked but can’t be done if the booking has ended. Please note you cannot move the start time of your booking.</p>
                        <p>Finally, you'll need to pay for the added time.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#promoCode">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="promoCode">
                            How do I use a Promo Code?
                        </button>

                    </h5>
                </div>
                <div id="promoCode" class="collapse" aria-labelledby="promoCode"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p> If you’ve received a promo code from us, you can add it to your account in advance using the app at the checkout stage before paying.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#transactionFree">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="transactionFree">
                            Why is Park254 charging a Transaction Fee?
                        </button>

                    </h5>
                </div>
                <div id="transactionFree" class="collapse" aria-labelledby="transactionFree"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>We charge a transaction fee to help with the cost of running the platform and providing customer service for your booking.</p>
                    </div>
                </div>
            </div>
            <div class="card" >
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#bookingProof">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="bookingProof">
                            Will I need to display any proof of my booking?
                        </button>

                    </h5>
                </div>
                <div id="bookingProof" class="collapse" aria-labelledby="bookingProof"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>Yes, the only thing you will need to display to the parking attendant at the entrance is your parking pass.</p>
                        <p> It’s very unlikely they will ask for anything else, that’s because all of the important information is passed on to the owners of the car park by us.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card" >
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#spaceOwnerContact">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="spaceOwnerContact">
                            How do I contact a space owner?
                        </button>

                    </h5>
                </div>
                <div id="spaceOwnerContact" class="collapse" aria-labelledby="spaceOwnerContact"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>You can communicate with space owners directly using the call button which is included in your parking pass.</p>
                    </div>
                </div>
            </div>
            <div class="card" >
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#leaveReview">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="leaveReview">
                            How do I leave a review?
                        </button>

                    </h5>
                </div>
                <div id="leaveReview" class="collapse" aria-labelledby="leaveReview"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>All of the reviews on Park254 are written by drivers who have used the parking space at some point in the past.</p>
                        <p> To leave a review:</p>
                        <p> An automatic window will open once your booking has ended and you will quickly rate your parking experience using stars.</p>
                    </div>
                </div>
            </div>
            <div class="card" >
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#accessProblem">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="accessProblem">
                            What can I do if there is a problem with the space or I'm unable to access the space?
                        </button>

                    </h5>
                </div>
                <div id="accessProblem" class="collapse" aria-labelledby="accessProblem"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>Remember that the parking pass is your best friend in these situations! You'll find clear instructions in the parking pass about how to find the space. In the unlikely event that you can't find the space on the day:</p>
                        <p> 1. Call the space owner</p>
                        <p>If you booked a space on a private drive, the space owner is the best person to direct you to the space. Check your parking pass for the call button to call owner’s phone number.</p>
                        <p>2. Contact us</p>
                        <p>If you can't get hold of the space owner, please contact Customer Support and we will do our best to direct you to an alternative Park254 space nearby.</p>
                        <p>3. If you are unable to get immediate help, please book another Park254 space yourself.</p>
                        <p>If you couldn't find the space because there was a problem with the listing description, we will refund your booking - and if you rebook at a more expensive location then we can reimburse you for that booking (up to twice the price of the original booking). Just contact us and we'll take care of it.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card" >
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#spaceOccupied">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="spaceOccupied">
                            There is a car in my space, what do I do?
                        </button>

                    </h5>
                </div>
                <div id="spaceOccupied" class="collapse" aria-labelledby="spaceOccupied"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>It's really rare that a driver can park in a Park254 space. We take every step to ensure our space owners update their availability and create a high-quality listing description to prevent this from happening.</p>
                        <p> In the unlikely event that this happens, here's what to do:</p>
                        <p> 1. Call the space owner</p>
                        <p> If you have booked a private space, the quickest way to resolve the problem is to speak to the space owner directly. It's probably a simple oversight, and the person will be able to move their car. You'll find the call button in the parking pass</p>
                        <p> 2. Contact Park254</p>
                        <p> If you can't get hold of the space owner or if you are not booked on a private drive, then please contact Customer Support. We will do our absolute best to direct you to an alternative Park254 space nearby. Please note, you'll need to take a photo of the other car in your space.</p>
                        <p> 3. If it is outside working hours kindly book another space if you are unable to get immediate help.</p>
                        <p> If you couldn't find the space because there was a problem with the listing description, we will refund your original booking and if the new space is more expensive then we will reimburse you for whichever was more expensive (up to twice the value of the original booking) . Just contact us, with proof of your original space being full, your new receipt and we'll take care of the rest!
                        </p>
                    </div>
                </div>
            </div>
            <div class="card" >
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#cancelSession">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="cancelSession">
                            I need to cancel my session - how do I do this?
                        </button>

                    </h5>
                </div>
                <div id="cancelSession" class="collapse" aria-labelledby="cancelSession"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>Select My parking</p>
                        <p> Select the booking you want to cancel</p>
                        <p> Scroll down and click Cancel Booking</p>
                        <p> If you are entitled to a refund then the amount will be displayed here</p>
                        <p> Select Yes, cancel my booking</p>
                        <p> If you cannot use the app, you will need to contact customer support here to cancel your booking.</p>
                    </div>
                </div>
            </div>
            <div class="card" >
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#parkingDamage">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="parkingDamage">
                            What happens if my vehicle is damaged whilst parking?
                        </button>

                    </h5>
                </div>
                <div id="parkingDamage" class="collapse" aria-labelledby="parkingDamage"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        <p>Private driveways, garages, or car parks tend to be safer than parking on the street, so instances of damage to parked vehicles are very rare. In case of any damage to a parked vehicle, most personal vehicle insurance policies will cover you, just like they would if you were parked on a road. We will also offer an insurance product dubbed Parking Bila Stress, which will refund the excess paid on your insurance claim.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#discountCode">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="discountCode">
                            How do I apply a discount code?
                        </button>

                    </h5>
                </div>
                <div id="discountCode" class="collapse" aria-labelledby="discountCode"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        If you received a promotional discount code from Park254, you'll want to be logged into your Park254 account before applying the code on the checkout page. Make sure you’re using the same email address to log in as the one where you received that coupon! Also note the fine print of the promo - "book by" and "park by" requirements often apply.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#cancellationPolicy">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="cancellationPolicy">
                            What's the cancellation policy?
                        </button>

                    </h5>
                </div>
                <div id="cancellationPolicy" class="collapse" aria-labelledby="cancellationPolicy"
                     data-parent="#driversAccordion">
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
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#overstayPolicy">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="overstayPolicy">
                            What's the overstay policy?
                        </button>

                    </h5>
                </div>
                <div id="overstayPolicy" class="collapse" aria-labelledby="overstayPolicy"
                     data-parent="#driversAccordion">
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
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#rentalCarBooking">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="rentalCarBooking">
                            can I still make a booking with a rental car?
                        </button>

                    </h5>
                </div>
                <div id="rentalCarBooking" class="collapse" aria-labelledby="rentalCarBooking"
                     data-parent="#driversAccordion">
                    <div class="card-body">
                        Yes, you can book a space with Park254 if you've hired a vehicle. You may have noticed that you need to supply a vehicle registration when making a booking with us.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Drivers End -->

    <!-- Owners Start -->
    <div class="container my-3">
        <h3 class="text-center">
            Owners
        </h3>
        <div id="ownersAccordion">
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#freeSignup">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="freeSignup">
                            Is it free to sign up and list my space?
                        </button>

                    </h5>
                </div>
                <div id="freeSignup" class="collapse" aria-labelledby="freeSignup"
                     data-parent="#ownersAccordion">
                    <div class="card-body">
                        <p>It's free to sign up and list your space with Park254, and it always will be!</p>
                        <p>You can set your prices per hour, day, week, or month or leave it up to our algorithm to price your space.</p>
                        <p>We only charge a small commission for successfully renting out your parking space on our platform.</p>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#listSpace">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="listSpace">
                            How do I list my space?
                        </button>

                    </h5>
                </div>
                <div id="listSpace" class="collapse" aria-labelledby="listSpace"
                     data-parent="#ownersAccordion">
                    <div class="card-body">
                        <p>It's free to list your space with Park254, and it only takes a few minutes.</p>
                        <p> You can list your space on our app and create your listing from there.</p>
                        <p> Log in or create an account</p>
                        <p> Select Add my space</p>
                        <p> °Add your address</p>
                        <p> °Drop a pin on the entrance of your space</p>
                        <p> °Find your space on Street view – You can use the arrows to navigate around the screen</p>
                        <p> You'll then be asked a few questions about your space.</p>
                        <p> Your listing will then be reviewed by our team and you'll hear back in a day or two by email when it has been approved. From there you'll be able to set your prices, add your bank details and start taking bookings!
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#greatOwner">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="greatOwner">
                            How can I be a great space owner?
                        </button>

                    </h5>
                </div>
                <div id="greatOwner" class="collapse" aria-labelledby="greatOwner"
                     data-parent="#ownersAccordion">
                    <div class="card-body">
                        <p>If a driver has a great experience parking at your space, they'll come back for more! Here are a few things you can do to make sure the driver has a 5⭐ experience:</p>
                        <p> 1. Create a brilliant listing</p>
                        <p>Make sure your listing description and additional instructions are crystal clear and upload a couple of photos. This will help the driver have a seamless parking experience!</p>
                        <p> 2. Respond quickly to queries</p>
                        <p> Our drivers really appreciate quick responses to their queries, if you do receive a call or a message then please reply as quickly as you can and reassure the driver that you’re ready for them.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#gettingEarnings">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="gettingEarnings">
                            How do I get my earnings?
                        </button>

                    </h5>

                </div>
                <div id="gettingEarnings" class="collapse" aria-labelledby="gettingEarnings" data-parent="#ownersAccordion">
                    <div class="card-body">
                        <p>There are a few things you need to do in order to get your earnings from Park254</p>
                        <p>1. Enter your payment method (M-Pesa or bank transfer)</p>
                        <p>For short-term bookings, the amount you earn from the booking will be added to your account 48 hours after the booking has started. For long-term or monthly bookings, each payment will be added to your account after the first month of the booking. You can check the status of your earnings at any time from your Transactions page.</p>
                        <p>2. Verify your details</p>
                        <p>Enter your mobile number and verified email on your My Profile page and we'll send you SMS or an email to notify you of any payments.</p>
                        <p>3. Choose automatic payments</p>
                        <p>You can manually request a payment at any time. However, if you want to have your earnings transferred to you automatically then you can update your settings in the payment frequency section of the Earnings page. You can pick either monthly or quarterly automatic withdrawals.</p>
                        <p>Monthly withdrawals are automatically requested on the first of each month.</p>
                        <p>Quarterly withdrawals are automatically requested on the first of March, June, September and December.</p>
                        <p>Once you've requested a payment, it takes 3-5 working days for your earnings to arrive in your nominated bank account.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#ownerCancelBooking">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="ownerCancelBooking">
                            How do I cancel a booking? (As a Space Owner)
                        </button>

                    </h5>
                </div>
                <div id="ownerCancelBooking" class="collapse" aria-labelledby="ownerCancelBooking"
                     data-parent="#ownersAccordion">
                    <div class="card-body">
                        <p>If you need to cancel a booking, then you can do so from the My Parking tab. We'd recommend you try to cancel bookings as infrequently as possible as a bad experience for the driver, which we want to avoid. We recommend you remove availability for your space if you know it won't be available.</p>
                        <p>However, we understand on occasion you may need to cancel a booking. To do so follow the steps below:</p>
                        <p>Go to the My Parking tab and click on the relevant booking</p>
                        <p>Scroll to the bottom of the page and click Cancel booking</p>
                        <p>Please do this as soon as possible so that the driver can find an alternative space</p>
                        <p>Drivers will always be refunded according to our Cancellation Policy</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#editSpace">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="editSpace">
                            How do I update or edit my space?
                        </button>

                    </h5>
                </div>
                <div id="editSpace" class="collapse" aria-labelledby="editSpace"
                     data-parent="#ownersAccordion">
                    <div class="card-body">
                        <p>You can update your space through the Park254 app.</p>
                        <p>You can:</p>
                        <p>- Add photos</p>
                        <p>- Amend your description or access instructions</p>
                        <p>- Change your prices</p>
                        <p>- Update your availability</p>
                        <p>Go to Add your Space, select My Spaces</p>
                        <p>Tap the three horizontal lines</p>
                        <p>Select Edit</p>
                        <p>From here you'll be taken through a workflow to edit and improve your listing</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#driverOverstay">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="driverOverstay">
                            What happens if the driver overstays?
                        </button>

                    </h5>
                </div>
                <div id="driverOverstay" class="collapse" aria-labelledby="driverOverstay"
                     data-parent="#ownersAccordion">
                    <div class="card-body">
                        <p>We make it clear to our drivers that they shouldn't stay any longer than they've booked. This happens very rarely and is usually due to unforeseen circumstances.</p>
                        <p>If a driver does overstay, don't worry! They will need to pay for any additional time they use at your space, and in some circumstances, other charges may apply. See our Overstay Policy for full details.</p>
                    </div>
                </div>
            </div>
            <div class="card" >
                <div class="card-header text-white bg-success" data-toggle="collapse" data-target="#deactivateListing">
                    <h5 class="mb-0">
                        <button class="btn btn-success" aria-expanded="true" aria-controls="deactivateListing">
                            How do I deactivate my listing?
                        </button>

                    </h5>
                </div>
                <div id="deactivateListing" class="collapse" aria-labelledby="deactivateListing"
                     data-parent="#ownersAccordion">
                    <div class="card-body">
                        <p>Can't offer your space through Park254 anymore? No problem. It's easy to deactivate your listing. Just head to Manage your parking spaces and click Edit availability and then Make your space unavailable permanently on the listing you want to deactivate.</p>
                        <p>Please note that this only removes your listing from Park254 searches, it doesn't deactivate your Park254 account.</p>
                        <p>You won’t be able to deactivate your listing if you have any bookings upcoming or in progress. If you cannot accommodate these bookings any longer, please cancel them before proceeding to deactivate your space.</p>
                        <p>You can reactivate your account at any time by clicking Activate.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Owners End -->

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
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@park254.co.ke</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/park_254"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/park_254/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Cities and Towns</h4>
                    <a class="btn btn-link">Nairobi</a>
                    <a class="btn btn-link">Mombasa</a>
                    <a class="btn btn-link">Kisumu</a>
                    <a class="btn btn-link">Nakuru</a>
                    <a class="btn btn-link">Kiambu</a>
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
                            <a href="{{ url('/terms-and-conditions') }}">T&Cs</a>
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
