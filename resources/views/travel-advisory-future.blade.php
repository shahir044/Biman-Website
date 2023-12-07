@extends('header-footer')



@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-5">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Teavel Advisory</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="index.html">Home</a></li>
                                <li>Teavel Info</li>
                                <li>Teavel Advisory</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg travelAdvisory-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START TRAVEL ADVISORY AREA
    ================================= -->
    <section class="contact-area section-bg section--padding">
        <div class="container">
            <div class="page-title">
            <span>
                <span class="page-header-title"> Travel Advisory </span>
                is an official warning statement issued by government agencies to provide information about the relative safety of travelling to or visiting one or more specific foreign countries or destinations. The purpose is to enable travelers to make an informed decision about a particular travel destination, and to help travellers prepare adequately for what may be encountered on their trip. Travel advisories may relate to issues such as inclement weather, security matters, civil unrest or disease. <sub>[WIKIPEDIA]</sub>
            </span>
            </div>
            <div class="row padding-top-50px">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="accordion accordion-item padding-top-30px" id="travelAdvisory">

                        <!-- CARD 1 -->
                        <div class="card">
                            <div class="card-header" id="travelAdvisoryHeading1">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                        type="button" data-toggle="collapse" data-target="#travelAdvisoryCollapse1"
                                        aria-expanded="false" aria-controls="travelAdvisoryCollapse1">
                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/de.svg') }}"
                                            style="height: 40px; width: 40px">
                                        <h5 class="ml-3">FRANKFURT, GERMANY</h5>
                                        <i class="la la-minus minus-icon"></i>
                                        <i class="la la-plus plus-icon"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="travelAdvisoryCollapse1" class="collapse border-top"
                                aria-labelledby="travelAdvisoryHeading1" data-parent="#travelAdvisory">
                                <div class="card-body padding-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text">
                                                <div class="whiteBlack padding-top-30px">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <label class="label-text">
                                                                        <i class="las la-plane-departure mr-1" style="font-size: 1.4rem;">
                                                                        </i>Documents Needed Prior To Flight
                                                                    </label>
                                                                </div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li class="row criteria-list">
                                                                            <span
                                                                                class="col-sm-8 col-md-8 criteria-head">Covid Negative Certificate
                                                                                <span class="inline-text"> (6 hrs prior to flight)</span>
                                                                            </span>
                                                                            <span
                                                                                class="col-sm-4 col-md-4 criteria-body">Required</span>
                                                                        </li>

                                                                        <li class="row criteria-list">
                                                                            <span
                                                                                class="col-sm-8 col-md-8 criteria-head">Covid Negative Certificate
                                                                                <span class="inline-text"> (72 hrs prior to flight)</span>
                                                                            </span>
                                                                            <span
                                                                                class="col-sm-4 col-md-4 criteria-body">Required</span>
                                                                        </li>

                                                                        <li class="row criteria-list">
                                                                            <span
                                                                                class="col-sm-8 col-md-8 criteria-head">Covid Vaccinated Certificate</span>
                                                                            <span
                                                                                class="col-sm-4 col-md-4 criteria-body">Required</span>
                                                                        </li>

                                                                        <li class="row">
                                                                            <span
                                                                                class="col-sm-8 col-md-8 criteria-head">Health Decleration Form</span>
                                                                            <span
                                                                                class="col-sm-4 col-md-4 criteria-body">Required</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <label class="label-text">
                                                                        <i class="las la-plane-arrival mr-1"
                                                                            style="font-size: 1.4rem;"></i>Documents Needed
                                                                        Post Flight
                                                                    </label>
                                                                </div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li class="row">
                                                                            <span
                                                                                class="col-sm-6 col-md-6 criteria-head">Quarantine</span>
                                                                            <span
                                                                                class="col-sm-3 col-md-3 criteria-body">Not Required</span>
                                                                            <span
                                                                                class="col-sm-3 col-md-3 criteria-body">0 Days</span>
                                                                        </li>

                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <!-- CARD 2 -->
                        <div class="card">
                            <div class="card-header" id="travelAdvisoryHeading2">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                        type="button" data-toggle="collapse" data-target="#travelAdvisoryCollapse2"
                                        aria-expanded="false" aria-controls="travelAdvisoryCollapse2">
                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/hk.svg') }}"
                                            style="height: 40px; width: 40px">
                                        <h5 class="ml-3">HONG KONG</h5>
                                        <i class="la la-minus minus-icon"></i>
                                        <i class="la la-plus plus-icon"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="travelAdvisoryCollapse2" class="collapse border-top"
                                aria-labelledby="travelAdvisoryHeading2" data-parent="#travelAdvisory">
                                <div class="card-body padding-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text">
                                                <div class="whiteBlack padding-top-30px">
                                                    <p class="text-black font-weight-bold">(HKG)
                                                        (GMT+8) (00852)</p>
                                                    <p>Room no. 214 & 215, F-2, F East</p>
                                                    <p>Houston Centre, 63 Mody Road Tsim</p>
                                                    <p>Shatsuikowloon</p>
                                                    <p>Phone: +852-27248464</p>
                                                    <p>Fax: +852-27246284</p>
                                                    <p>Mobile: +852-94702724</p>
                                                    <p>Email: hkguu@bdbiman.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end travel-advisory-area -->
    <!-- ================================
    END TRAVEL ADVISORY AREA
    ================================= -->

@endsection
