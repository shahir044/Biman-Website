
@extends('header-footer')

@section('header-extension')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> --}}

    <style type="text/css">
        .daterangepicker {
            font-size: 9rem !important
        }

    </style>
@endsection

@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-9">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-50 text-white">Biman Bangladesh Airlines <br> Your Home In The Sky</h2>
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
    START ABOUT AREA
================================= -->
<section class="about-area padding-top-90px padding-bottom-90px overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2 class="sec__title">CEO's Message</h2> <br> <br> <br>
                    <!--<h4 class="title font-size-16 line-height-26 pt-4 pb-2">A Message from the Managing Director and Chief Executive Officer</h4>-->
                    <p style="text-align:justify; font-size: 16px; color: black;">Respected passenger,<br>
                        <br>
                        Welcome on board to Biman Bangladesh Airlines, the national flag carrier of Bangladesh. We are pleased to have the opportunity to serve our valued passengers since 1972. Best wishes to you for being with us in this glorious journey. It is our top priority to make your journey comfortable, enjoyable and above all safe. On the way, you will enjoy cordial Bengali hospitality including delicious traditional Bengali cuisine.                 
                </div><!-- end section-heading -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-3 ml-auto">
                <div class="image-box about-img-box">
                    <img src="{{URL::asset('assets/images/ceo/CEO2_shafiulazim_12_12_2022.jpeg')}}" alt="MD&CEO" class="img__item img__item-1">
                    <!--<img style="left: -30px !important" src="{{URL::asset('assets/images/logo/biman_red_logo.jpg')}}" alt="about-img" class="img__item img__item-2">-->
                    
                </div>
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    
                        <p style="text-align:justify; font-size: 16px; color: black;">
                        <br>
                        We are delighted to inform you that in 2023, Biman Bangladesh Airlines has been awarded with the prestigious certificate of registration and accreditation under <b>International Air Transport Association (IATA) Safety Audit for Ground Operations (ISAGO)</b> program for our ground handling operation at Hazrat Shahjalal International Airport, Dhaka. This ISAGO certificate will provide confidence to our passengers, customer airlines and the regulators that the airline is maintaining internationally accepted standards for ground handling services.                
                            <br><br>
                            Biman has been an IOSA (IATA Operational Safety Audit) registered airlines since 2008; now it is an ISAGO registered ground service provider. These certificates indicate that our flight and ground operation have been maintaining internationally accepted policies, processes and procedures in delivering services. Regarding safety issue, there is no scope for complacency. Following the national and international standards for safety and security without compromise, we hope the slogan ‘Safety First’ is going to be deeply embedded in our DNA.    
                        <br><br>Biman Bangladesh Airlines uses its wide range of network to transport the respected passengers directly to more than 20 destinations around the world. In the years ahead, Biman is determined to further expand its horizon in 360 degrees. The brand new Boeing 787 Dreamliners have been added to the Biman’s fleet to fulfill the expectations of our travel-loving passengers around the world.
                        <br><br>Respected passengers are kindly requested to visit the website <b><a style="color:deepgreen" href="www.biman-airlines.com" target="_blank">www.biman-airlines.com</a></b> to find the flight information such as flight status, flight schedule, address of sales centers, online ticket and refund helpdesk and associated information regarding expected ticketing. 
                        <br><br>I would like to express my heartiest gratitude to you for traveling with Biman. Wishing you a safe and comfortable journey. Joy Bangla.
                        <ul>
                        <br><li style="text-align:justify; font-size: 16px; color: black;">Shafiul Azim
                        </li>
                        <li style="text-align:justify; font-size: 16px; color: black;">
                        Managing Director &amp; CEO
                        </li>
                        <li style="text-align:justify; font-size: 16px; color: black;">
                        Biman Bangladesh Airlines Limited 
                        </li>
                        </ul>
                        </p><br><br>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-6 -->
           
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading margin-bottom-40px">
                    <img src="{{URL::asset('assets/images/logo/BG-Livery - Copy.jpg')}}" alt="about-img" class="img__item img__item-1">
                </div><!-- end section-heading -->
            </div><!-- end col-lg-6 -->
           
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!-- ================================
    END ABOUT AREA
================================= -->


@endsection

@section('page-specific-footer')

@endsection