@extends('header-footer')

@section('header-extension')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <style type="text/css">
        .daterangepicker {
            font-size: 9pt !important
        }

    </style>

@endsection

@section('content')

    <!-- ================================
                        START HERO-WRAPPER (WIDGET) AREA
                    ================================= -->
    <section class="hero-wrapper hero-wrapper2">
        <div class="hero-box pb-0">
            <div id="fullscreen-slide-contain">
                <ul class="slides-container">
                    <li><img src="assets/images/hero-bg1.jpg" alt=""></li>
                    <li><img src="assets/images/hero-bg2.jpg" alt=""></li>
                    <li><img src="assets/images/hero-bg3.jpg" alt=""></li>
                    <li><img src="assets/images/hero-bg4.jpg" alt=""></li>
                    <li><img src="assets/images/hero-bg0.jpg" alt=""></li>
                </ul>
            </div><!-- End background slider -->

            <div class="container padding-bottom-70px mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content pb-5 text-center">
                            {{-- <div class="section-heading">
                                        <h2 class="sec__title cd-headline zoom">
                                            Amazing <span class=" cd-words-wrapper">
                                                <b class="is-visible">Aircrafts</b>
                                                <b>Flights</b>
                                                <b>Fares</b>
                                                <b>Experience</b>
                                                <b>Offers</b>
                                                <b>Moments</b>
                                                <b>Ancillaries</b>
                                                <b>Hospitality</b>
                                                <b>Luxury</b>
                                            </span>
                                            Waiting for You
                                        </h2>
                                    </div> --}}
                            <div class="section-heading">
                                {{-- <p class="sec__desc pb-2">Biman flys, Dream getaways</p> --}}
                                {{-- <h2 class="sec__title cd-headline zoom">
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible" style="font-family: 'AdorshoLipi'; font-size:2rem">বিমান ও
                                            বাংলাদেশ - অদম্য অগ্রযাত্রায় ছুটে চলার ৫০ বছর</b>
                                        <b style="font-family: 'AdorshoLipi'; font-size:2rem">দক্ষিণ এশিয়ার নবীনতম ও
                                            তারুণ্যদীপ্ত বিমান বহরে স্বাগতম</b>
                                        <b style="font-family: 'AdorshoLipi'; font-size:2rem">যাত্রী নিরাপত্তায় বিমান
                                            আপোষহীন, নিরাপদ যাত্রায় বিমান হোক প্রথম পছন্দ</b>
                                        <b style="font-family: 'AdorshoLipi'; font-size:2rem">রেমিট্যান্স যোদ্ধাদের
                                            সর্বোত্তম
                                            সঙ্গী বিমান বাংলাদেশ এয়ারলাইন্স</b>
                                        <b style="font-family: 'AdorshoLipi'; font-size:2rem">বিমানের দুর্বার অগ্রগতি সচল
                                            রাখছে দেশের অর্থনীতি</b>
                                        <b style="font-family: 'AdorshoLipi'; font-size:2rem">৫০ বছর শেষে আস্থা ও ভরসা
                                            বিমানে</b>
                                        <b>50 Years of Glory and History</b>
                                        <b>The Youngest Fleet in South Asia</b>
                                        <b>Committed to provide modern service</b>
                                        <b>Biman doesn't compromise with your safety</b>
                                        <b>Quality service with high satisfaction</b>
                                        <b>Biman, Your trusted flying partner</b>
                                    </span>
                                    
                                           
                                </h2> --}}
                                {{-- <h2 class="sec__desc">Your Home in the Sky</h2> --}}
                            </div>
                        </div><!-- end hero-content -->
                        <div class="section-tab text-center pl-4" id="book-ticket">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="flight-tab" data-toggle="tab"
                                        href="#flight" role="tab" aria-controls="flight" aria-selected="true">
                                        <i class="la la-plane mr-1"></i>Book Flight
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="manage-booking-tab" data-toggle="tab"
                                        href="#manage-booking" role="tab" aria-controls="manage-booking"
                                        aria-selected="false">
                                        <i class="las la-suitcase mr-1"></i>Manage My Trips
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="flight-status-tab" data-toggle="tab"
                                        href="#flight-status" role="tab" aria-controls="flight-status"
                                        aria-selected="false">
                                        <i class="las la-info-circle mr-1"></i>Flight Status
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="flight-schedule-tab" data-toggle="tab"
                                        href="#flight-schedule" role="tab" aria-controls="flight-schedule"
                                        aria-selected="false">
                                        <i class="las la-clock mr-1"></i>Flight Schedule
                                    </a>
                                </li>

                            </ul>
                        </div><!-- end section-tab -->
                        <div class="tab-content search-fields-container" id="myTabContent">
                            <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                <div class="section-tab section-tab-2">
                                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                        <li class="nav-item pb-3">
                                            <a class="nav-link" id="one-way-tab" data-toggle="tab" href="#one-way"
                                                role="tab" aria-controls="one-way" aria-selected="false">
                                                One way
                                            </a>
                                        </li>
                                        <li class="nav-item pb-3">
                                            <a class="nav-link active" id="round-trip-tab" data-toggle="tab"
                                                href="#round-trip" role="tab" aria-controls="round-trip"
                                                aria-selected="true">
                                                Round-trip
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            {{-- <span>Multi</span> --}}
                                            {{-- <a style="font-size: .9rem; font-weight:500" href="https://dx.dx13.cert.aws.sabre.com/dx/BGDX/#/home?journeyType=multi-city&awardBooking=false&class=Economy&ADT=1&CHD=0&INF=0" 
                                               aria-selected="false">
                                               Multi-City 
                                            </a> --}}
                                            <a class="nav-link" id="multi-city-tab" data-toggle="tab"
                                                href="#multi-city" role="tab" aria-controls="multi-city"
                                                aria-selected="false">
                                                Multi-city
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end section-tab -->
                                <div class="tab-content" id="myTabContent3">
                                    <div class="tab-pane fade" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
                                        <div class="contact-form-action">
                                            {{-- onsubmit="return false; --}}
                                            <form id="form" method="GET" action="{{ route('flight-oneWay') }}"
                                                class="row align-items-center">
                                                @csrf
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text"><i class="las la-plane-departure mr-1"
                                                                style="font-size: 1.4rem;"></i>Flying from</label><span
                                                            style="color: red">*</span>
                                                            @error('departure1')
                                                                    <span class="invalid-feedback" role="alert"></span>
                                                                    <strong class="text-danger">Departure field is required</strong>
                                                            @enderror
                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            {{-- <input class="form-control" type="text"
                                                                placeholder="City or airport"> --}}
                                                            <select style="width: 100%; !important" id="departure1"
                                                                name="departure1" class="form-control" placeholder="TYPE"
                                                                oninvalid="this.setCustomValidity('Please Select Departure City or Airport')"
                                                                oninput="this.setCustomValidity('')" required>
                                                                <option value=''>Departure City or Airport</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text"><i class="las la-plane-arrival mr-1"
                                                                style="font-size: 1.4rem;"></i>Flying to</label><span
                                                            style="color: red">*</span>
                                                            @error('arrival1')
                                                                    <span class="invalid-feedback" role="alert"></span>
                                                                    <strong class="text-danger">Arrival field is required</strong>
                                                            @enderror
                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            {{-- <input class="form-control" type="text"
                                                                placeholder="City or airport"> --}}
                                                            <select style="width: 100%; !important" id="arrival1"
                                                                name="arrival1" class="form-control" placeholder="TYPE"
                                                                oninvalid="this.setCustomValidity('Please Select Arrival City or Airport')"
                                                                oninput="this.setCustomValidity('')" required>
                                                                <option value=''>Arrival City or Airport</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Departing</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>

                                                            <input id="departingDate" class=" form-control" type="text"
                                                                name="daterange_single" readonly>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Passengers</label>
                                                        <div class="form-group">
                                                            <div class="dropdown dropdown-contain gty-container">
                                                                <a class="dropdown-toggle dropdown-btn" href="#"
                                                                    role="button" data-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <span class="adult" data-text="Adult"
                                                                        data-text-multi="Adults">1 Adult</span>
                                                                    -
                                                                    <span class="children" data-text="Child"
                                                                        data-text-multi="Children">0 Children</span>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Adults <span>&#8805; 12</span> </label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec" id="qtyDecId11">
                                                                                    <i class="la la-minus"></i>
                                                                                </div>
                                                                                <input class="adult"
                                                                                    id="adult_number" type="text"
                                                                                    name="adult_number" value="1" readonly
                                                                                    required>
                                                                                <div class="qtyInc" id="qtyIncId11">
                                                                                    <i class="la la-plus"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Children<span>(2-11)</span></label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input class="children"
                                                                                    id="child_number" type="text"
                                                                                    name="child_number" value="0" readonly
                                                                                    required>
                                                                                <div class="qtyInc" id="qtyIncId12">
                                                                                    <i class="la la-plus"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Infants<span>(0-1)</span></label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDecInf"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text" name="infants_number"
                                                                                    value="0" class="infant"
                                                                                    readonly required>
                                                                                <div class="qtyIncInf"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end dropdown -->
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Coach</label>
                                                        <div class="form-group select-contain w-auto">
                                                            <select id="" name="cabin" class="select-contain-select"
                                                                required>
                                                                <option value="Economy" selected>Economy</option>
                                                                <option value="Business">Business</option>
                                                                {{-- <option value="3">First class</option> --}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3">
                                                    <button type="submit"
                                                        class="theme-btn w-100 text-center margin-top-20px"
                                                        id="btnShowFlights">Show Flights</button>
                                                </div>
                                                <input type="text" id="point_of_sales1" name="point_of_sales1" hidden>
                                        </div>
                                        <div class="advanced-wrap">
                                            <a class="btn collapse-btn theme-btn-hover-gray font-size-15"
                                                data-toggle="collapse" href="#collapseThree" role="button"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <i class="las la-tag"></i>
                                                Promo Code
                                            </a>
                                            <div class="collapse pt-3" id="collapseThree">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="input-box">
                                                            {{-- <label class="label-text">Preferred airline</label> --}}
                                                            <div class="form-group">
                                                                <div class="select-contain w-100">
                                                                    <input placeholder="Promo Code for amazing discounts"
                                                                        type="text" name="promo_code" value=""
                                                                        class="promo_code form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div><!-- end advanced-wrap -->
                                    </div><!-- end tab-pane -->
                                    <div class="tab-pane fade show active" id="round-trip" role="tabpanel"
                                        aria-labelledby="round-trip-tab">
                                        <div class="contact-form-action">
                                            <form id="form1" method="get" action="{{ route('flightRoundTrip') }}"
                                                class="row align-items-center">
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text"><i
                                                                class="las la-plane-departure mr-1"
                                                                style="font-size: 1.4rem;"></i>Flying from</label><span
                                                            style="color: red">*</span>
                                                            @error('departure2')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">Departure field is required</strong>
                                                            @enderror
                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <select style="width: 100%; !important" id="departure2"
                                                                name="departure2" class="form-control" placeholder="TYPE"
                                                                required
                                                                oninvalid="this.setCustomValidity('Please Select Departure City or Airport')"
                                                                oninput="this.setCustomValidity('')">
                                                                <option value=''>Departure City or Airport</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text"><i class="las la-plane-arrival mr-1"
                                                                style="font-size: 1.4rem;"></i>Flying to</label><span
                                                            style="color: red">*</span>
                                                            @error('arrival2')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">Arrival field is required</strong>
                                                            @enderror
                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <select style="width: 100%; !important" id="arrival2"
                                                                name="arrival2" class="form-control" placeholder="TYPE"
                                                                required
                                                                oninvalid="this.setCustomValidity('Please Select Arrival City or Airport')"
                                                                oninput="this.setCustomValidity('')">
                                                                <option value=''>Arrival City or Airport</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-4 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Departing - Returning</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>

                                                            <input id="departingDateRound" class="form-control"
                                                                type="text" name="daterange_round" readonly>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Passengers</label>
                                                        <div class="form-group">
                                                            <div class="dropdown dropdown-contain gty-container">
                                                                <a class="dropdown-toggle dropdown-btn" href="#"
                                                                    role="button" data-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <span class="adult" data-text="Adult"
                                                                        data-text-multi="Adults">1 Adult</span>
                                                                    -
                                                                    <span class="children" data-text="Child"
                                                                        data-text-multi="Children">0 Children</span>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Adults <span>&#8805; 12</span> </label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"
                                                                                    id="qtyDecId21"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input class="adult" type="text"
                                                                                    name="adult_number" value="1" required
                                                                                    readonly>
                                                                                <div class="qtyInc"
                                                                                    id="qtyIncId21"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Children<span>(2-11)</span></label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input class="children" type="text"
                                                                                    name="child_number" value="0" required
                                                                                    readonly>
                                                                                <div class="qtyInc"
                                                                                    id="qtyIncId22"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Infants<span>(0-1)</span></label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDecInf"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text" name="infants_number"
                                                                                    value="0" class="infant"
                                                                                    readonly required>
                                                                                <div class="qtyIncInf"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end dropdown -->
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-2 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Coach</label>
                                                        <div class="form-group">
                                                            <div class="select-contain w-auto">
                                                                <select name="cabin" class="select-contain-select"
                                                                    required>
                                                                    <option value="Economy" selected>Economy</option>
                                                                    <option value="Business">Business</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3">
                                                    <button type="submit"
                                                        class="theme-btn w-100 text-center margin-top-20px">Show
                                                        Flights</button>
                                                </div>
                                                <input type="text" id="point_of_sales2" name="point_of_sales2" hidden>
                                        </div>
                                        <div class="advanced-wrap">
                                            <a class="btn collapse-btn theme-btn-hover-gray font-size-15"
                                                data-toggle="collapse" href="#collapseThree" role="button"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <i class="las la-tag"></i>
                                                Promo Code
                                            </a>
                                            <div class="collapse pt-3" id="collapseThree">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="input-box">
                                                            {{-- <label class="label-text">Preferred airline</label> --}}
                                                            <div class="form-group">
                                                                <div class="select-contain w-100">
                                                                    <input placeholder="Promo Code for amazing discounts"
                                                                        type="text" name="promo_code" value=""
                                                                        class="promo_code form-control">
                                                                    {{-- <select class="select-contain-select">
                                                                        <option selected="selected" value=""> No preference
                                                                        </option>
                                                                        <option value="AN">Advanced Air</option>
                                                                        <option value="A3">Aegean</option>
                                                                        <option value="EI">Aer Lingus</option>
                                                                        <option value="5G">Aerocuahonte / Mayair</option>
                                                                        <option value="SU">Aeroflot-Russian Airlines
                                                                        </option>
                                                                        <option value="AR">Aerolineas Argentinas</option>
                                                                        <option value="VW">Aeromar Airlines</option>
                                                                        <option value="AM">Aeromexico</option>
                                                                        <option value="ZI">Aigle Azur</option>
                                                                        <option value="AH">Air Algerie</option>
                                                                        <option value="KC">Air Astana</option>
                                                                        <option value="UU">Air Austral</option>
                                                                        <option value="BT">Air Baltic</option>
                                                                        <option value="BP">Air Botswana</option>
                                                                        <option value="AC">Air Canada</option>
                                                                        <option value="TX">Air Caraibes</option>
                                                                        <option value="CA">Air China</option>
                                                                        <option value="3E">Air Choice One</option>
                                                                        <option value="XK">Air Corsica</option>
                                                                        <option value="UX">Air Europa</option>
                                                                        <option value="X4">Air Excursions LLC</option>
                                                                        <option value="AF">Air France</option>
                                                                        <option value="NY">Air Iceland Connect</option>
                                                                        <option value="AI">Air India</option>
                                                                        <option value="IG">Air Italy</option>
                                                                        <option value="MD">Air Madagascar</option>
                                                                        <option value="KM">Air Malta</option>
                                                                        <option value="MK">Air Mauritius</option>
                                                                        <option value="9U">Air Moldova</option>
                                                                        <option value="NZ">Air New Zealand</option>
                                                                        <option value="PX">Air Niugini</option>
                                                                        <option value="OG">Air Onix</option>
                                                                        <option value="JU">Air Serbia</option>
                                                                        <option value="TN">Air Tahiti Nui</option>
                                                                        <option value="TS">Air Transat</option>
                                                                        <option value="H/">AirAsia with baggage</option>
                                                                        <option value="AS">Alaska Airlines</option>
                                                                        <option value="AZ">Alitalia</option>
                                                                        <option value="NH">All Nippon Airways</option>
                                                                        <option value="G4">Allegiant Air</option>
                                                                        <option value="AA">American Airlines</option>
                                                                        <option value="OY">Andes Lineas Aereas</option>
                                                                        <option value="OZ">Asiana Airlines</option>
                                                                        <option value="KP">ASKY</option>
                                                                        <option value="OS">Austrian Airlines</option>
                                                                        <option value="AV">Avianca</option>
                                                                        <option value="2K">Avianca Ecuador</option>
                                                                        <option value="9V">Avior Airlines</option>
                                                                        <option value="J2">Azerbaijan Airlines</option>
                                                                        <option value="AD">Azul</option>
                                                                        <option value="JD">Beijing Capital Airlines</option>
                                                                        <option value="0B">BlueAir</option>
                                                                        <option value="OB">Boliviana De Aviacion</option>
                                                                        <option value="4B">Boutique Air</option>
                                                                        <option value="BA">British Airways</option>
                                                                        <option value="SN">Brussels Airlines</option>
                                                                        <option value="A7">Calafia Airlines</option>
                                                                        <option value="K6">Cambodia Angkor Air</option>
                                                                        <option value="BW">Caribbean Airlines</option>
                                                                        <option value="CX">Cathay Pacific</option>
                                                                        <option value="KX">Cayman Airways</option>
                                                                        <option value="CI">China Airlines</option>
                                                                        <option value="MU">China Eastern Airlines</option>
                                                                        <option value="CZ">China Southern Airlines</option>
                                                                        <option value="CC">CM Airlines</option>
                                                                        <option value="DE">Condor</option>
                                                                        <option value="LF">Contour Airlines</option>
                                                                        <option value="CM">Copa</option>
                                                                        <option value="SS">Corsair</option>
                                                                        <option value="OK">Czech Airlines</option>
                                                                        <option value="DL">Delta</option>
                                                                        <option value="KG">Denver Air Connection</option>
                                                                        <option value="U2">easyJet</option>
                                                                        <option value="MS">Egyptair</option>
                                                                        <option value="LY">EL AL Israel Airlines</option>
                                                                        <option value="7Q">Elite Airways</option>
                                                                        <option value="EL">Ellinair</option>
                                                                        <option value="EK">Emirates</option>
                                                                        <option value="ET">Ethiopian Airlines</option>
                                                                        <option value="EY">Etihad Airways</option>
                                                                        <option value="EW">Eurowings</option>
                                                                        <option value="BR">EVA Airways</option>
                                                                        <option value="FJ">Fiji Airways</option>
                                                                        <option value="AY">Finnair</option>
                                                                        <option value="FY">Firefly</option>
                                                                        <option value="F8">Flair Airlines</option>
                                                                        <option value="BE">Flybe</option>
                                                                        <option value="FZ">flydubai</option>
                                                                        <option value="XY">flynas</option>
                                                                        <option value="F9">Frontier Airlines</option>
                                                                        <option value="GA">Garuda Indonesia</option>
                                                                        <option value="GM">Germania Flug AG</option>
                                                                        <option value="4U">Germanwings</option>
                                                                        <option value="G3">GOL Linhas Aereas S.A.</option>
                                                                        <option value="ZK">Great Lakes Airlines</option>
                                                                        <option value="GF">Gulf Air</option>
                                                                        <option value="HU">Hainan Airlines</option>
                                                                        <option value="HA">Hawaiian Airlines</option>
                                                                        <option value="HX">Hong Kong Airlines</option>
                                                                        <option value="IB">Iberia</option>
                                                                        <option value="FI">Icelandair</option>
                                                                        <option value="JY">interCaribbean Airways</option>
                                                                        <option value="4O">Interjet</option>
                                                                        <option value="03">Involatus</option>
                                                                        <option value="JL">Japan Airlines</option>
                                                                        <option value="9W">Jet Airways</option>
                                                                        <option value="B6">JetBlue Airways</option>
                                                                        <option value="DV">JSC Aircompany SCAT</option>
                                                                        <option value="KQ">Kenya Airways</option>
                                                                        <option value="KL">KLM</option>
                                                                        <option value="KE">Korean Air</option>
                                                                        <option value="B0">La Compagnie</option>
                                                                        <option value="LR">LACSA</option>
                                                                        <option value="QV">Lao Airlines</option>
                                                                        <option value="LP">LATAM Airlines Group</option>
                                                                        <option value="LA">LATAM Airlines Group</option>
                                                                        <option value="JJ">LATAM Airlines Group</option>
                                                                        <option value="XL">LATAM Airlines Group</option>
                                                                        <option value="4M">LATAM Airlines Group</option>
                                                                        <option value="W4">LC Peru</option>
                                                                        <option value="LI">Liat</option>
                                                                        <option value="LO">LOT-Polish Airlines</option>
                                                                        <option value="LH">Lufthansa</option>
                                                                        <option value="LG">Luxair</option>
                                                                        <option value="MH">Malaysia Airlines</option>
                                                                        <option value="OD">Malindo Air</option>
                                                                        <option value="2M">Maya Island Air</option>
                                                                        <option value="7M">Mayair</option>
                                                                        <option value="OM">MIAT-Mongolian Airlines</option>
                                                                        <option value="ME">Middle East Airlines</option>
                                                                        <option value="YM">Montenegro</option>
                                                                        <option value="8M">Myanmar Airways International
                                                                        </option>
                                                                        <option value="NO">Neos S.P.A.</option>
                                                                        <option value="RA">Nepal Airlines</option>
                                                                        <option value="NP">Nile Air</option>
                                                                        <option value="W/">NokScoot with baggage</option>
                                                                        <option value="DN">Norwegian Air Argentina</option>
                                                                        <option value="D8">Norwegian Air International Ltd
                                                                        </option>
                                                                        <option value="DY">Norwegian Air Shuttle</option>
                                                                        <option value="DI">Norwegian Air UK</option>
                                                                        <option value="Y/">Olympic Air with baggage</option>
                                                                        <option value="WY">Oman Air</option>
                                                                        <option value="8Q">Onur Air</option>
                                                                        <option value="8P">Pacific Coastal Airlines</option>
                                                                        <option value="PK">Pakistan International Airlines
                                                                        </option>
                                                                        <option value="ZM">Pegasus Asia</option>
                                                                        <option value="KS">PenAir</option>
                                                                        <option value="PR">Philippine Airlines</option>
                                                                        <option value="PU">Plus Ultra Lineas Aereas S. A.
                                                                        </option>
                                                                        <option value="PD">Porter Airlines</option>
                                                                        <option value="PW">PrecisionAir</option>
                                                                        <option value="P0">Proflight Zambia</option>
                                                                        <option value="QF">Qantas Airways</option>
                                                                        <option value="QR">Qatar Airways</option>
                                                                        <option value="7H">Ravn Alaska</option>
                                                                        <option value="WZ">Red Wings Airlines</option>
                                                                        <option value="4P">Regional Sky</option>
                                                                        <option value="AT">Royal Air Maroc</option>
                                                                        <option value="BI">Royal Brunei Airlines</option>
                                                                        <option value="RJ">Royal Jordanian</option>
                                                                        <option value="WB">Rwandair</option>
                                                                        <option value="SK">SAS</option>
                                                                        <option value="S4">SATA International-Azores
                                                                            Airlines S.A.</option>
                                                                        <option value="SV">Saudi Arabian Airlines</option>
                                                                        <option value="/Y">Scoot with baggage</option>
                                                                        <option value="BB">Seaborne Airlines</option>
                                                                        <option value="SC">Shandong Airlines</option>
                                                                        <option value="3U">Sichuan Airlines</option>
                                                                        <option value="3M">Silver Airways</option>
                                                                        <option value="SQ">Singapore Airlines</option>
                                                                        <option value="H2">Sky Airlines</option>
                                                                        <option value="GQ">Sky Express</option>
                                                                        <option value="IE">Solomon Airlines</option>
                                                                        <option value="SA">South African Airways</option>
                                                                        <option value="9X">Southern Airways</option>
                                                                        <option value="NK">Spirit Airlines</option>
                                                                        <option value="UL">SriLankan Airlines</option>
                                                                        <option value="2I">STAR PERU</option>
                                                                        <option value="6G">Sun Air Express</option>
                                                                        <option value="SY">Sun Country Airlines</option>
                                                                        <option value="PY">Surinam Airways</option>
                                                                        <option value="LX">Swiss International Air Lines
                                                                        </option>
                                                                        <option value="WO">Swoop</option>
                                                                        <option value="DT">TAAG Angola Airlines</option>
                                                                        <option value="TA">TACA Airlines</option>
                                                                        <option value="VR">TACV-Cabo Verde Airlines</option>
                                                                        <option value="5U">TAG Airlines</option>
                                                                        <option value="EQ">Tame</option>
                                                                        <option value="TP">TAP Portugal</option>
                                                                        <option value="RO">Tarom-Romanian Air Transport
                                                                        </option>
                                                                        <option value="TG">Thai Airways International
                                                                        </option>
                                                                        <option value="MT">Thomas Cook Airlines</option>
                                                                        <option value="/X">Tigerair Australia with Bag
                                                                        </option>
                                                                        <option value="IT">Tigerair Taiwan</option>
                                                                        <option value="/Z">Tigerair Taiwan with bag</option>
                                                                        <option value="TJ">Tradewind Aviation</option>
                                                                        <option value="9N">Tropic Air</option>
                                                                        <option value="TB">TUI fly</option>
                                                                        <option value="TK">Turkish Airlines</option>
                                                                        <option value="PS">Ukraine International Airlines
                                                                        </option>
                                                                        <option value="UA">United</option>
                                                                        <option value="UT">Utair Aviation</option>
                                                                        <option value="HY">Uzbekistan Airways</option>
                                                                        <option value="VN">Vietnam Airlines</option>
                                                                        <option value="VX">Virgin America</option>
                                                                        <option value="VS">Virgin Atlantic</option>
                                                                        <option value="VA">Virgin Australia</option>
                                                                        <option value="V2">Vision Airlines</option>
                                                                        <option value="VB">Viva Aerobus</option>
                                                                        <option value="F1">Viva Air Colombia</option>
                                                                        <option value="VV">Viva Airlines Peru</option>
                                                                        <option value="Y4">Volaris</option>
                                                                        <option value="V7">Volotea</option>
                                                                        <option value="VY">Vueling Airlines</option>
                                                                        <option value="WS">WestJet</option>
                                                                        <option value="WM">Windward Island Airways
                                                                            International</option>
                                                                        <option value="MF">Xiamen Airlines</option>
                                                                        <option value="SE">XL Airways</option>
                                                                    </select> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a style="color: black" class="btn theme-btn-hover-white font-size-15"
                                                role="button">
                                                <input style="transform: scale(1.5); margin-right:1px" name="flexible_date"
                                                    type="checkbox" class="btn">
                                                My dates are flexible
                                            </a>
                                        </div><!-- end advanced-wrap -->
                                        </form>
                                    </div><!-- end tab-pane -->
                                    <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpanel"
                                        aria-labelledby="multi-city-tab">
                                        <form method="get" action="{{ route('flight-multicity') }}">
                                            <div id="contents" class="row flex-grow-1 align-items-center contact-form-action multi-flight-field d-flex align-items-center">
                                                {{-- <form class="row flex-grow-1 align-items-center" method="get" action="{{ route('flight-multicity') }}"> --}}
                                                {{-- <form action="#" class="row flex-grow-1 align-items-center"> --}}
                                                <div class="col-lg-4 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Flying from</label>
                                                        {{-- <select class="js-example-basic-single" name="state">
                                                            <option value="AL">Alabama</option>
                                                              
                                                            <option value="WY">Wyoming</option>
                                                          </select> --}}
                                                        <select style="width: 100%; !important" id="depart" name="depart"
                                                            class="js-example-basic-single" placeholder="TYPE" required>
                                                            <option value=''>Departure</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-4 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Flying to</label>
                                                        <select style="width: 100%; !important" id="arriv" name="arriv"
                                                            class="form-control" placeholder="TYPE" required>
                                                            <option value=''>Arrival</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">Departing</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input
                                                                class="date-picker-single form-control date-multi-picker"
                                                                id="date" type="text" name="daterange_single" readonly>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                {{-- </form> --}}
                                                <div class="multi-flight-delete-wrap pt-3 pl-3">
                                                    <button class="multi-flight-remove" type="button"><i
                                                            class="la la-remove"></i></button>
                                                </div>
                                            </div>
                                            <div class="row flex-grow-1 align-items-center contact-form-action multi-flight-field d-flex align-items-center">

                                                <div class="col-lg-4 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Flying from</label>
                                                        <select style="width: 100%; !important" id="depart1" name="depart1"
                                                            class="form-control" placeholder="TYPE">
                                                            <option value=''>Departure</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-4 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Flying to</label>
                                                        <select style="width: 100%; !important" id="arriv1" name="arriv1"
                                                            class="form-control" placeholder="TYPE">
                                                            <option value=''>Arrival</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">Departing</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input
                                                                class="date-picker-single form-control date-multi-picker"
                                                                id="date1" type="text" name="daterange_single1" readonly>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->

                                                <div class="multi-flight-delete-wrap pt-3 pl-3">
                                                    <button class="multi-flight-remove" type="button"><i
                                                            class="la la-remove"></i></button>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 pr-0">
                                                    <div class="form-group">
                                                        <button class="theme-btn add-flight-btn margin-top-40px w-100"
                                                            type="button"><i class="la la-plus mr-1"></i>Add another
                                                            flight</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Passengers</label>
                                                        <div class="form-group">
                                                            <div class="dropdown dropdown-contain gty-container">
                                                                <a class="dropdown-toggle dropdown-btn" href="#"
                                                                    role="button" data-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <span class="adult" data-text="Adult"
                                                                        data-text-multi="Adults">0 Adult</span>
                                                                    -
                                                                    <span class="children" data-text="Child"
                                                                        data-text-multi="Children">0 Children</span>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Adults</label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text" name="adult_number"
                                                                                    value="0">
                                                                                <div class="qtyInc"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Children</label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text" name="child_number"
                                                                                    value="0">
                                                                                <div class="qtyInc"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Infants</label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text" name="infants_number"
                                                                                    value="0" class="qty-input">
                                                                                <div class="qtyInc"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end dropdown -->
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Coach</label>
                                                        <div class="form-group">
                                                            <div class="select-contain w-auto">
                                                                <select class="select-contain-select">
                                                                    <option value="Economy" selected>Economy</option>
                                                                    <option value="Business">Business</option>
                                                                    {{-- <option value="3">First class</option> --}}
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3">
                                                    <button type="submit"
                                                        class="theme-btn w-100 text-center margin-top-20px">Search
                                                        Now</button>
                                                </div>
                                        </form>
                                    </div>
                                </div><!-- end tab-pane -->
                            </div>
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="manage-booking" role="tabpanel"
                            aria-labelledby="manage-booking-tab">
                            <div class="section-tab section-tab-2 pb-3">
                                <h5>Search by Trip Details</h5>
                            </div><!-- end section-tab -->
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="airport-tab">
                                    <div class="contact-form-action">
                                        <form method="GET" action="{{ route('manage-booking') }}"
                                            class="row align-items-center">
                                            @csrf
                                            <div class="col-lg-5 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Confirmation Code (PNR)</label><span
                                                        style="color: red">*</span>
                                                        @error('confirmationPNR')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">PNR is required</strong>
                                                        @enderror
                                                    <div class="form-group">
                                                        {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                        <i class="las la-file form-icon"></i>
                                                        <input id="confirmationPNR" name="confirmationPNR"
                                                            class="form-control" type="text"
                                                            placeholder="Confirmation Code (PNR)" required>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-4 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Last Name</label><span
                                                        style="color: red">*</span>
                                                        @error('lastName')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">Last Name is required</strong>
                                                        @enderror
                                                    <div class="form-group">
                                                        <i class="las la-user form-icon"></i>
                                                        <input id="lastName" name="lastName" class="form-control"
                                                            type="text" placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <button type="submit"
                                                    class="theme-btn w-100 text-center margin-top-20px">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end tab-pane -->

                            </div>
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="flight-status" role="tabpanel" aria-labelledby="flight-status-tab">
                            <div class="section-tab section-tab-2 pb-3">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="airport-tab" data-toggle="tab" href="#airport"
                                            role="tab" aria-controls="airport" aria-selected="true">
                                            Route
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="flight-number-tab" data-toggle="tab"
                                            href="#flight-number" role="tab" aria-controls="flight-number"
                                            aria-selected="false">
                                            Flight Number
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end section-tab -->
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="airport" role="tabpanel"
                                    aria-labelledby="airport-tab">
                                    <div class="contact-form-action">
                                        <form method="GET" action="{{ route('flightstatus-route') }}"
                                            class="row align-items-center">
                                            @csrf
                                            <div class="col-lg-6 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text"><i class="las la-plane-departure mr-1"
                                                            style="font-size: 1.4rem;"></i>Flying from</label><span
                                                        style="color: red">*</span>
                                                    @error('departureFlightStatus')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">Departure is required</strong>
                                                    @enderror    
                                                    <div class="form-group">
                                                        {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                        <select style="width: 100%; !important" id="departureFlightStatus"
                                                            name="departureFlightStatus" class="form-control"
                                                            placeholder="TYPE" required>
                                                            <option value=''>Departure</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->

                                            <div class="col-lg-6 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text"><i class="las la-plane-arrival mr-1"
                                                            style="font-size: 1.4rem;"></i>Flying to</label><span
                                                        style="color: red">*</span>
                                                    @error('arrivalFlightStatus')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">Arrival is required</strong>
                                                    @enderror      
                                                    <div class="form-group">
                                                        <select style="width: 100%; !important" id="arrivalFlightStatus"
                                                            name="arrivalFlightStatus" class="form-control"
                                                            placeholder="TYPE" required>
                                                            <option value=''>Arrival</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Departure Date</label>
                                                    @error('flightStatusDate')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">Date is required</strong>
                                                    @enderror 
                                                    <div class="form-group select-contain w-auto">
                                                        <select name="flightStatusDate" class="select-contain-select" required>
                                                            <option value="{{ date('m-d-Y') }}" selected>Today
                                                                {{ date('d-m-Y') }}</option>
                                                            <option
                                                                value="{{ Carbon\Carbon::tomorrow()->format('m-d-Y') }}">
                                                                Tomorrow {{ Carbon\Carbon::tomorrow()->format('d-m-Y') }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <button type="submit" class="theme-btn text-center margin-top-20px"
                                                    style="color: white">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="flight-number" role="tabpanel"
                                    aria-labelledby="flight-number-tab">
                                    <div class="contact-form-action">
                                        <form method="GET" action="{{ route('flightstatus-flightno') }}"
                                            class="row align-items-center">
                                            @csrf
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Biman Bangladesh Airlines</label>
                                                    <div class="form-group select-contain w-auto">
                                                        <span class="las la-plane form-icon"></span>
                                                        <input value="BG" class="form-control" type="text" placeholder=""
                                                            readonly>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flight Number</label>
                                                    @error('flight_no')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">Flight no. is required</strong>
                                                    @enderror 
                                                    <div class="form-group">
                                                        <span class="las la-plane-departure form-icon"></span>
                                                        <input class="form-control" type="text" name="flight_no"
                                                            placeholder="4039"required>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Departure Date</label>
                                                    @error('departure_date')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">Departure date is required</strong>
                                                    @enderror 
                                                    <div class="form-group select-contain w-auto">
                                                        <select class="select-contain-select" name="departure_date" required>
                                                            <option
                                                                value="{{ Carbon\Carbon::yesterday()->format('m-d-Y') }}">
                                                                Yesterday
                                                                {{ Carbon\Carbon::yesterday()->format('d-m-Y') }}
                                                            </option>
                                                            <option value="{{ date('m-d-Y') }}" selected>Today
                                                                {{ date('d-m-Y') }}</option>
                                                            <option
                                                                value="{{ Carbon\Carbon::tomorrow()->format('m-d-Y') }}">
                                                                Tomorrow {{ Carbon\Carbon::tomorrow()->format('d-m-Y') }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <button type="submit"
                                                    class="theme-btn w-100 text-center margin-top-20px">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end tab-pane -->
                            </div>
                        </div><!-- end tab-pane -->

                        <div class="tab-pane fade" id="flight-schedule" role="tabpanel"
                            aria-labelledby="flight-schedule-tab">
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="flight-hotel" role="tabpanel"
                                    aria-labelledby="flight-hotel-tab">
                                    <div class="contact-form-action">
                                        <form method="GET" action="{{ route('flight-schedule') }}"
                                            class="row align-items-center">
                                            <div class="col-lg-6 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text"><i class="las la-plane-departure mr-1"
                                                            style="font-size: 1.4rem;"></i>Flying from</label><span
                                                        style="color: red">*</span>
                                                    @error('departureFlightSchedule')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">Departure is required</strong>
                                                    @enderror 
                                                    <div class="form-group">
                                                        {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                        <select style="width: 100%; !important" id="departureFlightSchedule"
                                                            name="departureFlightSchedule" class="form-control"
                                                            placeholder="TYPE" required>
                                                            <option value=''>Departure</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-6 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text"><i class="las la-plane-arrival mr-1"
                                                            style="font-size: 1.4rem;"></i>Flying to</label><span
                                                        style="color: red">*</span>
                                                    <div class="form-group">
                                                        <select style="width: 100%; !important" id="arrivalFlightSchedule"
                                                            name="arrivalFlightSchedule" class="form-control"
                                                            placeholder="TYPE" required>
                                                            <option value=''>Arrival</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            {{-- <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Departing - Returning</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input class="date-picker-multiple form-control" type="text"
                                                                name="daterange" readonly>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 --> --}}
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Departure Date</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class=" form-control" type="text"
                                                            name="daterange_single_status" readonly required>

                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <button type="submit"
                                                    class="theme-btn w-100 text-center margin-top-20px">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end tab-pane -->
                            </div>
                        </div><!-- end tab-pane -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        {{-- <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
            </svg> --}}
        </div>
    </section><!-- end hero-wrapper -->
    <!-- ================================
                        END HERO-WRAPPER (WIDGET) AREA
                    ================================= -->


    <!-- ================================
                        START INFO (WHY BIMAN) AREA
                    ================================= -->
    <section class="info-area info-bg padding-top-90px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Why fly Biman?</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-3 responsive-column">
                    <a target="_blank" href="https://www.airlineratings.com/ratings/biman-bangladesh-airlines/">
                        <div class="icon-box icon-layout-2 d-flex">
                            <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                                <i class="la la-plane-departure"></i>
                            </div><!-- end info-icon-->
                            <div class="info-content">
                                <h4 class="info__title">Fly in safe</h4>
                                <p class="info__desc">
                                    6 Safety Rating in 7
                                </p>
                            </div><!-- end info-content -->
                        </div><!-- end icon-box -->
                    </a> <!-- end link added by 42-->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <a target="_blank" href="#">
                        <div class="icon-box icon-layout-2 d-flex">
                            <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                                <i class="la la-plane"></i>
                            </div><!-- end info-icon-->
                            <div class="info-content">
                                <h4 class="info__title">Youngest Fleet</h4>
                                <p class="info__desc">
                                    Brand New Dreamliners
                                </p>
                            </div><!-- end info-content -->
                        </div><!-- end icon-box -->
                    </a>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <a target="_blank" href="#">
                        <div class="icon-box icon-layout-2 d-flex">
                            <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                                <i class="la la-people-carry"></i>
                            </div><!-- end info-icon-->
                            <div class="info-content">
                                <h4 class="info__title">Great Fare</h4>
                                <p class="info__desc">
                                    Maximum Benefit
                                </p>
                            </div><!-- end info-content -->
                        </div><!-- end icon-box -->
                    </a>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <a target="_blank" href="https://www.biman-airlines.com/fleet">
                        <div class="icon-box icon-layout-2 d-flex">
                            <div class="info-icon flex-shrink-0 bg-rgb-4 text-color-5">
                                <i class="la la-plane-arrival"></i>
                            </div><!-- end info-icon-->
                            <div class="info-content">
                                <h4 class="info__title">Fly in comfort</h4>
                                <p class="info__desc">
                                    Unpretentious Luxury
                                </p>
                            </div><!-- end info-content -->
                        </div><!-- end icon-box -->
                    </a>
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end info-area -->
    <!-- ================================
                        END INFO (WHY BIMAN) AREA
                    ================================= -->


    <div class="section-block"></div>


    <!-- ================================
                        START CTA (OFFER) AREA
                    ================================= -->
    <section class="cta-area padding-top-100px padding-bottom-180px text-center">
        <div class="video-bg offer-bg">
            {{-- <video autoplay loop>
                <source src="{{asset('assets/video/video-bg.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
        </video> --}}

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title text-white line-height-55">Let us show you the world <br>
                            Discover our unbelievable offers</h2>
                    </div><!-- end section-heading -->
                    <div class="btn-box padding-top-35px">
                        <a href="{{ route('offers') }}" class="theme-btn border-0">Discover More Offers</a>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </section><!-- end cta-area -->
    <!-- ================================
                    END CTA (OFFER) AREA
                ================================= -->


    <!-- ================================
                        START ROUND-TRIP (DESTINATION)  AREA
                    ================================= -->
    <section class="round-trip-flight section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">Most Popular Flight Destinations</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="flight-filter-tab text-center">
                        <div class="section-tab section-tab-3">
                            <ul class="nav nav-tabs justify-content-center" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="asia-tab" data-toggle="tab" href="#asia" role="tab"
                                        aria-controls="asia" aria-selected="false">
                                        Asia
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="domestic-tab" data-toggle="tab" href="#domestic"
                                        role="tab" aria-controls="domestic" aria-selected="false">
                                        Domestic
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="europe-tab" data-toggle="tab" href="#europe" role="tab"
                                        aria-controls="europe" aria-selected="false">
                                        Europe
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="middle-east-tab" data-toggle="tab" href="#middle-east"
                                        role="tab" aria-controls="middle-east" aria-selected="false">
                                        Middle East
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="subcontinent-tab" data-toggle="tab" href="#subcontinent"
                                        role="tab" aria-controls="subcontinent" aria-selected="false">
                                        Subcontinent
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                    </div><!-- end flight-filter-tab -->
                    <div class="popular-round-trip-wrap padding-top-40px">
                        <div class="tab-content" id="myTabContent4">
                            <div class="tab-pane fade show active" id="asia" role="tabpanel" aria-labelledby="asia-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    {{-- <a href="{{route('book-flight')}}" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Bangkok
                                                    </a> --}}
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Bangkok
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$340</span></div> --}}
                                                    <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Kuala Lumpur
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$740</span></div> --}}
                                                <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Singapore
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$140</span></div> --}}
                                                    <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Guangzhou
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$340</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>HongKong
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$100</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Chattogram<i class="la la-arrow-right mx-2"></i>Bangkok
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$640</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="domestic" role="tabpanel" aria-labelledby="domestic-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Chattogram
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$340</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Cox's Bazar
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$740</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Saidpur
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$140</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Sylhet
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$340</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Jashore
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$100</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Rajshahi
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$640</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="europe" role="tabpanel" aria-labelledby="europe-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>London
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$340</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Manchester
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$740</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Sylhet<i class="la la-arrow-right mx-2"></i>London
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$140</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Sylhet<i class="la la-arrow-right mx-2"></i>Manchester
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$340</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Chattogram<i class="la la-arrow-right mx-2"></i>London
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$100</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Chattogram<i class="la la-arrow-right mx-2"></i>Manchester
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$640</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="middle-east" role="tabpanel" aria-labelledby="middle-east-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Dubai
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$340</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Abu Dhabi
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$740</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Jeddah
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$140</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Medinah
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$340</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Muscat
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$100</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Doha
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$640</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="subcontinent" role="tabpanel"
                                aria-labelledby="subcontinent-tab">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Delhi
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$340</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Kolkata
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$740</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Chennai
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$140</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Dhaka<i class="la la-arrow-right mx-2"></i>Kathmandu
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$340</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Chattogram<i class="la la-arrow-right mx-2"></i>Kolkata
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$100</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="deal-card">
                                            <div class="deal-title d-flex align-items-center">
                                                <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                                    alt="air-line-img">
                                                <h3 class="deal__title">
                                                    <a href="#book-ticket" class="d-flex align-items-center">
                                                        Chattogram<i class="la la-arrow-right mx-2"></i>Delhi
                                                    </a>
                                                </h3>
                                            </div>
                                            {{-- <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p> --}}
                                            <div class="deal-action-box d-flex align-items-center justify-content-between">
                                                {{-- <div class="price-box d-flex align-items-center"><span
                                                        class="price__from mr-1">From</span><span
                                                        class="price__num">$640</span></div> --}}
                                                        <div class="price-box d-flex align-items-center"></div>
                                                <a href="#book-ticket" class="btn-text"><b>Book Now</b><i
                                                        class="la la-angle-right"></i></a>
                                            </div>
                                        </div><!-- end deal-card -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                            </div><!-- end tab-pane -->
                        </div><!-- end tab-content -->
                        <div class="tab-content-info d-flex justify-content-between align-items-center">
                            {{-- <p class="font-size-15"><i class="la la-question-circle mr-1"></i>Average one-way price
                                per person, taxes and fees included.</p> --}}
                                <p class="font-size-15"></p>
                            {{-- <a href="#" class="btn-text font-size-15">Discover More <i
                                    class="la la-angle-right"></i></a> --}}
                            <div class="col-lg-4">
                                <div class="btn-box btn--box text-right">
                                    <a href="{{ route('destinations') }}" class="theme-btn">All Destinations</a>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end tab-content-info -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end round-trip-flight -->
    <!-- ================================
                        END ROUND-TRIP (DESTINATION)  AREA
                    ================================= -->


    <!-- ================================
                           START BLOG AREA (NEWS)
                    ================================= -->
    {{-- <section class="blog-area padding-top-30px padding-bottom-90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">Latest News & Articles <br> You Might Like</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                @foreach ($news as $item)
                    <div class="col-lg-4 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="{{ route('image.displayImage', $item->news_image) }}" width="400" height="220"
                                    alt="" title="">
                                <!-- <div class="post-format icon-element">
                                            <i class="la la-photo"></i>
                                        </div> -->
                                <div class="card-body">
                                    <div class="post-categories">
                                        <!-- <a href="#" class="badge">Travel</a> -->
                                        <a href="#" class="badge">Press Releasse</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="{{ route('news-list') }}"
                                            class="author__title"
                                            style="font-family: 'AdorshoLipi', sans-serif;">{{ $item->news_title }}</a>
                                    </h3>
                                    <!-- <p class="card-meta">
                                                <span class="post__date"> 1 January, 2020</span>
                                                <span class="post-dot"></span>
                                                <span class="post__time">5 Mins read</span>
                                            </p> -->
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}"
                                            alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="{{ route('news-list') }}"
                                            class="author__title">{{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-4 -->
                @endforeach
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box text-center pt-4">
                        <a href="{{ route('news-list') }}" class="theme-btn">Read More Post</a>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section> --}}
    <!-- end blog-area -->

    <!-- ================================
                       END BLOG (NEWS) AREA
                ================================= -->


    <!-- ================================
                    START DESTINATION (GALLERY) AREA
                ================================= -->
    <section class="destination-area section--padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title">Featured Destinations From Dhaka</h2>
                        <p class="sec__desc pt-3">16 Countries | 25 Destinations | Great opportunities to travel | Take a
                            holiday | Visit Family | Enjoy yourself
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
                {{-- <div class="col-lg-4">
                <div class="btn-box btn--box text-right">
                    <a href="tour-grid.html" class="theme-btn">Discover More</a>
                </div>
            </div><!-- end row --> --}}
                <div class="row padding-top-50px">
                    <div class="col-lg-4">
                        <a href="{{ route('destinations-domestic') }}">
                            <div class="card-item destination-card">
                                <div class="card-img">
                                    <img src="{{ asset('assets/images/destinations/bangladesh-index.jpg') }}"
                                        alt="domestic">
                                    <span class="badge">Domestic</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Bangladesh</h3>
                                    <div class="card-rating d-flex align-items-center">
                                        {{-- <span class="ratings d-flex align-items-center mr-1">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star-o"></i>
                                        <i class="la la-star-o"></i>
                                    </span> --}}
                                        <span class="rating__text">Dhaka, Barishal, Chattogram, Cox's Bazar, Jashore,
                                            Rajshahi, Sylhet, Saidpur.</span>
                                    </div>
                                    {{-- <div class="card-price d-flex align-items-center justify-content-between">
                                    <p class="tour__text">
                                        50 Tours
                                    </p>
                                    <p>
                                        <span class="price__from">Price</span>
                                        <span class="price__num">$58.00</span>
                                    </p>
                                </div> --}}
                                </div>
                            </div><!-- end card-item -->
                        </a>
                        <a href="{{ route('destinations-subcontinent') }}">
                            <div class="card-item destination-card">
                                <div class="card-img">
                                    <img src="{{ asset('assets/images/destinations/india-index.jpg') }}"
                                        alt="subcontinent">
                                    <span class="badge">Subcontinent</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">India</h3>
                                    <div class="card-rating d-flex align-items-center">
                                        {{-- <span class="ratings d-flex align-items-center mr-1">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star-o"></i>
                                    </span> --}}
                                        <span class="rating__text">Nepal.</span>
                                    </div>
                                    {{-- <div class="card-price d-flex align-items-center justify-content-between">
                                    <p class="tour__text">
                                        50 Tours
                                    </p>
                                    <p>
                                        <span class="price__from">Price</span>
                                        <span class="price__num">$68.00</span>
                                    </p>
                                </div> --}}
                                </div>
                            </div><!-- end card-item -->
                        </a>
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-4">
                        <a href="{{ route('destinations-middle-east') }}">
                            <div class="card-item destination-card">
                                <div class="card-img">
                                    <img src="{{ asset('assets/images/destinations/dubai-index.jpg') }}"
                                        alt="middle-east">
                                    <span class="badge">Middle East</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">United Arab Emirates</h3>
                                    <div class="card-rating d-flex align-items-center">
                                        <span class="rating__text">Qatar, Saudi Arabia, Kuwait, Oman.</span>
                                    </div>
                                    {{-- <div class="card-price d-flex align-items-center justify-content-between">
                                    <p class="tour__text">
                                        150 Tours
                                    </p>
                                    <p>
                                        <span class="price__from">Price</span>
                                        <span class="price__num">$79.00</span>
                                        <span class="price__num before-price">$89.00</span>
                                    </p>
                                </div> --}}
                                </div>
                            </div><!-- end card-item -->
                        </a>
                        <a href="{{ route('destinations-asia') }}">
                            <div class="card-item destination-card">
                                <div class="card-img">
                                    <img src="{{ asset('assets/images/destinations/singapore-index.jpg') }}" alt="asia">
                                    <span class="badge">Asia</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Singapore</h3>
                                    <div class="card-rating d-flex align-items-center">
                                        {{-- <span class="ratings d-flex align-items-center mr-1">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star-o"></i>
                                    </span> --}}
                                        <span class="rating__text">Thailand, China, Malaysia.</span>
                                    </div>
                                    {{-- <div class="card-price d-flex align-items-center justify-content-between">
                                    <p class="tour__text">
                                        50 Tours
                                    </p>
                                    <p>
                                        <span class="price__from">Price</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div> --}}
                                </div>
                            </div><!-- end card-item -->
                        </a>
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-4">
                        <a href="{{ route('destinations-europe') }}">
                            <div class="card-item destination-card">
                                <div class="card-img">
                                    <img src="{{ asset('assets/images/destinations/london-index.jpg') }}" alt="europe">
                                    <span class="badge">Europe</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">England</h3>
                                    <div class="card-rating d-flex align-items-center">
                                        {{-- <span class="ratings d-flex align-items-center mr-1">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span> --}}
                                        <span class="rating__text">London, Manchester.</span>
                                    </div>
                                    {{-- <div class="card-price d-flex align-items-center justify-content-between">
                                    <p class="tour__text">
                                        50 Tours
                                    </p>
                                    <p>
                                        <span class="price__from">Price</span>
                                        <span class="price__num">$58.00</span>
                                    </p>
                                </div> --}}
                                </div>
                            </div>
                        </a>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end destination-area -->
    <!-- ================================
                    END DESTINATION (GALLERY) AREA
                ================================= -->


    <!-- ================================
                        START HOTEL (NEW NEWS AREA) AREA
                    ================================= -->
    <section class="hotel-area section-bg section-padding overflow-hidden padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">Latest News & Articles <br> You Might Like</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="hotel-card-wrap">
                        <div class="hotel-card-carousel carousel-action">
                            @foreach ($news as $item)
                                <div class="card-item mb-0">
                                    <div class="card-img">
                                        <a href="hotel-single.html" class="d-block">
                                            <img src="{{ route('image.displayImage', $item->news_image) }}" width="400"
                                                height="220" alt="" title="">
                                            {{-- <img src="{{asset('assets/images/img1.jpg')}}" alt="hotel-img"> --}}
                                        </a>
                                        <span class="badge">{{ $item->news_category }}</span>
                                        {{-- <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                            title="Bookmark">
                                            <i class="la la-heart-o"></i>
                                        </div> --}}
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="{{ route('news-list') }}"
                                                class="author__title"
                                                style="font-family: 'AdorshoLipi', sans-serif;">{{ $item->news_title }}</a>
                                        </h3>
                                        {{-- <p class="card-meta">124 E Huron St, New york</p> --}}
                                        <div class="card-rating">
                                            <span
                                                class="badge text-white">{{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}</span>
                                            {{-- <span class="review__text">Average</span>
                                            <span class="rating__text">(30 Reviews)</span> --}}
                                        </div>
                                        <div class="card-price d-flex align-items-center justify-content-between">
                                            {{-- <p>
                                                <span class="price__from">From</span>
                                                <span class="price__num">$88.00</span>
                                                <span class="price__text">Per night</span>
                                            </p> --}}
                                            <a href="hotel-single.html" class="btn-text">See details<i
                                                    class="la la-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                            @endforeach
                        </div><!-- end hotel-card-carousel -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="btn-box text-center pt-4">
                                    <a href="{{ route('news-list') }}" class="theme-btn">Read More News</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </section><!-- end hotel-area -->
    <!-- ================================
                        END HOTEL (TRAVEL ADVISORY) AREA
                    ================================= -->


    <!-- ================================
                           START TESTIMONIAL (REVIEW) AREA
                    ================================= -->
    <section class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h2 class="sec__title line-height-50">What our customers are saying us?</h2>
                        <p class="sec__desc padding-top-30px">
                            We value your comments
                        </p>
                        <div class="btn-box padding-top-35px">
                            <a href="#" class="theme-btn">Explore All</a>
                        </div>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="testimonial-carousel carousel-action">
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">I flew Dhaka to Bangkok on 27 August 2019 with Biman Bangladesh
                                    Airlines. Good food,
                                    good seating and comparatively better ground services. Staff on board are just OK
                                    though. Ground staff should be more courteous. My last travel ticket price was high
                                    though.</p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/team8.jpg') }}" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Ziauddin Ahmed</h4>
                                    <span class="author__meta">Bangladesh</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">Biman Bangladesh have significantly improved recently with six
                                    new 787 aircraft in a
                                    year. The flights was smooth, ontime, and the people are good. the foods are tasty but
                                    spicy. for entertainment they need to improve.</p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/team9.jpg') }}" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Richard Pam</h4>
                                    <span class="author__meta">Canada</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">It was really brilliant to fly on Boeing 787. It has WiFi, food
                                    delicious but spicy.
                                    Crew are kind and friendly with my family. I will again fly on Biman Bangladesh.</p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/team10.jpg') }}" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Luke Jacobs</h4>
                                    <span class="author__meta">Australia</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">This is my last journey from Dhaka to London. Biman has upgraded
                                    their service than
                                    previous. Me and my family are highly pleased with their services from the counter to
                                    until the flight arrival at London.
                                    The employees are very supportive and friendly. </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="{{ asset('assets/images/team8.jpg') }}" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Mizan Sinha</h4>
                                    <span class="author__meta">Italy</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end testimonial-card -->
                    </div><!-- end testimonial-carousel -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end testimonial-area -->
    <!-- ================================
                           END TESTIMONIAL (REVIEW) AREA
                    ================================= -->


    <!-- ================================
                        START MOBILE (MOBILE APP) AREA
                    ================================= -->
    {{-- <section class="mobile-app padding-top-100px padding-bottom-50px section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-55">Trizen Android and IOS App is Available!</h2>
                        </div><!-- end section-heading -->
                        <ul class="info-list padding-top-30px">
                            <li class="d-flex align-items-center mb-3"><span
                                    class="la la-check icon-element flex-shrink-0 ml-0"></span> Access and change your
                                itinerary on-the-go</li>
                            <li class="d-flex align-items-center mb-3"><span
                                    class="la la-check icon-element flex-shrink-0 ml-0"></span> Free cancellation on
                                select hotels</li>
                            <li class="d-flex align-items-center mb-3"><span
                                    class="la la-check icon-element flex-shrink-0 ml-0"></span> Get real-time trip updates
                            </li>
                        </ul>
                        <div class="btn-box padding-top-30px">
                            <a href="#" class="d-inline-block mr-3">
                                <img src="{{ asset('assets/images/app-store.png') }}" alt="">
                            </a>
                            <a href="#" class="d-inline-block">
                                <img src="{{ asset('assets/images/google-play.png') }}" alt="">
                            </a>
                        </div><!-- end btn-box -->
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="mobile-img">
                        <img src="{{ asset('assets/images/mobile-app.png') }}" alt="mobile-img">
                    </div>
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end mobile-app --> --}}
    <!-- ================================
                        END MOBILE (MOBILE APP) AREA
                    ================================= -->


    <!-- ================================
                           START CLIENTLOGO (PARTNERS) AREA
                    ================================= -->
    <section class="clientlogo-area padding-top-80px padding-bottom-80px text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-logo">
                        {{-- <div class="client-logo-item">
                            <img src="{{ asset('assets/images/Boeing-Logo.png') }}" alt="brand image">
                        </div><!-- end client-logo-item --> --}}
                        <div class="client-logo-item">
                            <img src="{{ asset('assets/images/logo/Bimanlogo.jpg') }}" alt="Biman Logo">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="{{ asset('assets/images/logo/50year-logo.png') }}" alt="50 Year Logo">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="{{ asset('assets/images/logo/Mujiblogo.png') }}" alt="Mujib 100 Year Logo">
                        </div><!-- end client-logo-item -->
                        {{-- <div class="client-logo-item">
                            <img src="{{ asset('assets/images/sabre-logo.jpg') }}" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="{{ asset('assets/images/logo/biman_red_logo.jpg') }}" alt="brand image">
                        </div><!-- end client-logo-item --> --}}
                        {{-- <div class="client-logo-item">
                            <img src="{{ asset('assets/images/client-logo4.png') }}" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="{{ asset('assets/images/client-logo5.png') }}" alt="brand image">
                        </div><!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="{{ asset('assets/images/client-logo6.png') }}" alt="brand image">
                        </div><!-- end client-logo-item --> --}}
                    </div><!-- end client-logo -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end clientlogo-area -->
    <!-- ================================
                           END CLIENTLOGO (PARTNERS) AREA
                    ================================= -->


@endsection


@section('page-specific-footer')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('assets/js/customJs/searchWidget.js') }}"></script>
    <script src="{{ asset('assets/js/customJs/adultChildSum.js') }}"></script>
    <script src="{{ asset('assets/js/customJs/searchWidgetDestination.js') }}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    {{-- slider --}}
    <script src="{{ asset('assets/js/superslider-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.superslides.min.js') }}"></script>
    {{-- slider --}}

    <script>
        $("#depart2").select2({
            placeholder: "Select Departure City or Airport",
            templateResult: formatOutput,
            templateSelection: formatOutputTwo
        });
        $("#arriv2").select2({
            placeholder: "Select Departure City or Airport",
            templateResult: formatOutput,
            templateSelection: formatOutputTwo
        });
    </script>
    <script>
        $('input[name="daterange_single"]').daterangepicker({
            singleDatePicker: true,
            minDate: new Date(),
        });
        $('input[name="daterange_single_status"]').daterangepicker({
            singleDatePicker: true,
            minDate: new Date(),
        });
    </script>
    <script>
        $('input[name="daterange_round"]').daterangepicker({
            // locale: {
            //     format: 'DD/MM/YYYY'
            // },
            minDate: new Date(),
        });
    </script>



    <script>
        // let apiKey = 'd9e53816d07345139c58d0ea733e3870';
        //     $.getJSON('https://api.bigdatacloud.net/data/ip-geolocation?key=' + apiKey, function(data) {
        //     console.log(JSON.stringify(data, null, 2));
        //     document.getElementById("point_of_sales1").value = data.country.isoAlpha2;
        //     document.getElementById("point_of_sales2").value = data.country.isoAlpha2;
        // });
        // Base + Confidence Area
        let apiKey = '983074f7fe1e4fb0ad6d2ebf2c0f2f1b';
        $.getJSON('https://api.bigdatacloud.net/data/ip-geolocation-with-confidence?key=' + apiKey, function(data) {
            console.log(JSON.stringify(data, null, 2));
            document.getElementById("point_of_sales1").value = data.country.isoAlpha2;
            document.getElementById("point_of_sales2").value = data.country.isoAlpha2;
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#btnShowFlights").click(function() {
                //disable button
                // $(this).prop("disabled", true);
            // add spinner to button
            var chk = $('#departure1').find(':selected').data('custom-attribute');
            console.log(chk);
            
                $(this).html(
                    `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Searching...`
                );
            });
        });
    </script>

@endsection
