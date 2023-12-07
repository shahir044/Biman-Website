@extends('header-footer')


@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-loyalty-faq">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">FAQs</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{route('loyalty.home')}}">Loyalty Club</a></li>
                                <li><a href="{{route('loyalty.faq')}}">FAQs</a></li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->
    <!-- ================================
        START FAQ AREA
    ================================= -->
    <section class="faq-area section-bg padding-top-100px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Frequently Asked Questions</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-6 card pt-3">
                    <div class="faq-item mb-5">
                        <h3 class="title font-weight-bold">Enrollment & Benefits</h3>
                        <ul class="toggle-menu list-items list-items-flush pt-4">
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    How can I become a member of Biman Loyalty Club?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        You can enroll online now by clicking <a href="{{route('loyalty.register')}}"
                                                                                 target="_blank"
                                                                                 class="faq-links">here</a>.
                                    </li>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    How can I reset my password?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        You can reset your password by clicking <a href="{{route('loyalty.forgot-password-view')}}"
                                                                                 target="_blank"
                                                                                 class="faq-links">here</a>.
                                    </li>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    Who can join Biman Loyalty Club?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        Any person the age of 2 years or older can join Biman Loyalty Club.
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    What are the benefits of joining Biman Loyalty Club?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        Biman Loyalty Club members earn miles that can be spent on flights and flight
                                        related services.
                                        Biman Loyalty Club has 3 membership tiers: you start as a Green Member,
                                        the more you fly with Biman Bangladesh Airlines the higher your membership tier
                                        becomes.
                                        Each membership tier is packed with benefits and privileges. Silver and Gold
                                        tiers bring more exclusive benefits such as free lounge access, extra baggage
                                        allowance, priority check-in and more. Please visit the website, log-in your
                                        account and see the Benefits, Rules and <a class="text-danger" href="{{route('loyalty.tc')}}">Terms & Conditions</a> of Biman Loyalty
                                        Club.
                                    </li>
                                </ul>
                            </li>
                            {{--  <li>
                                  <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                      When will I get my Green Card?
                                      <i class="la la-angle-down"></i>
                                  </a>
                                  <ul class="toggle-drop-menu pt-2">
                                      <li class="line-height-26">
                                      <li>
                                          You will receive your Green card after availing 4 one way domestic flights or 2
                                          round trip domestic flights or 2 one way international flights or 1
                                          international round trip flight.
                                          Your card will be delivered by Courier/DHL at your mailing address. This is also
                                          subject to verification of your postal mailing address when asked by us to do
                                          so. Biman Loyalty Club will not deliver any welcome kit (including your plastic
                                          card) at your residential address by DHL (outside Bangladesh) or postal services
                                          (within Bangladesh) unless the address is verified by you. Card print and
                                          delivery takes around 8 weeks after address verification.
                                      </li>
                                      </li>
                                  </ul>
                              </li>--}}
                            {{--   <li>
                                   <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                       What do I do if my Biman Loyalty card is lost or stolen?
                                       <i class="la la-angle-down"></i>
                                   </a>
                                   <ul class="toggle-drop-menu pt-2">
                                       <li class="line-height-26">
                                       <li>Please inform the Biman Loyalty Club Head office at the earliest if you have
                                           lost your card. The loss of this card will not result in the loss of your miles.
                                           The Service team will request a new card for you and it will be sent to you
                                           directly which will take around 8 week time. Green Card and Silver holders will
                                           be charged USD 20 or 5000 Miles and Gold members will be mailed replacement
                                           cards free of charge.
                                       </li>
                                       </li>
                                   </ul>
                               </li>--}}
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    Is a family account permitted?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>No, enrolment can only be done on an individual basis. Each member must have a
                                        unique e-mail address for enrollment.
                                        One e-mail address can only be used for opening of just one account. If you want
                                        to open two separate accounts in that case you need two separate e-mail
                                        addresses.
                                    </li>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div><!-- end faq-item -->
                </div>
                <div class="col-lg-6 card pt-3" id="group_booking">
                    <div class="faq-item mb-5">
                        <h3 class="title font-weight-bold">Earning Miles</h3>
                        <ul class="toggle-menu list-items list-items-flush pt-4">
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    Will I earn miles for my past flights with Biman Bangladesh Airlines prior to the
                                    date of joining the program?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        Yes, you can earn miles for Biman Operated flights taken up to 90 days before
                                        your date of joining in Biman Loyalty Club. Please read the <a class="text-danger" href="{{route('loyalty.tc')}}">Terms & Conditions</a>
                                        mentioned in our website.
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    How can I earn miles?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>Currently miles can only be earned on flights travelled. You must insert your
                                        Biman Loyalty Club (BLC) Membership Number in your reservation to get your miles
                                        auto credited into your Membership Account.
                                        Please tell your Travel Agent or request Airline Reservation Staff to insert the
                                        FFP membership number. Your miles will be credited to your FFP account after
                                        departure of the each flight sector.
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    How long does it take for miles to be credited to my account?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>It takes up to maximum 07 days to get credited to your account provided that
                                        your FFP Membership number is correctly inserted into the booking/reservation.
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    How can I make sure I get all my miles rewarded?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        Just quote your Biman Loyalty club number every time you make a booking or
                                        check-in for a flight.
                                        Confirm that the name on your reservation matches the name mentioned on your
                                        Biman Loyalty card. This will insure that miles are credited to your account
                                        promptly and accurately.
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    How do I move up the tier status to Silver and Gold?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>To reach silver status you require 50000 Miles
                                    </li>
                                    <li>To reach Gold status you require 75000 miles
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    What are the benefits for children age 2-11
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>Children age 2-11 are eligible to Earn and Redeem 75% of the listed miles.
                                    </li>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div><!-- end faq-item -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 card pt-3">
                    <div class="faq-item mb-5">
                        <h3 class="title font-weight-bold">Spending Biman Loyalty Club Miles</h3>
                        <ul class="toggle-menu list-items list-items-flush pt-4">
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    How can I request a flight reward for free Ticket against my miles?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        Online Redemption is temporarily unavailable till the Dynamic Rewards becomes functional. To obtain the loyalty benefits please
                                        contact at <span style="color: #dc3545!important"><a class="text-danger" href="mailto: bimanloyaltyclub@bdbiman.com">bimanloyaltyclub@bdbiman.com</a></span>
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    Can I redeem miles for a One-Way trip?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>Yes, you can redeem miles for a one-way trip
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    Are flight rewards inclusive of taxes?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        No. flight Rewards are not inclusive of tax, fees and surcharges. You will have
                                        to pay them at the time of issuing the ticket
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    Can i make changes to my reward request?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        Changes are permitted under certain conditions. Please see Clause-8.34 of the
                                        <a class="text-danger" href="{{route('loyalty.tc')}}">Terms & Conditions</a> mentioned in our website at biman-airlines.com/LC/terms.
                                        After deadline – No changes are permitted. Only the unused taxes will be
                                        refunded.
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    Can I use my Biman Loyalty club miles to book a reward flight for family and
                                    friends?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        Yes, you can redeem flight rewards for anyone you wish.
                                    </li>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- end faq-item -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 card pt-3" id="payment">
                    <div class="faq-item mb-5">
                        <h3 class="title font-weight-bold">Claim Missing Miles</h3>
                        <ul class="toggle-menu list-items list-items-flush pt-4">
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    When should I claim my missing miles?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>When you see miles are not credited into your membership account after travel in
                                        that case you must claim your missing miles within 90 days from the date of
                                        travel.
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    How can I claim my missing miles?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        Please log-in your account and go through “Flight Mileage Claim” tab and fill
                                        the required information and send to us.
                                        {{--You may also send request to us at Bimanloyaltyclub@bdbiman.com for missing
                                        miles mentioning a) Scan copy of your passport & Boarding Pass and b) Ticket
                                        number. All requests must reach us within 90 days from your date of travel.--}}
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div><!-- end faq-item -->
                </div><!-- end col-lg-6 -->

                <div class="col-lg-6 card pt-3" id="children">
                    <div class="faq-item mb-5">
                        <h3 class="title font-weight-bold">Change of Tier Status</h3>
                        <ul class="toggle-menu list-items list-items-flush pt-4">
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    When my Tier Status from Green to Silver or Silver to Gold will be changed?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        When you reach 50,000 miles in your account then you will achieve Silver Status,
                                        and when you reach 75,000 miles then you will achieve Gold Status.
                                    </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    I have reached 50,000 miles and still it is showing Green Status in my account. Why
                                    not my Tier Status is changed?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        Change of Tier Status is processed automatically on a nightly basis.
                                        The required miles earned for tier status must be earned within the designated
                                        date range limits. In order to achieve Silver tier you must earn 50,000 miles on
                                        flights operated by BIMAN BANGLADESH AIRLINES LTD in one year.
                                    </li>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="toggle-menu-icon d-flex justify-content-between align-items-center">
                                    I have reached 75,000 miles and still it is showing Silver Status in my account. Why
                                    not my Tier Status is changed?
                                    <i class="la la-angle-down"></i>
                                </a>
                                <ul class="toggle-drop-menu pt-2">
                                    <li class="line-height-26">
                                    <li>
                                        Change of Tier Status is processed automatically on a nightly basis.
                                        The required miles earned for tier status must be earned within the designated
                                        date range limits. In order to achieve Gold tier you must earn 75,000 miles on
                                        flights operated by BIMAN BANGLADESH AIRLINES LTD in one year.
                                    </li>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div><!-- end faq-item -->
                </div><!-- end col-lg-6 -->
                <!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end faq-area -->
    <!-- ================================
        END FAQ AREA
    ================================= -->

@endsection
