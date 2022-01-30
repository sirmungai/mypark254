<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>

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


    <!-- Policy Start -->
    <div class="container">
        <h2>PRIVACY POLICY</h2>
        <h5>1.	Policy statement</h5>
        <p>Park254 is committed to protecting the privacy of the personal  information which it collects and holds
        Park254 must comply with the Kenya Privacy Principles under the Data Protection Act 2019 (DPA), and other privacy laws which govern the way in which organizations such as Park254 hold, use and disclose personal information.
        The purpose of this Privacy Policy is to explain:
        The kinds of information that Park254 may collect about you and how that information is held;
        How Park254 collects and holds personal information;
        The purposes for which Park254 collects, holds, uses and discloses personal information;
        How you can access the personal information Park254 holds about you and seek to correct such information; and
        The way in which you can complain about a breach of your privacy and how Park254 will handle that complaint.</p>
        <p>Terms used in this Privacy Policy are defined in Clause 9.</p>

        <h5>2. Collection and use of personal information</h5>
        <h6>2.1 Types of personal information collected by Park254</h6>
        <p>(a)	Customers</p>
        <p>Park254 collects information from you which is necessary to provide you with our products and services. This includes collecting personal information such as your name, address, telephone number, email address, bank account details and any other information which may be necessary to enable us to effectively and efficiently provide our products and services to you.</p>
        <p>(b)	Contractors and service providers</p>
        <p>Park254 collects information from you which is necessary to properly manage and operate our business. This includes collecting personal information such as your name, address, telephone number, email address, bank account details and any other information which we consider reasonably necessary in connection with our engagement of you or our ongoing relationship with you.</p>
        <p>(c) Job applicants and employees</p>
        <p>Park254 collects information from you which is necessary to properly manage and operate our business. This includes collecting personal information such as your name, address, telephone number, email address, bank account details and any other information which we consider reasonably necessary in determining the merits of your application or for the purposes of managing your ongoing employment with us.</p>

        <h6>2.2 How we collect personal information</h6>
        <p>We will usually collect your personal information directly from you, however sometimes we may need to collect information about you from third parties, such as:
        Other service providers;
        Sources of publicly available information, such as databases lawfully maintained by government departments or private companies;
        Our related entities.
        We will only collect information from third parties where:
        You have consented to such collection;
        Such collection is necessary to enable us to provide you with our products or services;
        Such collection is reasonably necessary to enable us to appropriately manage and conduct our business; or
        In other circumstances where it is legally permissible for us to do.</p>
        <p>Park254 will only collect information which is necessary to provide you with our products and services or appropriately manage and conduct our business.</p>

        <h6>2.3 How Park254 uses your personal information</h6>
        <p>Park254 only uses your personal information for the purpose for which it was collected by Park254 (primary purpose), unless:
        There is another purpose (secondary purpose) and that secondary purpose is directly related to the primary purpose, and you would reasonably expect, or Park254 has informed you, that your information will be used for that secondary purpose;
        You have given your consent for your personal information to be used for a secondary purpose; or
        Park254 is required or authorized by law to use your personal information for a secondary purpose (including for research and quality improvements within Park254).</p>
        <p>For example, Park254 may use your personal information to:</p>
        <p>Verify your identity;</p>
        <p>Enable speedy contact with your next of kin, should the need arise in an emergency;</p>
        <p>Gain an understanding of your needs in order for us to provide you with better products and services;</p>
        <p>Provide you with the products and services you require;</p>
        <p>Administer and manage our services, including charging, billing and collecting debts;</p>
        <p>Inform you of ways the products and services provided to you could be improved;</p>
        <p>Appropriately manage our business, such as assessing insurance requirements and conducting audits;</p>
        <p>Assist us in running our business, including quality assurance programs, improving our services, implementing appropriate security measures and training personnel; and</p>
        <p>Effectively communicate with third parties.</p>

        <h6>2.4 Complete and accurate details</h6>
        Where possible and practicable, you will have the option to deal with Park254 on an anonymous basis or by using a pseudonym. However, if the personal information you provide us is incomplete or inaccurate, or you withhold personal information, we may not be able to provide the products and services or support you are seeking, or deal with you effectively.

        <h6>2.5 CCTV</h6>
        Park254 uses camera surveillance systems (commonly referred to as CCTV) on its premises for the purposes of maintaining safety and security of its customers, personnel, visitors and other attendees. Those CCTV systems may also collect and store personal information and Park254 will comply with all privacy legislation in respect of any such information.

        <h5>3.	Disclosure of  your personal information</h5>
        <p>Park254 will confine its disclosure of your personal information to the primary purpose for which that information has been collected, or for a related secondary purpose. This includes when disclosure is necessary to provide products or services to you, assist us in running our organisation, or for security reasons.
        We may provide your personal information to:
        Your authorised representatives or your legal advisers;
        Credit-reporting and fraud-checking agencies;
        Credit providers (for credit related purposes such as credit-worthiness, credit rating, credit provision and financing);
        Our professional advisers, including our accountants, auditors and lawyers;
        Government and regulatory authorities and other organisations, as required or authorised by law;
        Third parties involved in the provision of products and services to you, such as our suppliers and contractors;
        Any of Park254’s related entities;
        To our insurers in connection with any insurance claim or potential insurance claim;
        To travel agencies, airlines, hotels, accommodation providers and other similar service providers in connection with any travel arrangements relating to your employment (if applicable);
        Anyone authorised by you to receive your personal information (your consent may be express or implied); or
        Anyone to whom Park254 is required by law to disclose your personal information.</p>

        <h5>4. Data storage, quality and security</h5>
        <h6>4.1 Data quality</h6>
        <p>Park254 will take reasonable steps to ensure that your personal information which is collected, used or disclosed is accurate, complete and up to date.</p>
        <h6>4.2 Storage</h6>
        <p>All your personal information is stored by Park254 securely in either hard copy or electronic form.</p>
        <h6>4.3 Data security</h6>
        <p>Park254 strives to ensure the security, integrity and privacy of personal information, and will take reasonable steps to protect your personal information from misuse, interference, loss, unauthorised access, modification or disclosure. Park254 reviews and updates (where necessary) its security measures in light of current technologies.
        Park254 follows all PCI-DSS requirements and implement additional generally accepted industry standards
        System scan, penetration testing as well as annual onsite PCI audits are performed by independent Qualified Security Assessor (QSA) certified by the PCI Security Standards Council to assess compliance with PCI DSS
        A copy of our PCI certificate is available upon request</p>
        <h6>4.4 Storage location</h6>
        <p>Your personal information may be stored by Park254 or third parties to whom we are permitted to disclose your personal information in accordance with this Data Protection Act in Kenya. We take steps to ensure that our service providers are obliged to protect the privacy and security of your personal information and use it only for the purpose for which it is disclosed.</p>
        <h6>4.5 Online transfer of information</h6>
        <p>While Park254 does all it can to protect the privacy of your personal information, no data transfer over the internet is 100% secure. When you share your personal information with Park254 via an online process, it is at your own risk.
        There are ways you can help maintain the privacy of your personal information, including:
        Always closing your browser when you have finished your user session;
        Always ensuring others cannot access your personal information and emails if you use a public computer; and
        Never disclosing your user name and password to third parties.</p>

        <h5>5. Use of cookies</h5>
        <p>A ‘cookie’ is a small data file placed on your machine or device which lets Park254 identify and interact more effectively with your computer. Cookies do not identify individual users, but they do identify your ISP and browser type.
        Cookies which are industry standard and are used by most web sites, including those operated by Park254, can facilitate a user’s ongoing access to and use of a site. They allow Park254 to customize our website to the needs of our users. If you do not want information collected through the use of cookies, there is a simple procedure in most browsers that allows you to deny or accept the cookie feature. However, cookies may be necessary to provide you with some features of our on- line services via the Park254 website.</p>

        <h5>6. Links to other sites</h5>
        <p>Park254 may provide links to third party websites. These linked sites may not be under our control and Park254 is not responsible for the content or privacy practices employed by those websites.
        Before disclosing your personal information on any other website, you should carefully read the terms and conditions of use and privacy statement of the relevant website.

        <h5>7. Accessing and amending your personal information</h5>
        <p>You have a right to access your personal information which Park254 holds about you.
        If you make a request to access your personal information, we will ask you to verify your identity and specify the information you require.
        You can also request an amendment to any of your personal information if you consider that it contains inaccurate information.</p>
        <p>You can contact Park254 about any privacy issues as follows:</p>
        <p>Privacy Officer</p>
        <p>info@park254.co.ke</p>
        <p>0729558499</p>
        <p>BOGANI EAST ROAD,</p>
        <p>KAREN,</p>
        <p>NAIROBI, KENYA</p>
        <p>While Park254 aims to meet all requests to access and amendments to personal information, there may be some instances where Park254 is unable to do this where it may adversely affect your health and safety or the safety of others.</p>

        <h5>8. Complaints</h5>
        <p>If you have a complaint about Park254’s information handling practices or consider we have breached your privacy, you can lodge a complaint with us. Park254 deals with all complaints in a fair and efficient manner.</p>

        <h5>9. Definitions</h5>
        <p>In this Privacy Policy the following terms have the following meanings:</p>
        <p>Personal information means information or an opinion about an identified individual, or an individual who is reasonably identifiable:</p>
        <p>Whether the information or opinion is true or not; and</p>
        <p>Whether the information or opinion is recorded in a material form or not;</p>
        <p>Related entities has the meaning given to that term under the Companies Act 2015.</p>
        <p>Park254 means Park254 Limited and its related entities from time to time</p>



    </div>
    <!-- Policy End -->


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
