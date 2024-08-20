<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NWV5PJ4');
    </script>
    <!-- End Google Tag Manager -->

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Biman IT Division">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Biman Bangladesh Airlines Ltd</title>

    <meta property="og:image" content="https://www.biman-airlines.com/assets/images/hero-bg2.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.biman-airlines.com/" />
    <meta property="og:title" content=" Your Home In The Sky" />
    <meta property="og:description" content="The National Flag Carrier of Bangladesh." />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/logo/bimanLogo-Copy.svg') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets/css/custom-20240815.css') }}">

    @yield('header-extension')

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWV5PJ4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ================================
                START HEADER AREA
    ================================= -->
    <header class="header-area">
        <div class="header-top-bar padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="header-top-content">

                            <div class="header-left d-flex">
                                <div class="mr-1">
                                    <span class="text-warning font-weight-bold"> <i class="las la-exclamation-circle"></i></span>
                                </div>
                                <div class="marquee">
                                    <div class="custom_div">
                                         @if(isset($notices))
                                            @foreach($notices as $item)
                                                <span class="news_ticker"><i class="las la-bell"></i><b>{{$item->notice}}</b></span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="header-top-content">
                            <div class="header-right d-flex align-items-center justify-content-end">

                                <div class="header-right-action">
                                    <ul class="list-items">
                                        <li style="padding-right: 4px;margin-bottom:0px;"><a href="tel:+8801990997997"><i class="fa fa-phone mr-1"></i>+8801990997997</a></li>
                                        <li style="padding-right: .5rem;margin-bottom:0px;"><a href="mailto:ibebiman@biman.gov.bd"><i class="fa fa-envelope mr-1"></i>ibebiman@biman.gov.bd</a></li>
                                    </ul>
                                </div>
                                <div class="header-right-action">
                                    <div class="select-contain select--contain w-auto" style="align-items: center;justify-content: center;
                                    text-align: center;display: flex;">
                                        <span id="flag" class="flag-icon flag-icon-bd mr-1" style="height: 14px;"></span>

                                    </div>

                                </div>
                                 <div class="header-right-action">

                                     @auth
                                        <a class="theme-btn theme-btn-small" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                         </form>
                                     @else
                                         <!--<a href="{{route('loyalty.register')}}" class="theme-btn theme-btn-small theme-btn-transparent mr-1">Sign Up</a>-->
                                         <a class="text-color-1 btn btn-outline-success font-size-14" href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i> Login</a>
                                     @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu-wrapper padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                            <div class="logo">
                                <a href="/"><img src="{{ asset('assets/images/logo/Biman-Logo-English-Copy.svg') }}" alt="logo"></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div><!-- end menu-toggler -->
                            </div><!-- end logo -->
                            <div class="main-menu-content">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="#">Book Flight <i class="la la-angle-down"></i></a>
                                            <div class="dropdown-menu-item mega-menu">
                                                <ul class="row no-gutters">
                                                    <li class="col-lg-6 mega-menu-item">
                                                        <ul>
                                                            <li><a href="{{ route('index', ['#flight']) }}">Book A Flight</a></li>
                                                            <li><a href="{{ route('index', ['#manage-booking']) }}">Manage My Trip</a></li>
                                                            <li><a href="{{ route('index', ['#flight-status']) }}">Flight Status</a></li>
                                                            <li><a href="{{ route('index', ['#flight-schedule']) }}">Flight Schedule<span class="badge bg-2 text-white">New</span></a>
                                                            </li>
                                                            <li><a href="{{ route('index', ['#check-in']) }}">Web Check-In<span class="badge bg-2 text-white">New</span></a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="col-lg-6 mega-menu-item">
                                                        <ul>
                                                            <li><a href="{{ route('destinations') }}">Destinations
                                                                </a>
                                                            </li>
                                                            <li><a href="{{ route('fleet') }}">Fleet Information</a>
                                                            </li>
                                                            <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.BimanAirlines.Biman&hl=en&gl=US">BIMAN Mobile App <span class="badge bg-2 text-white">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#">Travel Info <i class="la la-angle-down"></i></a>
                                            <div class="dropdown-menu-item mega-menu">
                                                <ul class="row no-gutters">
                                                    <li class="col-lg-6 mega-menu-item">
                                                        <ul>
                                                            <li><a href="{{ route('baggageAll') }}">Baggage Info<span class="badge bg-2 text-white">Updated</span></a>
                                                        </li>
                                                        <li><a href="{{ route('refund-request') }}">Refund Request</a></li>
                                                        <li><a href="{{ route('refund-request', ['#refund_status']) }}">Check Refund Status</a></li>
                                                        <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a>
                                                        </li>
                                                        <li><a href="{{ route('accessibility-plan') }}">Disability Assistance</a></li>

                                                </ul>
                                        </li>
                                        <li class="col-lg-6 mega-menu-item">
                                            <ul>
                                                 <li><a href="{{ route('travel-advisory') }}">Travel
                                                                    Advisory</a>
                                                            </li>
                                                            <li><a href="{{ route('faq') }}">FAQ's </a></li>
                                                            <li><a href="{{ route('news-list') }}">Latest News</a></li>
                                                            <li><a href="{{ route('info') }}">General Information</a></li>
                                                            <li><a href="{{ route('termsConditions') }}">Terms
                                                        and Conditions</a></li>
                                                        <li><a href="https://www.biman-airlines.com/termsConditions#Biman-International-Tariff-Manual">Tariff Manual</a></li>


                                                </ul>
                                        </li>
                                    </ul>
                            </div>
                            </li>

                            <li>
                                <a href="#">Contact <i class="la la-angle-down"></i></a>
                                <ul class="dropdown-menu-item beta-menu">
                                    <li><a href="{{ route('contact', ['#domestic']) }}">Domestic Office</a></li>
                                    <li><a href="{{ route('contact', ['#global-office']) }}">International Office</a></li>
                                    <li><a href="{{ route('contact', ['#customer-feedback']) }}">Feedback</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Hajj 2024 <i class="la la-angle-down"></i></a>
                                <ul class="dropdown-menu-item beta-menu">
                                    <li><a href="{{ route('hajj-info') }}">Hajj Schedule</a></li>
                                </ul>
                            </li>
                             <li>
                                            <a href="#">Loyalty Club <i class="la la-angle-down"></i></a>
                                            <div class="dropdown-menu-item mega-menu">
                                                <ul class="row no-gutters">
                                                    <li class="col-lg-6 mega-menu-item">
                                                        <ul>
                                                            <li><a href="{{ route('loyalty.home') }}">About Us</a></li>
                                                            <li><a href="{{ route('loyalty.register') }}">Become a Member</a></li>
                                                            <li><a href="{{ route('loyalty.tc') }}">Terms & Conditions</a></li>
                                                           {{-- <li><a href="{{ route('loyalty.earn') }}">Earning Miles</a></li>--}}
                                                        </ul>
                                                    </li>
                                                    <li class="col-lg-6 mega-menu-item">
                                                        <ul>

                                                            <li><a href="{{ route('loyalty.faq') }}">Loyalty FAQ's</a></li>
                                                            @auth
                                                            <li><a href="{{ route('loyalty.member.test') }}">My Account</a></li>
                                                            @endauth

                                                            <!--<li><a href="{{ route('login') }}">Login</a></li>-->
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->

                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
        </div><!-- end header-menu-wrapper -->
    </header>
    <!-- ================================
         END HEADER AREA
================================= -->


    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    @yield('content')

    <!-- ================================
       START FOOTER AREA
    ================================= -->
    <section class="footer-area section-bg padding-top-80px padding-bottom-30px">
        <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column ">
                    <div class="footer-item">
                        <div class="footer-logo padding-bottom-30px">
                            <a href="{{route('index')}}" class="foot__logo"><img src="{{asset('/assets/images/logo/Biman-Logo-English-Copy.svg')}}" alt="logo"></a>
                        </div>
                        <!-- end logo -->


                        <ul class="list-items pt-1">
                            <li><i class="la la-building mr-1"></i>Head Office,<br> Balaka, Kurmitola,<br>
                                Dhaka-1229, Bangladesh.</li>
                            <li><i class="la la-phone" aria-hidden="true"> </i> +88-02-8901600</li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title custom-footer-title curve-shape pb-3 margin-bottom-20px">Useful Links</h4>
                        <ul class="list-items list--items">
                            {{-- <li><a href="about.html">CEO's Message</a></li> --}}
                            <li><a href="{{route('news-list')}}">News & Announcement</a></li>
                            <li><a href="{{ route('contact', ['#customer-feedback']) }}">Feedback</a></li>
                            <li><a target="_blank" href="http://biman.gov.bd/site/view/jobs/-">Careers</a></li>
                            <li><a href="{{ route('contact', ['#domestic']) }}">Contacts</a></li>
                            <li><a target="_blank" href="http://biman.gov.bd/site/view/tenders/-">Tender</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title custom-footer-title curve-shape pb-3 margin-bottom-20px">Other Links</h4>
                        <ul class="list-items list--items">
                            <li><a target="_blank" href="http://biman.gov.bd/">Biman Govt. Portal</a></li>
                            <li><a target="_blank" href="http://bfcc-bd.com/">Biman Flight Catering Centre - BFCC</a></li>
                            <li><a target="_blank" href="http://caab.portal.gov.bd/">Civil Aviation Authority, Bangladesh - CAAB</a></li>
                            <li><a target="_blank" href="http://www.mohfw.gov.bd/">Ministry of Health and Family Welfare</a></li>
                            <li><a target="_blank" href="http://www.parjatan.gov.bd/">Parjatan Corporation</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title custom-footer-title curve-shape pb-3 margin-bottom-20px">Travel Agents</h4>
                        <ul class="list-items list--items">
                            <li><a href="{{route('termsConditions',['#Online-Travel-Agents'])}}">Online Travel Agency</a></li>
                            <li><a href="{{route('termsConditions',['#Booking-Policy'])}}">Booking Policy</a></li>
                            <li><a href="{{route('termsConditions',['#Agency-Debit-Memo-Policy'])}}">ADM Policy</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
            <div class="row align-items-center">

                <div class="col-lg-8">
                    <div class="term-box footer-item">
                        <ul class="list-items list--items d-flex align-items-center">
                            <li><a href="{{ route('ceo-message') }}">CEO's Message</a></li>
                            <li><a href="{{ route('termsConditions') }}">Terms & Conditions</a></li>
                            <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('faq') }}">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="footer-social-box text-right">
                        <ul class="social-profile">
                            <li><a target="_blank" href="https://www.facebook.com/bimanbalaka/"><i class="lab la-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCkvHhmY2jLPjb6llfkVXbMg"><i class="lab la-youtube"></i></a></li>
                            {{-- <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div><!-- end container -->
        <div class="section-block mt-4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            &copy; <span style="color:#006A4E">IT Division</span> <img style="width:20px;" src="{{asset('assets/images/logo/biman_red_logo.png')}}" /> <a target="_blank" href="https://www.biman-airlines.com" style="color:#006A4E">Biman Bangladesh
                                Airlines</a>
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-6">
                    <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                        <h3 class="title custom-footer-title font-size-15 pr-2">We Accept</h3>
                        <img class="payment-img" style="height: 28px ;background: white" src="{{asset('assets/images/payment/p-nagad.png')}}" alt="">
                        <img class="payment-img" style="height: 29px" src="{{asset('assets/images/payment/p-bkash.png')}}" alt="">

                        <img class="payment-img" style="height: 31px" src="{{asset('assets/images/payment/p-amex.png')}}" alt="">
                        <img class="payment-img" style="height: 31px" {{-- style="height: 17px!important;"--}} src="{{asset('assets/images/payment/p-visa.png')}}" alt="">
                        <img class="payment-img" style="height: 31px" src="{{asset('assets/images/payment/p-master.png')}}" alt="">
                        <img class="payment-img" style="height: 31px" src="{{asset('assets/images/logo/jcb.png')}}" alt="">

                    </div><!-- end copy-right-content -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end footer-area -->




    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->
    <!-- Template JS Files -->

    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated-headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ripples-min.js') }}"></script>
    <script src="{{ asset('assets/js/quantity-input-v2.js') }}"></script>
    {{-- carousal --}}

    <script src="{{ asset('assets/js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('assets/js/superslider-script.js') }}"></script>
    {{-- carousal --}}
    <script src="{{ asset('assets/js/main_v1.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollbox.js') }}"></script>

    <script>
        $(window).on('load',function(){
                        if (window.location.href.match("source=mobile-app$") || (window.location.href.match("source=mobile-app"))) {
            $('.header-menu-wrapper').css("display", "none");
            $('.footer-area').css("display", "none");
            // $('.breadcrumb-area').css("display", "none");
            } else {
                var prev_url = document.referrer;
                // console.log(prev_url);
                if (prev_url.match("source=mobile-app$")) {
                    var url = window.location.href,
                        separator = (url.indexOf("?") === -1) ? "?" : "&",
                        newParam = separator + "source=mobile-app";
                    newUrl = url.replace(newParam, "");
                    newUrl += newParam;
                    window.location.href = newUrl;

                    if (window.location.href.match("source=mobile-app$") || (window.location.href.match("source=mobile-app"))) {
                        $('.header-menu-wrapper').css("display", "none");
                        $('.footer-area').css("display", "none");
                        // $('.breadcrumb-area').css("display", "none");
                    }
                }

            }
        });


    </script>

    <script>
        $(function() {
            $('#demo').scrollbox({
                // Scroll method
                linear: false,

                // Start delay (in seconds)
                startDelay: 2,

                // Delay after each scroll event (in seconds)
                delay: 7,

                // Distance of each single step (in pixels)
                step: 5,

                // Delay after each single step (in milliseconds)
                speed: 32,

                // Items to switch after each scroll event
                switchItems: 1,

                direction: 'vertical',
                distance: 'auto',
                autoPlay: true,
                onMouseOverPause: true,
                paused: false,
                queue: null,
                listElement: 'ul',
                listItemElement: 'li',

                // Infinite loop or not
                infiniteLoop: true,

                // Give a number if you don't want to have infinite loop
                switchAmount: 0,

                // Callback function after each forward action
                afterForward: null,

                // Callback function after each backward action
                afterBackward: null
            });
        });
    </script>
    <script>
        // script to chane the tab in widget
        $(document).ready(function() {
            function onHashChange() {
                var hash = window.location.hash;

                if (hash) {
                    $(`[data-toggle="tab"][href="${hash}"]`).trigger('click');

                    // console.log(window.location.hash.substring(1));
                    // $('html, body').animate({
                    //     scrollTop: $(hash).offset().top -30
                    // }, 1000);
                    // document.getElementById(hash.substring(1)).scrollIntoView();
                }
            }

            window.addEventListener('hashchange', onHashChange, false);
            onHashChange();
        });
    </script>

    <script>
        // script to change the url as per section id
        $(document).ready(function() {
            $(function() {
                var hash = window.location.hash;
                // console.log(hash);
                hash && $('ul.nav a[href="' + hash + '"]').tab('show');

                $('.nav-tabs a').click(function(e) {
                    $(this).tab('show');
                    window.location.hash = this.hash;
                    // var scrollmem = $('body').scrollTop() || $('html').scrollTop();
                    // $('html,body').scrollTop(scrollmem);

                    // document.getElementById(hash.substring(1)).scrollIntoView();
                    // $('html, body').animate({
                    //     scrollTop: $(hash).offset().top - 30
                    // }, 1000);
                    // document.getElementById(hash.substring(1)).scrollIntoView();
                });
            });
        });
    </script>
    <script type="text/javascript">
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var country_code = this.responseText.replace(/(\r\n|\n|\r)/gm, "").split('loc=');
                country_code = country_code[1].split('tls=');
                country_code = country_code[0];

                var className = "flag-icon flag-icon-" + country_code.toLowerCase() + " mr-1";
                document.getElementById("flag").className = className;
            }
        };
        //OPEN HTTP Request
        xhttp.open("GET", "https://www.cloudflare.com/cdn-cgi/trace", true);
        xhttp.send();
    </script>

    @yield('page-specific-footer')

</body>

</html>
