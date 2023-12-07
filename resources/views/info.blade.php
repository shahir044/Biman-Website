@extends('header-footer')

@section('content')

<!-- ================================
    STARTS INFO AREA Logos
================================= -->
<section class="faq-area section-bg padding-top-50px padding-bottom-70px text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{url('/#flight')}}" target="_blank" class="d-block"> 
                        <i class="las la-money-bill faq-icons"></i>
                        <span class="d-block info__title">Book Flight</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{url('/#manage-booking')}}" target="_blank" class="d-block"> 
                        <i class="las la-suitcase faq-icons"></i>
                        <span class="d-block info__title">Manage Trip</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{url('/#flight-status')}}" target="_blank" class="d-block"> 
                        <i class="las la-plane-departure faq-icons"></i>
                        <span class="d-block info__title">Flight Status</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{url('/#flight-schedule')}}" target="_blank" class="d-block"> 
                        <i class="las la-plane-arrival faq-icons"></i>
                        <span class="d-block info__title">Flight Schedule</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{ route('travel-advisory') }}" target="_blank" class="d-block">
                        <i class="las la-plane faq-icons"></i>
                        <span class="d-block info__title">Travel Advisory</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{ route('faq') }}" target="_blank" class="d-block">
                        <i class="las la-comments faq-icons"></i>
                        <span class="d-block info__title">FAQs</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{ route('news-list') }}" target="_blank" class="d-block">
                        <i class="las la-newspaper faq-icons"></i>
                        <span class="d-block info__title">Latest News</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{ route('baggageAll') }}" target="_blank" class="d-block">
                        <i class="las la-suitcase-rolling faq-icons"></i>
                        <span class="d-block info__title">Baggage Info</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{ route('privacyPolicy') }}" target="_blank" class="d-block">
                        <i class="las la-user-lock faq-icons"></i>
                        <span class="d-block info__title">Privacy Policy</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{ route('refund-request') }}" target="_blank" class="d-block">
                        <i class="las la-file-alt faq-icons"></i>
                        <span class="d-block info__title">Refund Form & Policy</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{ route('termsConditions') }}" target="_blank" class="d-block">
                        <i class="las la-exclamation-circle faq-icons"></i>
                        <span class="d-block info__title">Terms & Conditions</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box faq-icon-box">
                    <a href="{{ route('contact') }}" target="_blank" class="d-block">
                        <i class="las la-phone-square faq-icons"></i>
                        <span class="d-block info__title">Contact & Feedback</span>
                    </a>
                </div>
            </div><!-- end col-lg-3 -->
            
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
    END FAQ AREA logos
================================= -->



<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area cta-bg-2 bg-fixed padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">Want to share your feedback</h2>
                    <p class="sec__desc text-white pt-1">We would love to hear from you</p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="btn-box btn--box text-right">
                    <a href="{{url('contactus?#customer-feedback')}}" class="theme-btn border-0">Feedback</a>
                </div>
                <!-- end btn-box -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

@endsection

@section('page-specific-footer')

@endsection