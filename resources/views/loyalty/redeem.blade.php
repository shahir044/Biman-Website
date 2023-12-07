@extends('header-footer')


@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-loyalty-redeem">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Redeeming Miles</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{route('loyalty.home')}}">Loyalty Club</a></li>
                                <li><a href="{{route('loyalty.redeem')}}">Redeeming Miles</a></li>
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
                            <h3 class="title">Redeeming Miles</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <p class="align-content-end">Biman Loyalty Club members can start redeeming miles as soon as you accumulate sufficient miles in your account.</p>
                                <div class="row pt-4">
                                    <div class="table-form table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                Redeem Miles for Reward Ticket</tr>
                                            <tr>
                                                <th>From/to Dhaka</th>
                                                <th scope="col">Economy Class</th>
                                                <th scope="col">Business Class</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3">
                                                    *redemption rates in miles per round-trip, excluding all taxes and applicable fees <br>
                                                    *redemption for children is 75% of the listed rates <br>
                                                    *Please <a href="#">log-in your membership account</a> and issue the Reward Ticket against your accumulated miles
                                                </td>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <tr>
                                                <td>Chittangong, Sylhet, Barisal, Cox's Bazar, Jessore, Rajshahi, Saidpur</td>
                                                <td>10000</td>
                                                <td>20000</td>
                                            </tr>

                                            <tr>
                                                <td>Kolkata, Kathmandu, Yangon</td>
                                                <td>15000</td>
                                                <td>30000</td>
                                            </tr>

                                            <tr>
                                                <td>Bangkok, Delhi, Hong Kong, Kuala Lumpur, Singapore</td>
                                                <td>20000</td>
                                                <td>40000</td>
                                            </tr>
                                            <tr>
                                                <td>Abu Dhabi, Dammam, Doha, Dubai, Jeddah, Kuwait, Riyidh, Muscat</td>
                                                <td>45000</td>
                                                <td>90000</td>
                                            </tr>
                                            <tr>
                                                <td>London, Rome</td>
                                                <td>80000</td>
                                                <td>160000</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
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
                                </p>
                                <p class="pt-4">Click <a href="{{route('loyalty.tc')}}">here</a> to view Terms and Conditions</p>
                            </div>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="form-box">
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <p class="align-content-end">Biman Loyalty Club members can also redeem their miles for an upgrade from economy class to business class. The upgrade redemption depends on availability in the redemption booking class.</p>
                                <div class="row pt-4">
                                    <div class="table-form table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                Redeem Miles for an Upgrade</tr>
                                            <tr>
                                                <th>From/to Dhaka</th>
                                                <th scope="col">Redemption Miles</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3">
                                                    *redemption rates in miles per one-way, excluding all taxes and applicable fees<br>
                                                    *upgrade is not available for super-saver fares<br>
                                                    *member has to send prior e-mail request to <span class="text-danger">bimanloyaltyclub@bdbiman.com</span> before the black-out date <br>
                                                    *please see the <a href="{{route('loyalty.tc')}}">terms & conditions</a> in the website.
                                                </td>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <tr>
                                                <td>Chittangong, Sylhet, Barisal, Cox's Bazar, Jessore, Rajshahi, Saidpur</td>
                                                <td>10000</td>
                                                <td>20000</td>
                                            </tr>

                                            <tr>
                                                <td>Kolkata, Kathmandu, Yangon</td>
                                                <td>15000</td>
                                                <td>30000</td>
                                            </tr>

                                            <tr>
                                                <td>Bangkok, Delhi, Hong Kong, Kuala Lumpur, Singapore</td>
                                                <td>20000</td>
                                                <td>40000</td>
                                            </tr>
                                            <tr>
                                                <td>Abu Dhabi, Dammam, Doha, Dubai, Jeddah, Kuwait, Riyidh, Muscat</td>
                                                <td>45000</td>
                                                <td>90000</td>
                                            </tr>
                                            <tr>
                                                <td>London, Rome</td>
                                                <td>80000</td>
                                                <td>160000</td>
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


            <div class="row">
                <div class="col-lg-8">
                    <div class="form-box">
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <p class="align-content-end">Biman Loyalty Club members can also redeem miles for Excess Baggage as follows</p>
                                <div class="row pt-4">
                                    <div class="table-form table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                Redeem Miles for Excess Baggage</tr>
                                            <tr>
                                                <th>From/to Dhaka</th>
                                                <th scope="col">Redemption per KG</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3">
                                                    *member has to send prior e-mail request to <span class="text-danger">bimanloyaltyclub@bdbiman.com</span> before the black-out date <br>
                                                    *please see the <a href="{{route('loyalty.tc')}}">terms & conditions</a> in the website.
                                                </td>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <tr>
                                                <td>Chittangong, Sylhet, Barisal, Cox's Bazar, Jessore, Rajshahi, Saidpur</td>
                                                <td>150</td>
                                            </tr>

                                            <tr>
                                                <td>Kolkata, Kathmandu, Yangon</td>
                                                <td>250</td>
                                            </tr>

                                            <tr>
                                                <td>Bangkok, Delhi</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Hong Kong, Kuala Lumpur, Singapore</td>
                                                <td>450</td>
                                            </tr>
                                            <tr>
                                                <td>Abu Dhabi, Dammam, Doha, Dubai, Jeddah, Kuwait, Riyidh, Muscat</td>
                                                <td>675</td>
                                            </tr>

                                            <tr>
                                                <td>London, Rome</td>
                                                <td>1200</td>
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

            <div class="row">
                <div class="col-lg-8">
                    <div class="form-box">
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <p class="align-content-end">If you are not Biman Silver or Gold member but a Green member, in that case you can enjoy lounge access at airport by redeeming your accumulated miles. Airport lounge facilities are available at different airports of Biman network. Please visit our website at www.biman-airlines.com/services/airport for details.</p>
                                <div class="row pt-4">
                                    <div class="table-form table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                Redeem Miles for Lounge Access at Airport</tr>
                                            <tr>
                                                <th>From/to Dhaka</th>
                                                <th scope="col">Redemption per Access</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3">
                                                    *member has to send prior e-mail request to <span class="text-danger">bimanloyaltyclub@bdbiman.com</span> before the black-out date <br>
                                                    *please see the <a href="{{route('loyalty.tc')}}">terms & conditions</a> in the website.
                                                </td>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <tr>
                                                <td>Chittangong, Sylhet, Barisal, Cox's Bazar, Jessore, Rajshahi, Saidpur</td>
                                                <td>1000</td>
                                            </tr>

                                            <tr>
                                                <td>Kolkata, Kathmandu, Yangon, Bangkok, Delhi, Hong Kong, Kuala Lumpur, Singapore, Abu Dhabi, Dammam, Doha, Dubai, Jeddah, Kuwait, Riyidh, Muscat, Rome</td>
                                                <td>2000</td>
                                            </tr>
                                            <tr>
                                                <td>London</td>
                                                <td>4000</td>
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

