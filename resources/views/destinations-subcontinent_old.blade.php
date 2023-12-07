
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
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-subcontinent">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content text-center">
                        <div class="hero-content pb-5 text-center">
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
                        </div>
                        <span class="arrow-blink">
                            <i class="la la-arrow-down"></i>
                        </span>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-wrap margin-bottom-40px">
                    <div class="filter-top d-flex align-items-center justify-content-between">
                        <div class="section-tab section-tab-3">
                            <ul class="nav nav-tabs" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    {{-- <a class="nav-link active" id="Domestic-tab" data-toggle="tab" href="#domestic" role="tab" aria-controls="domestic" aria-selected="false">
                                        Domestic
                                    </a> --}}
                                    <a class="nav-link" id="Domestic-tab" href="{{route('destinations-domestic')}}">
                                        Domestic
                                    </a>
                                    
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link" id="asia-tab" data-toggle="tab" href="#asia" role="tab" aria-controls="asia" aria-selected="false">
                                        Asia
                                    </a> --}}
                                    <a class="nav-link" id="asia-tab"  href="{{route('destinations-asia')}}">
                                        Asia
                                    </a>
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link" id="europe-tab" data-toggle="tab" href="#europe" role="tab" aria-controls="europe" aria-selected="false">
                                        Europe
                                    </a> --}}
                                    <a class="nav-link" id="europe-tab" href="{{route('destinations-europe')}}">
                                        Europe
                                    </a>
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link" id="middle-east-tab" data-toggle="tab" href="#middle-east" role="tab" aria-controls="middle-east" aria-selected="false">
                                        Middle East
                                    </a> --}}
                                    <a class="nav-link" id="middle-east-tab" href="{{route('destinations-middle-east')}}">
                                        Middle East
                                    </a>
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link" id="subcontinent-tab" data-toggle="tab" href="#subcontinent" role="tab" aria-controls="subcontinent" aria-selected="false">
                                        Subcontinent
                                    </a> --}}
                                    <a class="nav-link active" id="subcontinent-tab" href="{{route('destinations-subcontinent')}}">
                                        Subcontinent
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                        {{-- <div class="layout-view d-flex align-items-center">
                            <a href="{{route('destinations-grid')}}" data-toggle="tooltip" data-placement="top" title="Grid View" class="active"><i class="la la-th-large"></i></a>
                            <a href="{{route('destinations-list')}}" data-toggle="tooltip" data-placement="top" title="List View"><i class="la la-th-list"></i></a>
                        </div> --}}
                    </div>
                    <div class="margin-top-20px">
                        {{-- * Fares given here are including TAX. These fares may change for various reasons. <br> --}}
                        {{-- * Fares are calculated from Hazrat Shahjalal Intl Airport, Dhaka, Bangladesh. <br> --}}
                        <!--Enjoy 10% DISCOUNT on base fare for bKash and card payment. Biman ensures you to provide the best ticket price in any routes. <br>-->
                        <!--N.B. Flight schedule may change. Please contact with Biman Call Center. <i class="la la-mobile" style="font-size:1.2rem"></i><b>+8801990997997</b> <i class="la la-envelope" style="font-size:1.2rem"></i> <b>sms@bdbiman.com</b>-->
                        {{-- N.B. Flight schedule may change. Please contact with Biman Call Center. mob: <b>+8801990997997</b> mail: <b>sms@bdbiman.com</b> --}}
                    </div>
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="tab-content" id="may-tabContent4">
            
            <div class="tab-pane fade show active" id="subcontinent" role="tabpanel" aria-labelledby="subcontinent-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/chennai-grid-1.jpg')}}" alt="chennai-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="{{asset('assets/images/destinations/bangladesh-index.jpg')}}" alt="hotel-img">
                                    </a> --}}
                                </div>
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/chennai-grid-2.jpg')}}" alt="chennai-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="images/img29.jpg" alt="hotel-img">
                                    </a> --}}
                                </div>
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/chennai-grid-3.jpg')}}" alt="chennai-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="images/img30.jpg" alt="hotel-img">
                                    </a> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                {{-- <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">Fare Starts From</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div> --}}
                                <h3 class="card-title font-size-26">Chennai</h3>
                                {{-- <p class="card-text pt-2">Chennai is the capital of the Indian state of Tamil Nadu. Located on the coromandel coast of the bay of Bengal, it is one of the largest cultural, economic. The city is home to fort st. George, built in 1644 and now a museum showcasing the city’s roots as a british military garrison and east india company trading outpost.</p> --}}
                                <div class="card-attributes pt-3 pb-4">
                                    City in India
                                    {{-- <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-plane"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul> --}}
                                </div>
                                <div class="card-btn">
                                    <a href="#book-now" class="theme-btn theme-btn-transparent-destination">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/delhi-grid-1.jpg')}}" alt="delhi-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="{{asset('assets/images/destinations/bangladesh-index.jpg')}}" alt="hotel-img">
                                    </a> --}}
                                </div>
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/delhi-grid-2.jpg')}}" alt="delhi-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="images/img29.jpg" alt="hotel-img">
                                    </a> --}}
                                </div>
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/delhi-grid-3.jpg')}}" alt="delhi-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="images/img30.jpg" alt="hotel-img">
                                    </a> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                {{-- <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">Fare Starts From</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div> --}}
                                <h3 class="card-title font-size-26">Delhi</h3>
                                {{-- <p class="card-text pt-2">Delhi officially known as the national capital territory (nct). Delhi is a city and a union territory of India containing new Delhi, the capital of India. In old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era red fort, a symbol of India, and the sprawling Jama masjid mosque.</p> --}}
                                <div class="card-attributes pt-3 pb-4">
                                    Capital of India
                                    {{-- <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-plane"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul> --}}
                                </div>
                                <div class="card-btn">
                                    <a href="#book-now" class="theme-btn theme-btn-transparent-destination">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/kathmandu-grid-1.jpg')}}" alt="kathmandu-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="{{asset('assets/images/destinations/bangladesh-index.jpg')}}" alt="hotel-img">
                                    </a> --}}
                                </div>
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/kathmandu-grid-2.jpg')}}" alt="kathmandu-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="images/img29.jpg" alt="hotel-img">
                                    </a> --}}
                                </div>
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/kathmandu-grid-3.jpg')}}" alt="kathmandu-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="images/img30.jpg" alt="hotel-img">
                                    </a> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                {{-- <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">Fare Starts From</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div> --}}
                                <h3 class="card-title font-size-26">Kathmandu</h3>
                                {{-- <p class="card-text pt-2">Welcome to the capital of Nepal, Kathmandu. More than 93 languages and dialects are spoken by Nepal's 30,000 people so it's common to hear a peppering of varied vocabularies throughout Kathmandu. Whatever brings you here, be sure to find the world heritage-listed durbar square: 3 remaining squares of the city's finest traditional architecture.</p> --}}
                                <div class="card-attributes pt-3 pb-4">
                                    Capital of Nepal
                                    {{-- <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-plane"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul> --}}
                                </div>
                                <div class="card-btn">
                                    <a href="#book-now" class="theme-btn theme-btn-transparent-destination">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/kolkata-grid-1.jpg')}}" alt="kolkata-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="{{asset('assets/images/destinations/bangladesh-index.jpg')}}" alt="hotel-img">
                                    </a> --}}
                                </div>
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/kolkata-grid-2.jpg')}}" alt="kolkata-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="images/img29.jpg" alt="hotel-img">
                                    </a> --}}
                                </div>
                                <div class="card-img">
                                    <img src="{{asset('assets/images/destinations/kolkata-grid-3.jpg')}}" alt="kolkata-img">
                                    {{-- <a href="room-details.html" class="d-block">
                                        <img src="images/img30.jpg" alt="hotel-img">
                                    </a> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                {{-- <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">Fare Starts From</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div> --}}
                                <h3 class="card-title font-size-26">Kolkata</h3>
                                {{-- <p class="card-text pt-2">Kolkata is the capital of the Indian state of West Bengal. Located on the east bank of the Hooghly river, it is the principal commercial, cultural, and educational centre of east India, while the port of Kolkata is India's oldest operating port as well as its sole major riverine port.</p> --}}
                                <div class="card-attributes pt-3 pb-4">
                                    City in India
                                    {{-- <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-plane"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul> --}}
                                </div>
                                <div class="card-btn">
                                    <a href="#book-now" class="theme-btn theme-btn-transparent-destination">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->

                </div><!-- end row -->
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-4 text-center">
                    <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                    <p class="font-size-13 pt-2">Showing 1 - 6 of 124 Rooms</p>
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row --> --}}
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->

<!-- ================================
    START CHECK AVAILABILITY AREA
================================= -->
<section class="check-availability-area section-bg section-padding" id="book-now">
    <div class="container">
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
                                        <option value="premiumEconomy">Premium Economy</option>
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
                                    <span
                                        class="badge badge-danger">{{ $errors->first('departure2') }}</span>
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
                                    <span
                                        class="badge badge-danger is-error">{{ $errors->first('arrival2') }}</span>
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
                                            <option value="premiumEconomy">Premium Economy</option>
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
                    <div id="contents"
                        class="contact-form-action multi-flight-field d-flex align-items-center">
                        {{-- <form action="#" class="row flex-grow-1 align-items-center"> --}}
                        <div class="col-lg-4 pr-0">
                            <div class="input-box">
                                <label class="label-text">Flying from</label>
                                {{-- <select class="js-example-basic-single" name="state">
                                    <option value="AL">Alabama</option>
                                    
                                    <option value="WY">Wyoming</option>
                                </select> --}}
                                <select style="width: 100%; !important" id="depart" name="depart"
                                    class="js-example-basic-single" placeholder="TYPE">
                                    <option value=''>Departure</option>
                                </select>
                            </div>
                        </div><!-- end col-lg-3 -->
                        <div class="col-lg-4 pr-0">
                            <div class="input-box">
                                <label class="label-text">Flying to</label>
                                <select style="width: 100%; !important" id="arriv" name="arriv"
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
                    <div class="contact-form-action multi-flight-field d-flex align-items-center">

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
    </div><!-- end container -->
</section><!-- end check-availability-area -->
<!-- ================================
    END CHECK AVAILABILITY AREA
================================= -->



@endsection



@section('page-specific-footer')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('assets/js/customJs/searchWidget.js') }}"></script>
    <script src="{{ asset('assets/js/customJs/adultChildSum.js') }}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

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

    <script src="{{ asset('assets/js/customJs/searchWidgetDestination.js') }}"></script>

    <script>
        // let apiKey = 'd9e53816d07345139c58d0ea733e3870';
        //     $.getJSON('https://api.bigdatacloud.net/data/ip-geolocation?key=' + apiKey, function(data) {
        //     console.log(JSON.stringify(data, null, 2));
        //     document.getElementById("point_of_sales1").value = data.country.isoAlpha2;
        //     document.getElementById("point_of_sales2").value = data.country.isoAlpha2;
        // });
        // Base + Confidence Area
            let apiKey = 'd9e53816d07345139c58d0ea733e3870';
            $.getJSON('https://api.bigdatacloud.net/data/ip-geolocation-with-confidence?key=' + apiKey, function(data) {
            console.log(JSON.stringify(data, null, 2));
            document.getElementById("point_of_sales1").value = data.country.isoAlpha2;
            document.getElementById("point_of_sales2").value = data.country.isoAlpha2;
        });
    </script>
    
@endsection
