@extends('header-footer')

@section('header-extension')
    <style>
        .bread-bg-special-assistance {
            background-image: url("/assets/images/misc/special-assistance.png");
        }
    </style>
@endsection

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area before-none  bread-bg-special-assistance">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                            <div class="section-heading text-left">
                                <h4 class="sec__title text-white">Accessibility Services</h4>
                                <h5 class="sec__desc text-white mt-3 d-none d-sm-block">We provide comprehensive services for
                                    disabled and elderly people who require additional care and attention.</h5>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div>
        <!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <section class="contact-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="form-box">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Accessibility Services</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action text-justify">
                                <p class="py-2">In order to comply with the requirements under the Accessible Canada Act (ACA)
                                    and the Accessible
                                    Transportation Planning and Reporting Regulations (ATPRR), Biman Bangladesh Airlines Ltd is
                                    committed to avert and eliminate barriers to ensure accessibility.</p>
                                <p class="py-2">
                                    For better insight for preparing this accessibility plan necessary inputs are taken from different organizations such as National Foundation for Development of the Disabled Persons-Govt. of Bangladesh; Persons with Disabilities Rights and Protection Act 2015 - Govt. of Bangladesh; National Forum of Organizations Working with Disabled (NFOWD) - Govt. of Bangladesh and Centre for the Rehabilitation of the Paralyzed (CRP), Bangladesh. For strengthening the plan, persons having disabilities will be consulted; opinions will be taken from different category of people in order to pinpoint probable barriers and to find a way out to for possible solution.
                                </p>
                                <a href="{{route('accessibility-plan')}}"><button class="btn btn-lg btn-outline-success font-weight-semi-bold my-2"><i class="la la-chevron-right mr-1"></i>View Accessibility Plan</button></a>
                            </div><!-- end contact-form-action -->
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-5">
                    <div class="form-box">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Contact & Feedback</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content">
                            <div>
                                <p>If you need any assistance with your upcoming travel plans or have any questions, contact us
                                using following platforms. We would be happy to assist you.
                                </p>
                                <hr>
                                <div class="address-book">
                                    <ul class="list-items contact-address">
                                        <li>
                                            <i class="la la-user icon-element"></i>
                                            <h5 class="title font-size-16 pb-1">Contact Person</h5>
                                            <p><b>General Manager, Customer Services Division</b><br>
                                                Balaka Bhaban, Biman Head Office<br>
                                                Kurmitola, Dhaka-1229,
                                                Bangladesh</p>
                                        </li>
                                        <li>
                                            <i class="la la-phone icon-element"></i>
                                            <h5 class="title font-size-16 pb-1">Phone</h5>
                                            <p class="map__desc"><p><b>Bangladesh:</b><br> +880 1777715533-Station Manager, Airport Services (24x7)
                                                <br>
                                                 +880 1758566894-Manager,Ground Services (Day Time Only)
                                            </p>

                                            <p><b>Canada:</b><br>  +1 437 425 2874-Station Manager (Day Time Only)<br> +1 416 546 2121-Sales/Reservation (Day Time Only)
                                            </p>
                                        </li>
                                        <li>
                                            <i class="la la-envelope-o icon-element"></i>
                                            <h5 class="title font-size-16 pb-1">Email</h5>
                                            <a class="text-color-2" href="mailto:mgrgs@biman.gov.bd">mgrgs@biman.gov.bd</a>
                                        </li>
                                    </ul>
                                </div>
                                {{--<p class="pt-4">Click <a href="{{route('loyalty.tc')}}"> <span class="text-danger">here</span> </a> to view Terms and Conditions</p>--}}
                            </div>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end contact-area -->

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->
@endsection

@section('page-specific-footer')
    <script>
        // Smooth scrolling to sections
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);

                if (targetSection) {
                    window.scrollTo({
                        top: targetSection.offsetTop + 400, // Adjust this value as needed
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
@endsection
