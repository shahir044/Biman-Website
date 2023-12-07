@extends('header-footer')

@section('header-extension')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .modal-popup .modal-header, .modal-popup .modal-body, .modal-popup .modal-footer {
            padding: 0.3rem !important;
        }
        .theme-btn:hover {
            transform: scale(0.97);
        }
        button[disabled=disabled], button:disabled{
            pointer-events: none; /* Prevent clicking on the disabled button */
            opacity: 0.6; /* Reduce opacity to make it appear disabled */
            background-color: #cccccc;
            color: #666666;
        }
        .hero-background{
            background-image: url("/assets/images/hero/hero-bg2.jpg");
        }
    </style>
@endsection

@section('content')
    <!-- ======================================
            START HERO-WRAPPER (WIDGET) AREA
        ======================================= -->
        <section class="hero-wrapper hero-wrapper5">
            <div class="hero-box pb-5 hero-background">
                <div class="container pb-3 padding-top-100px">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tab text-center" id="book-ticket">
                                <ul class="nav nav-tabs custom-widget-ul" id="myTab" role="tablist">
                                    <li class="nav-item custom-widget-li">
                                        <a class="nav-link d-flex align-items-center active" id="flight-tab"
                                           data-toggle="tab"
                                           href="#flight" role="tab" aria-controls="flight" aria-selected="true">
                                            <i class="la la-plane mr-1"></i><span class="d-none d-sm-block" id="oneway_text">Book Flight</span>
                                        </a>
                                    </li>
                                    <li class="nav-item custom-widget-li">
                                        <a class="nav-link d-flex align-items-center" id="manage-booking-tab"
                                           data-toggle="tab"
                                           href="#manage-booking" role="tab" aria-controls="manage-booking"
                                           aria-selected="false">
                                            <i class="las la-suitcase mr-1"></i><span class="d-none d-sm-block" id="checktrip_text">Modify Trip <span
                                            class="badge badge-danger ml-1"> New</span></span>
                                        </a>
                                    </li>
                                    <li class="nav-item custom-widget-li">
                                    <li class="nav-item custom-widget-li">
                                        <a class="nav-link d-flex align-items-center" id="check-in-tab" data-toggle="tab"
                                           href="#check-in" role="tab" aria-controls="check-in"
                                           aria-selected="false">
                                            <i class="fa fa-check-circle mr-1"></i><span class="d-none d-sm-block" id="checkin_text">Web Check-in</span>
                                        </a>
                                    </li>
                                    <li class="nav-item custom-widget-li">
                                        <a class="nav-link d-flex align-items-center" id="flight-status-tab"
                                           data-toggle="tab"
                                           href="#flight-status" role="tab" aria-controls="flight-status"
                                           aria-selected="false">
    
                                            <i class="las la-info-circle mr-1"></i><span class="d-none d-sm-block" id="flightstatus_text">Flight
                                        Status</span>
                                        </a>
                                    </li>
                                    <li class="nav-item custom-widget-li">
                                        <a class="nav-link d-flex align-items-center" id="flight-schedule-tab"
                                           data-toggle="tab"
                                           href="#flight-schedule" role="tab" aria-controls="flight-schedule"
                                           aria-selected="false">
                                            <i class="las la-clock mr-1"></i><span class="d-none d-sm-block" id="flightschedule_text">Flight
                                        Schedule</span>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end section-tab -->
                            <div class="tab-content search-fields-container" id="myTabContent">
                                <div class="tab-pane fade show active" id="flight" role="tabpanel"
                                     aria-labelledby="flight-tab">
                                    <div class="section-tab section-tab-3">
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
                                                <a class="nav-link" id="multi-city-tab" data-toggle="tab"
                                                   href="#multi-city" role="tab" aria-controls="multi-city"
                                                   aria-selected="false">
                                                    Multi-city
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end section-tab -->
                                    <div class="tab-content" id="myTabContent3">
                                        <div class="tab-pane fade" id="one-way" role="tabpanel"
                                             aria-labelledby="one-way-tab">
                                            <div class="contact-form-action search-input-group-wrap">
                                                <form id="form" method="get" action="{{ route('flight-oneWay') }}"
                                                      class="row align-items-center" onsubmit="setLoading(event)">
                                                    @csrf
                                                    <div class="col-lg-6 pr-0">
                                                        <div id="oneway_search"
                                                             class="d-flex align-items-center search-input-group">
                                                            <div style="flex: 2"
                                                                 class="input-box flex-grow-1 prepend-input-box">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select basic-single"
                                                                            style="width: 100%" id="departure1"
                                                                            name="departure1"
                                                                            class="form-control form-select"
                                                                            placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Departure City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                        <option value=''>Departure City or Airport</option>
                                                                    </select>
                                                                    <label for="departure1" class="form-label">Flying
                                                                        From</label>
                                                                </div>
                                                            </div>
                                                            <div style="flex: 2"
                                                                 class="input-box flex-grow-1 append-input-box">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select basic-single"
                                                                            style="width: 100%" id="arrival1"
                                                                            name="arrival1" class="form-control"
                                                                            placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Arrival City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                        <option value=''>Arrival City or Airport</option>
                                                                    </select>
                                                                    <label for="arrival1" class="form-label">Flying
                                                                        To</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-6 -->
                                                    <div class="col-lg-2 pr-0">
                                                        <div class="d-flex align-items-center search-input-group">
                                                            <div class="input-box flex-grow-1">
                                                                <div class="form-group form-floating">
                                                                    <input class="date-range form-control prepend-input"
                                                                           id="departingDate" name="daterange_single"
                                                                           placeholder="Departure" type="text" required
                                                                           readonly>
                                                                    <label class="label-text">Departure</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-2 pr-0">
                                                        <div class="input-box">
                                                            <div class="form-group form-floating">
                                                                <div class="dropdown dropdown-contain gty-container">
                                                                    <a class="dropdown-toggle dropdown-btn" href="#"
                                                                       role="button" data-toggle="dropdown"
                                                                       aria-expanded="false">
                                                                        <span class="adult" data-text="Adult"
                                                                              data-text-multi="Adults">0 Adult</span>
                                                                        -
                                                                        <span class="children" data-text="Child"
                                                                              data-text-multi="Children">0 Child</span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-wrap">
                                                                        <div class="dropdown-item">
                                                                            <div
                                                                                class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label data-toggle="tooltip" data-placement="top" title="Total Adult and Children must be less than 10">Adults
                                                                                    <i class="la la-info-circle"></i>
                                                                                    <span>from 12 year</span></label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec" id="qtyDecId11">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input class="adult" type="text"
                                                                                           name="adult_number" value="1"
                                                                                           required
                                                                                           readonly>
                                                                                    <div class="qtyInc" id="qtyIncId11">
                                                                                        <i class="la la-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div
                                                                                class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Children
                                                                                    <span>2 to 11 year</span></label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input class="children" type="text"
                                                                                           name="child_number" value="0"
                                                                                           required
                                                                                           readonly>
                                                                                    <div class="qtyInc" id="qtyIncId22">
                                                                                        <i class="la la-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label data-toggle="tooltip" data-placement="top" title="Number of infant must be less than 3 and not more than adult passengers">Infant
                                                                                    <i class="la la-info-circle"></i>
                                                                                    <span>0-1 year</span></label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDecInf">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text" name="infants_number"
                                                                                           value="0" class="infant"
                                                                                           readonly required>
                                                                                    <div class="qtyIncInf">
                                                                                        <i class="la la-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--MODIFIED-->
                                                                            <hr style="margin-top: 0.3rem; margin-bottom: 0.3rem;">
                                                                            <div class="input-box">
                                                                                <span class="label-text text-color-6">Choose Class:</span>
                                                                                <div
                                                                                    class="form-group d-flex align-items-center">
                                                                                    <label for="radio-16"
                                                                                           class="radio-trigger mb-0 font-size-14 mr-3">
                                                                                        <input type="radio" id="radio-16"
                                                                                               name="cabin" value="Economy"
                                                                                               checked>
                                                                                        <span class="checkmark"></span>
                                                                                        <span>All</span>
                                                                                    </label>
                                                                                    <label for="radio-17"
                                                                                           class="radio-trigger mb-0 font-size-14 mr-3">
                                                                                        <input type="radio" id="radio-17"
                                                                                               name="cabin"
                                                                                               value="PremiumEconomy">
                                                                                        <span class="checkmark"></span>
                                                                                        <span>Premium Economy</span>
                                                                                    </label>
                                                                                    <label for="radio-18"
                                                                                           class="radio-trigger mb-0 font-size-14">
                                                                                        <input type="radio" id="radio-18"
                                                                                               name="cabin"
                                                                                               value="Business">
                                                                                        <span class="checkmark"></span>
                                                                                        <span>Business</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end dropdown -->
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-md-2">
                                                        <div class="form-group form-floating">
                                                            <input class="form-control" type="text" id="promo_code"
                                                                   name="promo_code" placeholder="Write Promo Code">
                                                            <label class="label-text">Promo Code</label>
                                                        </div>
                                                    </div>
                                                    {{--<div class="col-md-2">
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="miles1" name="miles1">
                                                            <label for="miles1">Book with miles</label>
                                                        </div>
                                                    </div>--}}
                                                    <div class="col-md-12 pr-0 pt-0" style="float:right;">
                                                        <div class="col-lg-2" style="float: right">
                                                            <button id="btnShowFlights" type="submit" href="#"
                                                                    class="theme-btn w-100 text-center"><i class="fa fa-paper-plane" aria-hidden="true"></i> Search
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <input type="text" id="point_of_sales1" name="point_of_sales1" hidden>
                                                    <input type="text" id="source1" name="source1" value="" hidden>
                                                </form>
                                            </div>
                                        </div><!-- end tab-pane [one-way] -->
                                        <div class="tab-pane fade show active" id="round-trip" role="tabpanel"
                                             aria-labelledby="round-trip-tab">
                                            <div class="contact-form-action search-input-group-wrap">
                                                <form id="form1" method="get" action="{{ route('flightRoundTrip') }}"
                                                      class="row align-items-center" onsubmit="setLoading(event)">
                                                    @csrf
                                                    <div class="col-lg-5 pr-0">
                                                        <div id="round_search"
                                                             class="d-flex align-items-center search-input-group">
                                                            <div style="flex: 2"
                                                                 class="input-box flex-grow-1 prepend-input-box">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select basic-single"
                                                                            style="width: 100%" id="departure2"
                                                                            name="departure2"
                                                                            class="form-control form-select"
                                                                            placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Departure City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                        <option value=''>Departure City or Airport</option>
                                                                    </select>
                                                                    <label for="departure2" class="form-label">Flying
                                                                        From</label>
                                                                </div>
                                                            </div>
                                                            <div style="flex: 2"
                                                                 class="input-box flex-grow-1 append-input-box">
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select basic-single"
                                                                            style="width: 100%" id="arrival2"
                                                                            name="arrival2" class="form-control"
                                                                            placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Arrival City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                        <option value=''>Arrival City or Airport</option>
                                                                    </select>
                                                                    <label for="arrival2" class="form-label">Flying
                                                                        To</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-5 -->
                                                    <div class="col-lg-3 pr-0">
                                                        <div class="d-flex align-items-center search-input-group">
                                                            <div class="input-box flex-grow-1">
                                                                <div class="form-group form-floating">
                                                                    <input class="date-range form-control prepend-input"
                                                                           id="departingDateRound"
                                                                           placeholder="Departure" type="text"
                                                                           name="daterange_round" required readonly>
                                                                    <label class="label-text">Departure</label>
                                                                </div>
                                                            </div>
                                                            <div class="input-box flex-grow-1">
                                                                <div class="form-group form-floating">
                                                                    <input class="date-range form-control append-input"
                                                                           id="departingDateRoundTwo"
                                                                           placeholder="Returning" type="text"
                                                                           name="daterange_round_two" required readonly>
                                                                    <label class="label-text">Return</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col-lg-3 -->
                                                    <div class="col-lg-2 pr-0">
                                                        <div class="input-box">
                                                            <!--                                                <label class="label-text">Passengers/Bikes</label>-->
                                                            <div class="form-group form-floating">
                                                                <div class="dropdown dropdown-contain gty-container">
                                                                    <a class="dropdown-toggle dropdown-btn" href="#"
                                                                       role="button" data-toggle="dropdown"
                                                                       aria-expanded="false">
                                                                        <span class="adult" data-text="Adult"
                                                                              data-text-multi="Adults">0 Adult</span>
                                                                        -
                                                                        <span class="children" data-text="Child"
                                                                              data-text-multi="Children">0 Child</span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-wrap">
                                                                        <div class="dropdown-item">
                                                                            <div
                                                                                class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label data-toggle="tooltip" data-placement="top" title="Total Adult and Children must be less than 10">Adults
                                                                                        <i class="la la-info-circle"></i>
                                                                                    <span>from 12 year</span></label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec" id="qtyDecId21">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input class="adult" type="text"
                                                                                           name="adult_number" value="1"
                                                                                           required
                                                                                           readonly>
                                                                                    <div class="qtyInc" id="qtyIncId21">
                                                                                        <i class="la la-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div
                                                                                class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Children
                                                                                    <span>2 to 11 year</span></label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input class="children" type="text"
                                                                                           name="child_number" value="0"
                                                                                           required
                                                                                           readonly>
                                                                                    <div class="qtyInc" id="qtyIncId22">
                                                                                        <i class="la la-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div
                                                                                class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label data-toggle="tooltip" data-placement="top" title="Number of infant must be less than 3 and not more than adult passengers">Infant
                                                                                    <i class="la la-info-circle"></i>
                                                                                    <span>0-1 year</span></label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDecInf">
                                                                                        <i class="la la-minus"></i>
                                                                                    </div>
                                                                                    <input type="text" name="infants_number"
                                                                                           value="0" class="infant"
                                                                                           readonly required>
                                                                                    <div class="qtyIncInf">
                                                                                        <i class="la la-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--MODIFIED-->
                                                                            <hr style="margin-top: 0.3rem; margin-bottom: 0.3rem;">
                                                                            <div class="input-box">
                                                                                <span class="label-text text-color-6">Choose Class:</span>
                                                                                <div
                                                                                    class="form-group d-flex align-items-center">
                                                                                    <label for="radio-13"
                                                                                           class="radio-trigger mb-0 font-size-14 mr-3">
                                                                                        <input type="radio" id="radio-13"
                                                                                               name="cabin" value="Economy"
                                                                                               checked>
                                                                                        <span class="checkmark"></span>
                                                                                        <span>All</span>
                                                                                    </label>
                                                                                    <label for="radio-14"
                                                                                           class="radio-trigger mb-0 font-size-14 mr-3">
                                                                                        <input type="radio" id="radio-14"
                                                                                               name="cabin"
                                                                                               value="PremiumEconomy">
                                                                                        <span class="checkmark"></span>
                                                                                        <span>Premium Economy</span>
                                                                                    </label>
                                                                                    <label for="radio-15"
                                                                                           class="radio-trigger mb-0 font-size-14">
                                                                                        <input type="radio" id="radio-15"
                                                                                               name="cabin"
                                                                                               value="Business">
                                                                                        <span class="checkmark"></span>
                                                                                        <span>Business</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end dropdown -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-floating">
                                                            <input class="form-control" type="text" id="promo_code"
                                                                   name="promo_code" placeholder="Write Promo Code">
                                                            <label class="label-text">Promo Code</label>
                                                        </div>
                                                    </div>
                                                    {{--<div class="col-md-2">
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="miles2" name="miles2">
                                                            <label for="miles2">Book with miles</label>
                                                        </div>
                                                    </div>--}}
                                                    <div class="col-md-3">
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="flexible_date" name="flexible_date">
                                                            <label for="flexible_date">Show lowest fare</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 pr-0 pt-0" style="float:right;">
                                                        <div class="col-lg-3" style="float: right">
                                                            <button id="btnShowFlightsRoundTrip" type="submit" href="#"
                                                                    class="theme-btn w-100 text-center"><i class="fa fa-paper-plane" aria-hidden="true"></i> Search
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <input type="text" id="point_of_sales2" name="point_of_sales2" hidden>
                                                    <input type="text" id="source2" name="source2" value="" hidden>
                                                </form>
                                            </div>
                                        </div><!-- end tab-pane [round-trip] -->
                                        <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpanel"
                                             aria-labelledby="multi-city-tab">
                                            <form id="form2" method="GET" action="{{ route('flight-multicity') }}" onsubmit="setLoading(event)">
                                                @csrf
                                                <div id="contents"
                                                     class="contact-form-action multi-flight-field d-flex align-items-center">
                                                    <div class="row flex-grow-1 align-items-center ">
                                                        <div class="col-lg-8 pr-0">
                                                            <div id=""
                                                                 class="multicity_search d-flex align-items-center search-input-group">
                                                                <div style="flex: 2"
                                                                     class="input-box flex-grow-1 prepend-input-box">
                                                                    <div class="form-floating mb-3">
                                                                        <select
                                                                            class="form-select basic-single select-clone"
                                                                            style="width: 100%" id="depart"
                                                                            name="depart" class="form-control form-select"
                                                                            placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Departure City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                            <option value=''>Departure City or Airport
                                                                            </option>
                                                                        </select>
                                                                        <label for="departure1" class="form-label">Flying
                                                                            From</label>
                                                                    </div>
                                                                </div>
                                                                <div style="flex: 2"
                                                                     class="input-box flex-grow-1 append-input-box">
                                                                    <div class="form-floating mb-3">
                                                                        <select
                                                                            class="form-select basic-single select-clone"
                                                                            style="width: 100%" id="arriv" name="arriv"
                                                                            class="form-control" placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Arrival City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                            <option value=''>Arrival City or Airport
                                                                            </option>
                                                                        </select>
                                                                        <label for="arrival1" class="form-label">Flying
                                                                            To</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="d-flex align-items-center search-input-group">
                                                                <div class="input-box flex-grow-1">
                                                                    <div class="form-group form-floating">
                                                                        <input class="date-range form-control prepend-input"
                                                                               id="departingDateMulti"
                                                                               name="daterange_multi"
                                                                               placeholder="Departure" type="text" required
                                                                               readonly>
                                                                        <label class="label-text">Date</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-3 -->
                                                    </div>
                                                    <div class="multi-flight-delete-wrap pt-3 pl-3">
                                                        <button class="multi-flight-remove" type="button"><i
                                                                class="la la-remove"></i></button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="contact-form-action multi-flight-field d-flex align-items-center">
                                                    <div class="row flex-grow-1 align-items-center ">
                                                        <div class="col-lg-8 pr-0">
                                                            <div id=""
                                                                 class="multicity_search d-flex align-items-center search-input-group">
                                                                <div style="flex: 2"
                                                                     class="input-box flex-grow-1 prepend-input-box">
                                                                    <div class="form-floating mb-3">
                                                                        <select
                                                                            class="form-select basic-single select-clone"
                                                                            style="width: 100%" id="depart1"
                                                                            name="depart1" class="form-control form-select"
                                                                            placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Departure City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                            <option value=''>Departure City or Airport
                                                                            </option>
                                                                        </select>
                                                                        <label for="departure1" class="form-label">Flying
                                                                            From</label>
                                                                    </div>
                                                                </div>
                                                                <div style="flex: 2"
                                                                     class="input-box flex-grow-1 append-input-box">
                                                                    <div class="form-floating mb-3">
                                                                        <select
                                                                            class="form-select basic-single select-clone"
                                                                            style="width: 100%" id="arriv1"
                                                                            name="arriv1" class="form-control"
                                                                            placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Arrival City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                            <option value=''>Arrival City or Airport
                                                                            </option>
                                                                        </select>
                                                                        <label for="arrival1" class="form-label">Flying
                                                                            To</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="d-flex align-items-center search-input-group">
                                                                <div class="input-box flex-grow-1">
                                                                    <div class="form-group form-floating">
                                                                        <input class="date-range form-control prepend-input"
                                                                               id="date1" name="daterange_single1"
                                                                               placeholder="Departure" type="text" required
                                                                               readonly>
                                                                        <label class="label-text">Date</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-3 -->
                                                    </div>
                                                    <div class="multi-flight-delete-wrap pt-3 pl-3">
                                                        <button class="multi-flight-remove" type="button"><i
                                                                class="la la-remove"></i></button>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-lg-3 pr-0">
                                                        <div class="form-group">
                                                            <button class="theme-btn add-flight-btn w-100"
                                                                    type="button"><i class="la la-plus mr-1"></i>Add
                                                                flight
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 pr-0">
                                                        <div class="input-box">
                                                            <div class="form-group form-floating">
                                                                <div class="dropdown dropdown-contain gty-container">
                                                                    <a class="dropdown-toggle dropdown-btn" href="#"
                                                                       role="button" data-toggle="dropdown"
                                                                       aria-expanded="false">
                                                                        <span class="adult" data-text="Adult"
                                                                              data-text-multi="Adults">0 Adult</span>
                                                                        -
                                                                        <span class="children" data-text="Child"
                                                                              data-text-multi="Children">0 Child</span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-wrap">
                                                                        <div class="dropdown-item">
                                                                            <div
                                                                                class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label data-toggle="tooltip" data-placement="top" title="Total Adult and Children must be less than 10">Adults
                                                                                    <i class="la la-info-circle"></i>
                                                                                    <span>from 12 year</span></label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec" id="qtyDecId31"><i
                                                                                            class="la la-minus"></i></div>
                                                                                    <input type="text" class="adult"
                                                                                           name="adult_number"
                                                                                           value="1" readonly>
                                                                                    <div class="qtyInc" id="qtyIncId31"><i
                                                                                            class="la la-plus"></i></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div
                                                                                class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label>Children<span>2 to 11 year</span></label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDec"><i
                                                                                            class="la la-minus"></i></div>
                                                                                    <input class="children" type="text"
                                                                                           name="child_number"
                                                                                           value="0" readonly>
                                                                                    <div class="qtyInc" id="qtyIncId32"><i
                                                                                            class="la la-plus"></i></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-item">
                                                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                                                <label data-toggle="tooltip" data-placement="top" title="Number of infant must be less than 3 and not more than adult passengers">Infant
                                                                                    <i class="la la-info-circle"></i>
                                                                                    <span>0-1 year</span></label>
                                                                                <div
                                                                                    class="qtyBtn d-flex align-items-center">
                                                                                    <div class="qtyDecInf"><i
                                                                                            class="la la-minus"></i></div>
                                                                                    <input type="text" name="infants_number"
                                                                                           value="0" class="infant"
                                                                                           readonly required>
                                                                                    <div class="qtyIncInf"><i
                                                                                            class="la la-plus"></i></div>
                                                                                </div>
                                                                            </div>
                                                                            <hr style="margin-top: 0.3rem; margin-bottom: 0.3rem;">
                                                                            <div class="input-box">
                                                                                <span class="label-text text-color-6">Choose Class:</span>
                                                                                <div
                                                                                    class="form-group d-flex align-items-center">
                                                                                    <label for="radio-19"
                                                                                           class="radio-trigger mb-0 font-size-14 mr-3">
                                                                                        <input type="radio" id="radio-19"
                                                                                               name="cabin" value="Economy"
                                                                                               checked>
                                                                                        <span class="checkmark"></span>
                                                                                        <span>All</span>
                                                                                    </label>
                                                                                    <label for="radio-20"
                                                                                           class="radio-trigger mb-0 font-size-14 mr-3">
                                                                                        <input type="radio" id="radio-20"
                                                                                               name="cabin"
                                                                                               value="PremiumEconomy">
                                                                                        <span class="checkmark"></span>
                                                                                        <span>Premium Economy</span>
                                                                                    </label>
                                                                                    <label for="radio-21"
                                                                                           class="radio-trigger mb-0 font-size-14">
                                                                                        <input type="radio" id="radio-21"
                                                                                               name="cabin"
                                                                                               value="Business">
                                                                                        <span class="checkmark"></span>
                                                                                        <span>Business</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end dropdown -->
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-md-3">
                                                        <div class="form-group form-floating">
                                                            <input class="form-control" type="text" id="promo_code"
                                                                   name="promo_code" placeholder="Write Promo Code">
                                                            <label class="label-text">Promo Code</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 pt-0 pb-3">
                                                        <button id="btnShowFlightsMultiCity" type="submit"
                                                                class="theme-btn w-100 text-center"><i class="fa fa-paper-plane" aria-hidden="true"></i> Search
                                                        </button>
                                                    </div>
                                                    <input type="text" id="point_of_sales3" name="point_of_sales3" hidden>
                                                    <input type="text" id="source3" name="source3" value="" hidden>
                                                </div>
                                            </form>
                                        </div> <!-- end tab-pane [multi-city] -->
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="manage-booking" role="tabpanel"
                                     aria-labelledby="manage-booking-tab">
                                    <div class="section-tab section-tab-2 pb-3 alert alert-success">
                                        <h5 class="font-w600"><span class="font-size-14"><span
                                                    class="badge badge-danger">New</span> <i class="la la-square-full"></i>MODIFY JOURNEY DATE (EXCHANGE) <i
                                                    class="la la-square-full"></i> ADD EXTRA BAGGAGE <i
                                                    class="la la-square-full"></i> SELECT YOUR SEAT <i
                                                    class="la la-square-full"></i> UPDATE CONTACT INFO</span></h5>
                                    </div><!-- end section-tab -->
                                    <div class="tab-content" id="myTabContent2">
                                        <div class="tab-pane fade show active" role="tabpanel"
                                             aria-labelledby="airport-tab">
                                            <div class="contact-form-action">
                                                <form id="formMyb" name="Form" method="get" action="{{ route('manage-booking') }}"
                                                      class="row align-items-center" onsubmit="setLoading(event)">
                                                    @csrf
                                                    <div class="col-lg-5 pr-0">
                                                        @error('confirmationPNR')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">PNR is required</strong>
                                                        @enderror
                                                        <div class="form-group form-floating">
                                                            <input class="form-control" type="text" maxlength="6"
                                                                   id="confirmationPNR" name="confirmationPNR"
                                                                   placeholder="Reservation Code" required>
                                                            <label class="label-text">PNR / Reservation Code (6
                                                                character)<span
                                                                    style="color: red">*</span></label>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-5 pr-0">
                                                        @error('lastName')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">Last Name is required</strong>
                                                        @enderror
                                                        <div class="form-group form-floating">
                                                            <input class="form-control" type="text" id="lastName"
                                                                   name="lastName" placeholder="Last Name" required>
                                                            <label class="label-text">Last Name or SURNAME<span
                                                                    style="color: red">*</span></label>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
    
                                                    <div class="col-lg-2 pt-0 mb-3">
                                                        <button id="manageTrip" type="submit"
                                                                class="theme-btn w-100 text-center"><i class="fa fa-paper-plane" aria-hidden="true"></i> Search
                                                        </button>
                                                    </div>
                                                    <input type="text" id="source4" name="source4" value="" hidden>
                                                </form>
                                            </div>
                                        </div><!-- end tab-pane -->
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="flight-status" role="tabpanel"
                                     aria-labelledby="flight-status-tab">
                                    <div class="section-tab section-tab-2 pb-3">
                                        <h5 class="font-w600">Flight status is just a click away!</h5>
                                    </div><!-- end section-tab -->
                                    <div class="section-tab section-tab-2 pb-3">
                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="airport-tab" data-toggle="tab"
                                                   href="#airport"
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
                                                <form id="formStatusRoute" method="get" action="{{ route('flightstatus-route') }}"
                                                      class="row align-items-center" onsubmit="setLoading(event)">
                                                    @csrf
                                                    <div class="col-lg-6 pr-0">
                                                        <div id="flight_status"
                                                             class="d-flex align-items-center search-input-group">
                                                            <div style="flex: 2"
                                                                 class="input-box flex-grow-1 prepend-input-box">
                                                                @error('departureFlightStatus')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">Departure is required</strong>
                                                                @enderror
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select basic-single"
                                                                            style="width: 100%" id="departureFlightStatus"
                                                                            name="departureFlightStatus"
                                                                            class="form-control form-select"
                                                                            placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Departure City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                        <option value=''>Departure City or Airport</option>
                                                                    </select>
                                                                    <label for="departure1" class="form-label">Flying
                                                                        From</label>
                                                                </div>
                                                            </div>
                                                            <div style="flex: 2"
                                                                 class="input-box flex-grow-1 append-input-box">
                                                                @error('arrivalFlightStatus')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">Arrival is required</strong>
                                                                @enderror
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select basic-single"
                                                                            style="width: 100%" id="arrivalFlightStatus"
                                                                            name="arrivalFlightStatus" class="form-control"
                                                                            placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Arrival City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                        <option value=''>Arrival City or Airport</option>
                                                                    </select>
                                                                    <label for="arrival1" class="form-label">Flying
                                                                        To</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 pr-0">
                                                        <div class="input-box">
                                                            @error('flightStatusDate')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">Date is required</strong>
                                                            @enderror
                                                            <div class="form-group select-contain w-auto">
                                                                <select name="flightStatusDate"
                                                                        class="select-contain-select"
                                                                        required>
                                                                    <option value="{{ date('m-d-Y') }}" selected>Today
                                                                        {{ date('d-m-Y') }}</option>
                                                                    <option
                                                                        value="{{ Carbon\Carbon::tomorrow()->format('m-d-Y') }}">
                                                                        Tomorrow
                                                                        {{ Carbon\Carbon::tomorrow()->format('d-m-Y') }}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    {{-- <div class="col-lg-6"></div> --}}
                                                    <div class="col-lg-3 pt-0 pb-3">
                                                        <button id="btnShowFlightsStatus" type="submit"
                                                                class="theme-btn w-100 text-center"><i class="fa fa-paper-plane" aria-hidden="true"></i> Search
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- end tab-pane -->
                                        <div class="tab-pane fade" id="flight-number" role="tabpanel"
                                             aria-labelledby="flight-number-tab">
                                            <div class="contact-form-action">
                                                <form id="formStatusNumber" name="Form" method="get" action="{{ route('flightstatus-flightno') }}"
                                                      class="row align-items-center" onsubmit="setLoading(event)">
                                                    @csrf
                                                    <div class="col-lg-5 pr-0">
                                                        @error('flight_no')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">Flight no. is required</strong>
                                                        @enderror
                                                        <div class="form-group form-floating">
                                                            <input class="form-control" type="number" id="flight_no"
                                                                   name="flight_no" placeholder="Flight Number" required>
                                                            <label class="label-text">Flight Number i.e. 4039<span
                                                                    style="color: red">*</span></label>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-5 pr-0">
                                                        <div class="input-box">
                                                            {{--                                                        <label class="label-text">Departure Date</label>--}}
                                                            @error('departure_date')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">Departure date is required</strong>
                                                            @enderror
                                                            <div class="form-group select-contain w-auto">
                                                                <select class="select-contain-select" name="departure_date"
                                                                        required>
                                                                    <option
                                                                        value="{{ Carbon\Carbon::yesterday()->format('m-d-Y') }}">
                                                                        Yesterday
                                                                        {{ Carbon\Carbon::yesterday()->format('d-m-Y') }}
                                                                    </option>
                                                                    <option value="{{ date('m-d-Y') }}" selected>Today
                                                                        {{ date('d-m-Y') }}</option>
                                                                    <option
                                                                        value="{{ Carbon\Carbon::tomorrow()->format('m-d-Y') }}">
                                                                        Tomorrow
                                                                        {{ Carbon\Carbon::tomorrow()->format('d-m-Y') }}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-md-2 pt-0 pb-3">
                                                        <button id="btnShowFlightsStatusNumber" type="submit"
                                                                class="theme-btn w-100 text-center"><i class="fa fa-paper-plane" aria-hidden="true"></i> Search
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- end tab-pane -->
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="flight-schedule" role="tabpanel"
                                     aria-labelledby="flight-schedule-tab">
                                    <div class="section-tab section-tab-2 pb-3">
                                        <h5 class="font-w600">Explore our flight schedule</h5>
                                    </div><!-- end section-tab -->
    
                                    <div class="tab-content" id="myTabContent2">
                                        <div class="tab-pane fade show active" id="flight-hotel" role="tabpanel"
                                             aria-labelledby="flight-hotel-tab">
                                            <div class="contact-form-action">
                                                <form id="formSchedule" method="get" action="{{ route('flight-schedule') }}"
                                                      class="row align-items-center" onsubmit="setLoading(event)">
                                                    @csrf
                                                    <div class="col-lg-6 pr-0">
                                                        <div id="flight_schedule"
                                                             class="d-flex align-items-center search-input-group">
                                                            <div style="flex: 2"
                                                                 class="input-box flex-grow-1 prepend-input-box">
                                                                @error('departureFlightSchedule')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">Departure is required</strong>
                                                                @enderror
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select basic-single"
                                                                            style="width: 100%" id="departureFlightSchedule"
                                                                            name="departureFlightSchedule"
                                                                            class="form-control form-select"
                                                                            placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Departure City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                        <option value=''>Departure City or Airport</option>
                                                                    </select>
                                                                    <label for="departureFlightSchedule" class="form-label">Flying
                                                                        From</label>
                                                                </div>
                                                            </div>
                                                            <div style="flex: 2"
                                                                 class="input-box flex-grow-1 append-input-box">
                                                                @error('arrivalFlightSchedule')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">Departure is required</strong>
                                                                @enderror
                                                                <div class="form-floating mb-3">
                                                                    <select class="form-select basic-single"
                                                                            style="width: 100%" id="arrivalFlightSchedule"
                                                                            name="arrivalFlightSchedule"
                                                                            class="form-control" placeholder="TYPE"
                                                                            required
                                                                            oninvalid="this.setCustomValidity('Please Select Arrival City or Airport')"
                                                                            oninput="this.setCustomValidity('')">
                                                                        <option value=''>Arrival City or Airport</option>
                                                                    </select>
                                                                    <label for="arrivalFlightSchedule" class="form-label">Flying
                                                                        To</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 pr-0">
                                                        <div class="input-box">
                                                            <div class="form-group form-floating">
                                                                <input id="daterange-schedule" class=" form-control"
                                                                       type="text"
                                                                       name="daterange_single_status" readonly required>
                                                                <label>Date</label>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    {{-- <div class="col-lg-6"></div> --}}
                                                    <div class="col-lg-3 pt-0 pb-3">
                                                        <button id="btnShowFlightsSchedule" type="submit"
                                                                class="theme-btn w-100 text-center"><i class="fa fa-paper-plane" aria-hidden="true"></i> Search
                                                        </button>
                                                    </div>
    
                                                </form>
                                            </div>
                                        </div><!-- end tab-pane -->
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="check-in" role="tabpanel" aria-labelledby="check-in-tab">
                                    <div class="section-tab section-tab-2 pb-3 alert alert-success">
                                        <h5 class="font-w600">Skip the line and breeze through your flight!<br><span
                                                class="font-size-14"><i class="la la-square-full"></i> Web Check-in opens 24 hours prior to flight departure and closes 3 hours (Domestic) & 4 hours (International) prior to flight departure.</span>
                                        </h5>
                                    </div><!-- end section-tab -->
                                    <div class="section-tab section-tab-2">
                                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="check-in-booking-reference-tab"
                                                   data-toggle="tab" href="#check-in-booking-reference"
                                                   role="tab" aria-controls="check-in-booking-reference"
                                                   aria-selected="false">
                                                    PNR (6 character)
                                                </a>
                                            </li>
                                            <li class="nav-item pb-3">
                                                <a class="nav-link" id="check-in-ticket-number-tab" data-toggle="tab"
                                                   href="#check-in-ticket-number" role="tab"
                                                   aria-controls="check-in-ticket-number"
                                                   aria-selected="true">
                                                    Ticket Number
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- end section-tab -->
                                    <div class="tab-content" id="myTabContent2">
                                        <div class="tab-pane fade show active" id="check-in-booking-reference"
                                             role="tabpanel" aria-labelledby="check-in-booking-reference-tab">
                                            <div class="contact-form-action">
                                                <form id="formCheckIn" name="Form" method="get"
                                                      action="{{ route('checkin-booking-reference') }}"
                                                      class="row align-items-center" onsubmit="setLoading(event)">
                                                    @csrf
                                                    <div class="col-lg-5 pr-0">
                                                        <div class="input-box">
                                                            @error('bookingPNRCheckin')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">PNR is required</strong>
                                                            @enderror
                                                            <div class="form-group form-floating">
                                                                <input class="form-control" type="text" maxlength="6"
                                                                       id="bookingPNRCheckin" name="bookingPNRCheckin"
                                                                       placeholder="PNR" required>
                                                                <label class="label-text">PNR / Reservation Code (6
                                                                    character)<span
                                                                        style="color: red">*</span></label>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-5 pr-0">
                                                        <div class="input-box">
                                                            @error('lastNameCheckin')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">Last Name is required</strong>
                                                            @enderror
                                                            <div class="form-group form-floating">
                                                                <input class="form-control" type="text" id="lastNameCheckin"
                                                                       name="lastNameCheckin" placeholder="PNR" required>
                                                                <label class="label-text">Last Name / SURNAME<span
                                                                        style="color: red">*</span></label>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-md-2 pt-0 pb-3">
                                                        <button id="checkinBookingPNR" type="submit"
                                                                class="theme-btn w-100 text-center"><i class="fa fa-paper-plane" aria-hidden="true"></i> Search
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- end tab-pane -->
    
                                        <div class="tab-pane fade" id="check-in-ticket-number" role="tabpanel"
                                             aria-labelledby="check-in-ticket-number-tab">
                                            <div class="contact-form-action">
                                                <form id="formCheckInTicket" name="Form" method="get" action="{{ route('checkin-ticket-number') }}"
                                                      class="row align-items-center" onsubmit="setLoading(event)">
                                                    @csrf
                                                    <div class="col-lg-5 pr-0">
                                                        <div class="input-box">
                                                            @error('checkinTicketNumber')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">Ticket Number is required</strong>
                                                            @enderror
                                                            <div class="form-group form-floating">
                                                                <input class="form-control" type="number"
                                                                       id="checkinTicketNumber" name="checkinTicketNumber"
                                                                       oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                       maxlength=13 placeholder="Ticket" required>
                                                                <label class="label-text">Ticket Number (13 Digit)<span
                                                                        style="color: red">*</span></label>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-4 pr-0">
                                                        <div class="input-box">
                                                            @error('lastNameCheckinTicket')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">Last Name is required</strong>
                                                            @enderror
                                                            <div class="form-group form-floating">
                                                                <input class="form-control" type="text"
                                                                       id="lastNameCheckinTicket"
                                                                       name="lastNameCheckinTicket" placeholder="Last_Name"
                                                                       required>
                                                                <label class="label-text">Last Name / SURNAME<span
                                                                        style="color: red">*</span></label>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-3 -->
                                                    <div class="col-lg-3 pt-0 pb-3">
                                                        <button id="checkinTicket" type="submit"
                                                                class="theme-btn w-100 text-center"><i class="fa fa-paper-plane" aria-hidden="true"></i> Search
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- end tab-pane -->
                                    </div>
                                </div><!-- end tab-pane -->
                            </div>
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                   </div>
                   <svg class="hero-svg d-none d-sm-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
            <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
        </svg>
                </div><!-- end container -->
                </div>
        </section><!-- end hero-wrapper -->
        <!-- ================================
                END HERO-WRAPPER (WIDGET) AREA
            ================================= -->

     <!--<a href="https://www.youtube.com/watch?v=Vyt1akjqsGc" target="__blank" class="rtl-btn">How to book flight</a>-->

    <!-- ================================
    START ABOUT AREA
================================= -->
<section class="about-area section--padding overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content pr-5">
                    <div class="section-heading">
                        <h4 class="font-size-16 pb-2">- WELCOME</h4>
                        
                        <h2 class="cd-headline rotate-1 sec__title display-6 fw-bold line-height-50">
                            <span id="typeElement" class="line-height-50">
                            </span>
                        </h2>
                    </div><!-- end section-heading -->
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="image-box about-img-box">
                    <a target="_blank" href="https://youtu.be/Vyt1akjqsGc"><img src="{{ asset('assets/images/offers/SMILEBIMAN.png') }}" alt="about-img" class="img__item img__item-1"></a>
                    <img style="width:120px; height:120px" src="{{ asset('assets/images/logo/BG-Logo-R.png') }}" alt="about-img" class="img__item img__item-2">
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
    END ABOUT AREA
================================= -->
    

    
    <!-- ================================
    START GALLERY AREA
================================= -->
    <section class="gallery-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Sky-High Discounts!</h2>
                        <p class="sec__desc pt-2">Enjoy Incredible Savings on Airfare</p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="full-width-slider padding-top-50px carousel-action">
            <!--<div class="full-width-slide-item">-->
            <!--    <a class="d-block" data-fancybox="gallery" href="{{ asset('assets/images/offers/RISINGSUN2.png') }}" data-caption="Discounts & Offers">-->
            <!--        <img src="{{ asset('assets/images/offers/RISINGSUN2.png') }}" alt="RISINGSUN">-->
            <!--    </a>-->
            <!--</div>-->
            <div class="full-width-slide-item">
                <a class="d-block" data-fancybox="gallery" href="{{ asset('assets/images/offers/SMILEBIMAN.png') }}" data-caption="Discounts & Offers">
                    <img src="{{ asset('assets/images/offers/SMILEBIMAN.png') }}" alt="SMILEBIMAN">
                </a>
            </div>
            <!--<div class="full-width-slide-item">-->
            <!--    <a class="d-block" data-fancybox="gallery" href="{{ asset('assets/images/offers/COXCAR23_web.png') }}" data-caption="Discounts & Offers">-->
            <!--        <img src="{{ asset('assets/images/offers/COXCAR23_web.png') }}" alt="COXCAR23">-->
            <!--    </a>-->
            <!--</div>-->
        </div><!-- end full-width-slider -->
    </section><!-- end gallery-area -->
    <!-- ================================
        END GALLERY AREA
    ================================= -->


    

    <div class="job-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="discount-img">
                            <img src="{{asset('assets/images/misc/discount.png')}}" alt="discount img">
                        </div><!-- end discount-img -->
                        <div class="discount-content">
                            <div class="section-heading">
                                <h2 class="sec__title line-height-50 text-white">Exclusive Offer 10% Discount</h2>
                                <p class="sec__desc text-white pt-2">Promo: SMILEBIMAN</p>
                                
                            </div><!-- end section-heading -->
                        </div><!-- end discount-content -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div>
        </div>
    </div>


    <div class="section-block"></div>



    <!-- ================================
            START DESTINATION (GALLERY) AREA
        ================================= -->
    <section class="destination-area section--padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <span> - Featured Destination</span>
                        <h2 class="sec__title cd-headline rotate-1 display-3 fw-bold">
                            DHAKA TO 
                            <span class="cd-words-wrapper text-color-10 font-weight-bolder">
                              <b class="is-visible">ABU DHABI</b>
                              <b>BANGKOK</b>
                              <b>CHINA</b>
                              <b>DAMMAM</b>
                              <b>DELHI</b>
                              <b>DOHA</b>
                              <b>DUBAI</b>
                              <b>HONGKONG</b>
                              <b>JEDDAH</b>
                              <b>KOLKATA</b>
                              <b>KATHMANDU</b>
                              <b>MALAYSIA</b>
                              <b>KUWAIT</b>
                              <b>LONDON</b>
                              <b>MANCHESTER</b>
                              <b>MADINA</b>
                              <b>MUSCAT</b>
                              <b>JAPAN</b>
                              <b>RIYADH</b>
                              <b>SINGAPORE</b>
                            </span>
                          </h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
                
                <div class="row padding-top-50px">
                    <div class="col-lg-12">
                        <a href="{{ route('destinations-domestic') }}">
                            <div class="card-item destination-card">
                                <div class="card-img">
                                    <img src="{{ asset('assets/images/destinations/destination_index.png') }}"
                                        alt="destinations">
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end destination-area -->
    <!-- ================================
            END DESTINATION (GALLERY) AREA
        ================================= -->
        
    <div class="job-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/misc/mobileapp.png')}}" alt="mobile app">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-80px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    
                    <h2 class="sec__title font-size-30 text-white">Join Biman Loyalty Club</h2>
                    <p class="sec__desc text-white-50 pb-1 my-3 d-none d-sm-block">Enjoy the rewards of membership, earn miles, and get access to special offers.</p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action text-center">
                        <a class="btn btn-success font-weight-bold" href="{{ route('loyalty.register') }}"><i class="fa fa-user-plus font-size-18 mr-2"></i> Become a Loyalty Member</a>
                    </div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

 <!--end modal-Pop up for advertisement -->
<div class="modal-popup">
     <div class="modal fade bd-example-modal-lg" id="addContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content" style="width:90%; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
             
             <div style="padding: 0rem !important;" class="modal-body">
                  <button style="position: absolute; z-index: 1; right: .9rem; color: blue; " type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 2rem; color: black;">&times;</span>
                  </button>
                  <a href="">
                      <img  style="display:block; width: 100%; height:100%" src="{{ asset('assets/images/offers/SMILEBIMAN.png') }}">
                  </a> 
                 
             </div>
           
         </div>
     </div>
    </div>
</div>
 <!--end modal-Pop up for advertisement-->
@endsection


@section('page-specific-footer')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('assets/js/customJs/searchWidgetDestination_v12.js') }}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    {{-- slider --}}
    <script src="{{ asset('assets/js/superslider-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('assets/js/animate-headline/modernizr.js') }}"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    {{-- slider --}}

    {{-- for swal --}}
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
    
    <!-- Setup and start animation! -->
    <script>
        var typed = new Typed('#typeElement', {
        strings: ['Hello there.','Greetings from BIMAN.','It is our top priority to make your journey comfortable and safe.','Book your flight now.<br>Let\'s Fly with BIMAN.'],
        typeSpeed: 90,
        });
    </script>
    
    <script type="text/javascript">
    	$("img").lazyload({
    	    effect : "fadeIn"
    	});
    </script>
    
    <script type="text/javascript">
		$(window).on('load', function() {
		    $("#departure1").val(null).trigger("change");
            $("#arrival1").val(null).trigger("change");
            $("#departure2").val(null).trigger("change");
            $("#arrival2").val(null).trigger("change");
            $("#departureFlightStatus").val(null).trigger("change");
            $("#arrivalFlightStatus").val(null).trigger("change");
            $("#departureFlightSchedule").val(null).trigger("change");
            $("#arrivalFlightSchedule").val(null).trigger("change");
		});
		$(window).on('load',function(){
            if (!sessionStorage.getItem('shown-modal')){
                $('#addContact').modal('show');
                sessionStorage.setItem('shown-modal', 'true');
            }
        });
        $(window).on('resize load', function () {
            if ($(window).width() <= 768) {
                $("#oneway_search").removeClass("d-flex");
                $("#round_search").removeClass("d-flex");
                $(".multicity_search").removeClass("d-flex");
                $("#flight_schedule").removeClass("d-flex");
                $("#flight_status").removeClass("d-flex");

                document.getElementById("source1").value = 'amobile';
                document.getElementById("source2").value = 'amobile';
                document.getElementById("source3").value = 'amobile';
                document.getElementById("source4").value = 'amobile';
            } else {
                $("#oneway_search").addClass("d-flex");
                $("#round_search").addClass("d-flex");
                $(".multicity_search").addClass("d-flex");
                $("#flight_schedule").addClass("d-flex");
                $("#flight_status").addClass("d-flex");
            }
        });
	</script>
	

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
        $('input[name="daterange_multi"]').daterangepicker({
            "singleDatePicker": true,
            "minDate": new Date(),
        });
        $('input[name="daterange_single1"]').daterangepicker({
            singleDatePicker: true,
            minDate: new Date(),
        });
        
    </script>
    <script>
        
        var nowDate = new Date();
        var tomorrowDate = new Date(new Date().getTime() + 48 * 60 * 60 * 1000);
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
        var maxLimitDate = new Date(nowDate.getFullYear() + 1, nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
        
        $('input[name="daterange_single"]').daterangepicker({
            "autoApply": true,
            "singleDatePicker": true,
            "minDate": today,
            "maxDate": maxLimitDate,
            "opens": "left",
            "locale": {
                format: 'DD-MM-YYYY'
            }
        }, function(start, end) {
            $("#departingDate").val(start.format('DD-MM-YYYY'));
            $('#departingDate').parent().parent().removeClass('has-error');

        });

        $('input[name="daterange_round"]').daterangepicker({
            "autoApply": true,
            "singleDatePicker": true,
            "minDate": today,
            "maxDate": maxLimitDate,
            "opens": "left",
            "locale": {
                format: 'DD-MM-YYYY'
            }
        }, function(start, end) {
            $("#departingDateRound").val(start.format('DD-MM-YYYY'));
            $('#departingDateRound').parent().parent().removeClass('has-error');
            
            var aMinDate = new Date(Date.parse(start));

            $('input[name="daterange_round_two"]').daterangepicker({
                "autoApply": true,
                "singleDatePicker": true,
                "minDate": aMinDate,
                "maxDate": maxLimitDate,
                "opens": "left",
                "locale": {
                    format: 'DD-MM-YYYY'
                }
            }, function(start, end) {
                $("#departingDateRoundTwo").val(start.format('DD-MM-YYYY'));
                $('#departingDateRoundTwo').parent().parent().removeClass('has-error');
            });

        });

        $('input[name="daterange_round_two"]').daterangepicker({
            "autoApply": true,
            "singleDatePicker": true,
            "minDate": today,
            "startDate": tomorrowDate,
            "maxDate": maxLimitDate,
            "opens": "left",
            "locale": {
                format: 'DD-MM-YYYY'
            }
        }, function(start, end) {
            $("#departingDateRoundTwo").val(start.format('DD-MM-YYYY'));
            $('#departingDateRoundTwo').parent().parent().removeClass('has-error');
        });

        
        
        $('input[name="daterange_single_status"]').daterangepicker({
            "autoApply": true,
            "singleDatePicker": true,
            "minDate": today,
            "maxDate": maxLimitDate,
            "opens": "left",
            "locale": {
                format: 'DD-MM-YYYY'
            }
        },function (start, end) {
            $("#daterange-schedule").val(start.format('DD-MM-YYYY'));
            $('#daterange-schedule').parent().parent().removeClass('has-error');
           
        });
        $('input[name="daterange_multi"]').daterangepicker({
           
            singleDatePicker: true,
            minDate: new Date(),
        });
    </script>
       

    <script type="text/javascript">
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var country_code = this.responseText.replace(/(\r\n|\n|\r)/gm,"").split('loc=');
                country_code = country_code[1].split('tls=');
                country_code = country_code[0];
                let arr = ['US', 'GB', 'TH', 'EU','BD','SA','AE','OM','MY','QA','SG','CN','HK','KW','CA','JP','LK','MV','ID','AU'];
                let pos = country_code;
                var ans  = (arr.indexOf(pos) > -1);
                if(ans){
                    document.getElementById("point_of_sales1").value = pos;
                    document.getElementById("point_of_sales2").value = pos;
                    document.getElementById("point_of_sales3").value = pos;
                }else{
                    document.getElementById("point_of_sales1").value = "US";
                    document.getElementById("point_of_sales2").value = "US";
                    document.getElementById("point_of_sales3").value = "US";
                }
            }
        };
        //OPEN HTTP Request
        xhttp.open("GET", "https://www.cloudflare.com/cdn-cgi/trace", true);
        xhttp.send();
    </script>
    
    {{--<script>
        $(document).ready(function() {
                        $("#manageTrip").click(function() {
                var confirmationPNR = document.forms["Form"]["confirmationPNR"].value;
                var lastName = document.forms["Form"]["lastName"].value;
                if ( confirmationPNR == null || confirmationPNR == "" , lastName == null || lastName == "") {
                }else{
                    $(this).html(
                        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Searching...`
                    );
                }
            });

            $("#btnShowFlightsStatus").click(function() {
                var departureFlightStatus = $("#departureFlightStatus").val();
                var arrivalFlightStatus = $("#arrivalFlightStatus").val();
                if ( !arrivalFlightStatus ) {
                }else{
                    $(this).html(
                        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Searching...`
                    );
                }
            });
            $("#btnShowFlightsStatusNumber").click(function() {
                var flight_no = document.forms["Form"]["flight_no"].value;
                
                
                if ( flight_no == null || flight_no == "" ) {
                }else{
                    $(this).html(
                        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Searching...`
                    );
                }
            });

            $("#btnShowFlightsSchedule").click(function() {
                var departureFlightSchedule = $("#departureFlightSchedule").val();
                var arrivalFlightSchedule = $("#arrivalFlightSchedule").val();
                if ( !arrivalFlightSchedule ) {
                }else{
                    $(this).html(
                        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Searching...`
                    );
                }
            });
        });
    </script>--}}

    <script>
        $(document).ready(function() {
            $(function() {
                var hash = window.location.hash;
                
                hash && $('ul.nav a[href="' + hash + '"]').tab('show');

                $('.nav-tabs a').click(function(e) {
                    $(this).tab('show');
                    window.location.hash = this.hash;
                    
                });
            });
            
            // to get the previously selected option
            $('select').each(function() {
                var select = $(this);
                

                var selectedValue = select.find('option[selected]').val();

                if (typeof selectedValue == 'undefined') {
                    selectedValue = select.find(':selected').val();
                    
                    if (selectedValue) {
                        select.val('').trigger("change");
                        selectedValue = select.find(':selected').val();
                        
                    }
                }
                if (selectedValue == ',Select Destination') {
                    select.val('').trigger("change");
                    selectedValue = select.find(':selected').val();
                    
                }

                

                if (selectedValue == 'Economy' || selectedValue == 'Business') {
                    select.val(selectedValue);
                }


            });
        });
    </script>



<script>
    function truncateText(selector, maxLength) {
        var element = document.querySelector(selector),s
            truncated = element.innerText;

        if (truncated.length > maxLength) {
            truncated = truncated.substr(0,maxLength) + '...';
        }
        return truncated;
    }

</script>

<script>
    function setLoading(e) {
        // Disable the submit button and show a loading state
        // e.preventDefault();
        const form = e.target;
        const formId = form.getAttribute('id');

        let submitButton;
        if(formId==='form'){
            submitButton = document.getElementById('btnShowFlights');
        }else if(formId==='form1'){
            submitButton = document.getElementById('btnShowFlightsRoundTrip');
        }else if(formId==='form2'){
            submitButton = document.getElementById('btnShowFlightsMultiCity');
        }else if(formId==='formMyb'){
            submitButton = document.getElementById('manageTrip');
        }else if(formId==='formStatusRoute'){
            submitButton = document.getElementById('btnShowFlightsStatus');
        }else if(formId==='formStatusNumber'){
            submitButton = document.getElementById('btnShowFlightsStatusNumber');
        }else if(formId==='formSchedule'){
            submitButton = document.getElementById('btnShowFlightsSchedule');
        }else if(formId==='formCheckIn'){
            submitButton = document.getElementById('checkinBookingPNR');
        }else if(formId==='formCheckInTicket'){
            submitButton = document.getElementById('checkinTicket');
        }
        else{
            submitButton = '';
        }
        submitButton.disabled = true;
        submitButton.innerHTML = `
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        Searching...`;
    }
</script>

@endsection
