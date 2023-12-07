@extends('header-footer')

@section('header-extension')

@endsection

@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area gradient-bg-gray-terms before-none">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                            <div class="section-heading text-left">
                                <h2 class="sec__title-terms">Terms & Conditions</h2>
                                <p class="sec__desc-terms font-weight-regular pb-2">is the agreement that incorporates Terms, Conditions, Policies, Rules and Guidelines for users to access the service.</p>
                            </div>
                            <div class="btn-box bread-btns">
                                {{-- <a href="#" class="theme-btn theme-btn-gray mr-2"><i class="la la-bookmark mr-1"></i>Save</a> --}}
                                {{-- <a href="{{route('privacyPolicy')}}" class="theme-btn theme-btn-gray"><i class="la la-external-link mr-1"></i>Privacy Policy</a> --}}
                            </div>
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
        START JOB-DETAILS AREA
    ================================= -->
    <section class="job-details-area   section--padding" id="main-content">
        <div class="container" >
            <div class="row">
                <div class="col-lg-4 " id="sticky-sidebar" >
                    <div class="sidebar mb-0 sticky-top">
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape  font-weight-bold">On this page</h3>
                            <ul class="list-items list--items list-group list-items-flush">
                                <li><span class="text-black mr-2"><a href="#Agency-Debit-Memo-Policy" class="active" target="_self">Agency Debit Memo Policy</a></span></li>
                                <li><span class="text-black mr-2"><a href="#Authorization-letter-from-Credit-Debit-Card-holder">Authorization letter from Credit/Debit Card holder</a></span></li>
                                <li><span class="text-black mr-2"><a href="#Biman-International-Tariff-Manual">Biman International Tariff Manual</a></span></li>
                                <li><span class="text-black mr-2"><a href="#Booking-Policy">Booking Policy</a></span></li>
                                <li><span class="text-black mr-2"><a href="#Carriage-for-Passengers-and-Baggage">Carriage for Passengers and Baggage</a></span></li>
                                <li><span class="text-black mr-2"><a href="#Credit-Debit-Card-Payment-Condition">Credit/Debit Card Payment Condition</a></span></li>
                                <li><span class="text-black mr-2"><a href="#Internet-Bookings">Internet Bookings</a></span></li>
                                <li><span class="text-black mr-2"><a href="#Medical-Certificate">Medical Certificate</a></span></li>
                                <li><span class="text-black mr-2"><a href="#Medical-Form">Medical Form</a></span></li> 
                                <li><span class="text-black mr-2"><a href="#Online-Travel-Agents">Online Travel Agents</a></span></li>
                                <li><span class="text-black mr-2"><a href="#Privacy-Policy">Privacy Policy</a></span></li>
                                <!--<li><span class="text-black mr-2"><a href="#Refund-and-Change-Policy">Refund and Change Policy</a></span></li>-->
                            </ul>
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8" id="main">

                    <div class="form-box" id="Agency-Debit-Memo-Policy">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Agency Debit Memo Policy</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Agency-Debit-Memo-Policy-rev-1.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Authorization-letter-from-Credit-Debit-Card-holder">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Authorization letter from Credit/Debit Card holder</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Authorization-letter-from-Credit-Debit-Card-holder.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Biman-International-Tariff-Manual">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Biman International Tariff Manual</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Biman-International-Tariff-Manual.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    
                    <div class="form-box" id="Booking-Policy">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Booking Policy</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Booking-Policy.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Carriage-for-Passengers-and-Baggage">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Carriage for Passengers and Baggage</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Carriage-for-Passengers-and-Baggage.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Credit-Debit-Card-Payment-Condition" >
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Credit/Debit Card Payment Condition</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Credit-Debit-Card-Payment-Condition.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Internet-Bookings" >
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Internet Bookings</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Internet-Bookings.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Medical-Certificate" >
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Medical Certificate</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Medical-Certificate.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="Medical-Form" >
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Medical Form</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Medical-Form.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box --> 

                    <div class="form-box" id="Online-Travel-Agents" >
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Online Travel Agents</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Online-Travel-Agents.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    
                    <div class="form-box" id="Privacy-Policy" >
                        <div class="form-title-wrap">
                            <h3 class="title  font-weight-bold">Privacy Policy</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{asset('assets/pdf/terms-conditions/Privacy-Policy.pdf')}}" width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    
                    <!--<div class="form-box" id="Refund-and-Change-Policy" >-->
                    <!--    <div class="form-title-wrap">-->
                    <!--        <h3 class="title  font-weight-bold">Refund and Change Policy</h3>-->
                    <!--    </div><!-- form-title-wrap -->
                    <!--    <div class="form-content contact-form-action">-->
                    <!--        <iframe src="{{asset('assets/pdf/terms-conditions/Refund-and-Change-Policy.pdf')}}" width="100%" height="700px">-->
                    <!--        </iframe>-->
                    <!--    </div><!-- end form-content -->
                    <!--</div><!-- end form-box -->

                </div><!-- end col-lg-8 -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end job-details-area -->


    @push('custom-script')
        <script type="text/javascript">

        </script>
    @endpush

@endsection


