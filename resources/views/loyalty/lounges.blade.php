@extends('header-footer')

@section('header-extension')

@endsection

@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-loyalty-lounge">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Airport Lounges</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{route('loyalty.home')}}">Loyalty Club</a></li>
                                <li><a href="{{route('loyalty.lounge')}}">Airport Lounges</a></li>
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
        START JOB-DETAILS AREA
    ================================= -->
    <section class="job-details-area   section--padding" id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="main">
                    <div class="form-box" id="list-item-1">
                        <div class="form-title-wrap">
                            <h3 class="title font-weight-bold">Available around the globe for business class
                                passengers</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">

                            <div class="pb-4">
                                <figure class="text-center" style="height: 250px">
                                    <img src="{{asset('assets/images/loyalty/lounge.png')}}" style="height: 100%; width: 50%"/>
                                </figure>

                            </div>
                            <div class="table-form table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">City</th>
                                        <th scope="col">Airport</th>
                                        <th scope="col">Lounge</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>Abu Dhabi</td>
                                        <td>
                                            Abu Dhabi International
                                            Airport
                                        </td>
                                        <td>Al Gaza</td>
                                    </tr>
                                    <tr>
                                        <td>Bangkok</td>
                                        <td>
                                            Suvarnabhumi
                                            Airport
                                        </td>
                                        <td>
                                            Louise Tavern
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dammam</td>
                                        <td>

                                            King Fahad
                                            International Airport

                                        </td>
                                        <td>Al-Noor Lounge</td>
                                    </tr>
                                    <tr>
                                        <td>Delhi</td>
                                        <td>
                                            Indiragandhi
                                            International Airport

                                        </td>
                                        <td>Delhi Daredevils</td>
                                    </tr>
                                    <tr>
                                        <td>Dhaka</td>
                                        <td>
                                                Hazrat Shahjalal
                                                International Airport

                                        </td>
                                        <td>Maslin</td>
                                    </tr>
                                    <tr>
                                        <td>Doha</td>
                                        <td>
                                                Doha International
                                                Airport

                                        </td>
                                        <td>Oryx</td>
                                    </tr>
                                    <tr >
                                        <td>Dubai</td>
                                        <td>
                                                Dubai International
                                                Airport

                                        </td>
                                        <td>Marhaba</td>
                                    </tr>
                                    <tr>
                                        <td>
                                                Hong Kong

                                        </td>
                                        <td>
                                                Hong Kong
                                                International Airport

                                        </td>
                                        <td>
                                                Plaza Premium
                                                Lounge

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jeddah</td>
                                        <td>
                                                King Abdul
                                                Aziz International Airport

                                        </td>
                                        <td>First Class
                                                Lounge</td>
                                    </tr>
                                    <tr>
                                        <td>Kathmandu</td>
                                        <td>
                                                Tribhuban
                                                International Airport

                                        </td>
                                        <td>Executive Lounge
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kolkata</td>
                                        <td>
                                                NSCB International
                                                Airport

                                        </td>
                                        <td>P.K. Hospitality
                                                Lounge</td>
                                    </tr>
                                    <tr>
                                        <td>
                                                Kuala Lumpur

                                        </td>
                                        <td>KL International
                                                Airport</td>
                                        <td>Golden Lounge
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kuwait</td>
                                        <td>
                                                Kuwait International
                                                Airport

                                        </td>
                                        <td>Dasman Lounge
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>London</td>
                                        <td>Heathrow Airport
                                        </td>
                                        <td>
                                                Gulf Air
                                                Lounge

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Muscat</td>
                                        <td>
                                                Muscat International
                                                Airport

                                        </td>
                                        <td>Majan Lounge
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Riyadh</td>
                                        <td>
                                                King Khaled
                                                International Airport

                                        </td>
                                        <td>Premier Lounge
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rome</td>
                                        <td>
                                                Fiumicino
                                                Airport

                                        </td>
                                        <td>LE Anfoe</td>
                                    </tr>
                                    <tr >
                                        <td>Singapore</td>
                                        <td>
                                                Changi International
                                                Airport

                                        </td>
                                        <td>
                                                SATS Premier
                                                Club

                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                </div><!-- end col-lg-8 -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end job-details-area -->

@endsection


