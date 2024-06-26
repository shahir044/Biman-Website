@extends('header-footer')


@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-loyalty-club">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Loyalty Club</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{route('loyalty.home')}}">Loyalty Club</a></li>
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
    START CONTACT AREA
================================= -->
    <section class="contact-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Welcome to Biman Loyalty Club</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <p class="align-content-end">Biman is pleased to announce resumption of Loyalty Club member services on website, and our valuable members may now log-in to their accounts to update profile information and review activity such as miles earned.<br> Please feel free to contact Biman Loyalty Team at:<span class="text-danger">bimanloyaltyclub@bdbiman.com </span> with any inquiries or comments that you may have. As always, Biman Loyalty Club is open for any of our customers to join and benefit from various special offers and mileage rewards earned on every Biman flight.</p>

                                <div class="pt-4">
                                    <ul class="list-items list--items list-group list-items-flush">

                                        <li>
                                            <a href="{{route('loyalty.register')}}">
                                                <i class="la la-arrow-right"></i> Join the Loyalty Club today!
                                            </a>
                                        </li>

                                    </ul>
                                <!-- <ul class="list-items list--items list-group list-items-flush">
                                        <li>
                                            <a href="{{route('loyalty.earn')}}">
                                            <i class="la la-arrow-right"></i> Earning Miles
                                            </a>
                                        </li>
                                    </ul> -->
                                <!-- <ul class="list-items list--items list-group list-items-flush">
                                        <li>
                                            <a href="{{route('loyalty.redeem')}}">
                                            <i class="la la-arrow-right"></i> Redeeming Miles
                                            </a>
                                        </li>
                                    </ul> -->
                                <!-- <ul class="list-items list--items list-group list-items-flush">
                                        <li>
                                            <a href="{{route('loyalty.lounge')}}">
                                            <i class="la la-arrow-right"></i> Airport Lounges
                                            </a>
                                        </li>
                                    </ul> -->
                                    <ul class="list-items list--items list-group list-items-flush">
                                        <li>
                                            <a href="{{route('loyalty.tc')}}">
                                                <i class="la la-arrow-right"></i> Terms and Conditions
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-items list--items list-group list-items-flush">
                                        <li>
                                            <a href="{{route('loyalty.faq')}}">
                                                <i class="la la-arrow-right"></i> FAQs
                                            </a>
                                        </li>
                                    </ul>
                                    <p>Already a member?<a href="{{route('login')}}" target="__blank"> <span class="text-danger font-weight-bold">Login</span></a></p>
                                </div>

                            </div><!-- end contact-form-action -->
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Join the Club Today</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content">
                            <div>
                                <img src="{{asset('assets/images/loyalty/loyalty-club.png')}}" style="height: 40px"/>
                            </div>
                            <div class="pt-4">
                                <p>Enjoy the rewards of membership, earn miles, and get access to special offers.
                                    Take a few moments and make your travel more rewarding in the future. Only one account per member allowed.
                                    For any queries
                                </p>
                                <hr>
                                <div class="address-book">
                                    <ul class="list-items contact-address">

                                        <li>
                                            <i class="la la-phone icon-element"></i>
                                            <h5 class="title font-size-16 pb-1">Phone</h5>
                                            <p class="map__desc">+880 2 8901600  Ext. 2524/2525</p>
                                        </li>
                                        <li>
                                            <i class="la la-envelope-o icon-element"></i>
                                            <h5 class="title font-size-16 pb-1">Email</h5>
                                            <p class="map__desc">blccallcenter@bdbiman.com</p>
                                        </li>
                                    </ul>
                                </div>
                                {{--<p class="pt-4">Click <a href="{{route('loyalty.tc')}}"> <span class="text-danger">here</span> </a> to view Terms and Conditions</p>--}}
                            </div>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Membership Tier Levels</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/loyalty/card.png')}}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/loyalty/package.png')}}"/>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="table-form table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bg-success" scope="col">Green Member</th>
                                                <th class="bg-silver" scope="col">Silver Member</th>
                                                <th class="bg-gold" scope="col">Gold Member</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Open and free membership for everybody. No minimum requirements.</td>
                                                <td>You need to have 50,000 miles per year to become a Silver Biman Loyalty Club member.</td>
                                                <td>You need to have 75,000 miles per year to become a Gold Biman Loyalty Club member.</td>
                                            </tr>

                                            <tr>
                                                <td>A personal welcome letter from the Biman Loyalty Club with a Green card and two baggage cards after four domestic or two international flight activities.</td>
                                                <td>You will receive a new personal Silver card, two personal baggage cards and a welcome letter from the CEO.</td>
                                                <td>You will receive a new personal Gold card, two personal baggage cards and an exclusive gift with a welcome letter from the CEO.</td>
                                            </tr>

                                            <tr>
                                                <td>Miles are valid for a period of two years.</td>
                                                <td>Silver membership for a minimal period of two years. To maintain Silver status you will need to fly 50,000 miles.</td>
                                                <td>Gold membership for a minimal period of two years. To maintain Gold status you will need to fly 75,000 miles.</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Special Gold welcome pack with exclusive present and invitations to VIP events with other Gold members.</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Best seats on the aircraft and we offer an empty seat next to a Gold member if the booking situation allows this.</td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="table-form table-responsive">
                                        <table class="table lc-services">
                                            <thead>
                                            <tr>
                                                <th scope="col">Benefits</th>
                                                <th class="bg-success" scope="col">Green Member</th>
                                                <th class="bg-silver" scope="col">Silver Member</th>
                                                <th class="bg-gold" scope="col">Gold Member</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Earn & Burn on all flights</td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>
                                            <tr>
                                                <td>Advanced seating reservation</td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>
                                            <tr>
                                                <td>Exclusive offers</td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>

                                            <tr>
                                                <td>First to know about Biman news and special fares</td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>
                                            <tr>
                                                <td>Payment of excess luggage, lounge access & upgrade with miles</td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>


                                            <tr>
                                                <td>Two personal baggage cards with welcome letter</td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>
                                            <tr>
                                                <td>Priority Check-in</td>
                                                <td></td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>


                                            <tr>
                                                <td>Lounge access for you and one companion</td>
                                                <td></td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>
                                            <tr>
                                                <td>Priority redemption availability</td>
                                                <td></td>
                                                <td><span>&#10003;</span></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>

                                            <tr>
                                                <td>Additional free baggage allowance</td>
                                                <td></td>
                                                <td>10 kgs</td>
                                                <td>20 kgs</td>
                                            </tr>
                                            <tr>
                                                <td>Mileage Bonus</td>
                                                <td></td>
                                                <td>10%</td>
                                                <td>20%</td>
                                            </tr>


                                            <tr>
                                                <td>Guaranteed seat on all Biman flights up to 48 hours before departure</td>
                                                <td></td>
                                                <td></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>
                                            <tr>
                                                <td>Best seats on the aircraft and an empty adjacent seat (if available)</td>
                                                <td></td>
                                                <td></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>


                                            <tr>
                                                <td>No redemption black-out up to 48h. before departure</td>
                                                <td></td>
                                                <td></td>
                                                <td><span>&#10003;</span></td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end contact-form-action -->
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end col-lg-8 -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end contact-area -->
    <!-- ================================
    END CONTACT AREA
================================= -->
@endsection

