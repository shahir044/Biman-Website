@extends('header-footer')


@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-loyalty-earn">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Earning Miles</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{route('loyalty.home')}}">Loyalty Club</a></li>
                                <li><a href="{{route('loyalty.earn')}}">Earning Miles</a></li>
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
                            <h3 class="title">Earning Miles</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <p class="align-content-end">Biman Loyalty Club members can now earn miles for the bookings class and the number of miles travelled on all Biman operated flights for the following categories:</p>
                                <div class="row pt-4">
                                    <div class="table-form table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>Earning Miles on Biman Flights</tr>
                                            <tr>
                                                <th></th>
                                                <th scope="col">Route</th>
                                                <th scope="col">Miles</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3">
                                                    *earning miles are per one-way route <br>
                                                    *children will be awarded 75% of the listed miles
                                                </td>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Domestic flights</td>
                                                <td>100</td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Kolkata, Kathmandu, Yangon</td>
                                                <td>500</td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>Bangkok, Delhi</td>
                                                <td>1000</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Hong Kong, Kuala Lumpur, Singapore</td>
                                                <td>1750</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>GCC destinations</td>
                                                <td>2500</td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>London, Rome, Frankfurt</td>
                                                <td>5000</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Booking Codes</td>
                                                <td class="font-weight-bold">Fare Family</td>
                                                <td class="font-weight-bold">Award</td>
                                            </tr>

                                            <tr>
                                                <td>K, V, O, T</td>
                                                <td>Super Saver</td>
                                                <td>100%</td>
                                            </tr>

                                            <tr>
                                                <td>B, H, E, M, W, Q</td>
                                                <td>Economy Saver</td>
                                                <td>125%</td>
                                            </tr>

                                            <tr>
                                                <td>A, N, L, P, S, Y</td>
                                                <td>Economy Flexible</td>
                                                <td>175%</td>
                                            </tr>


                                            <tr>
                                                <td>D</td>
                                                <td>Business Saver</td>
                                                <td>200%</td>
                                            </tr>

                                            <tr>
                                                <td>C, J</td>
                                                <td>Business Flexible</td>
                                                <td>250%</td>
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

        </div><!-- end container -->
    </section><!-- end contact-area -->
    <!-- ================================
    END CONTACT AREA
================================= -->
@endsection

