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
                                <h4 class="sec__title text-white">Accessibility Plan Progress Report 2024</h4>
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

    <!-- ================================
            START JOB-DETAILS AREA
        ================================= -->
    <section class="job-details-area   section--padding" id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 " id="sticky-sidebar">
                    <div class="sidebar mb-0 sticky-top">
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape  font-weight-bold">On this page</h3>
                            <ul class="list-items list--items list-group list-items-flush">
                                <li><span class="text-black mr-2"><a href="#general"  class="active" target="_self">General</a></span></li>
                                <li><span class="text-black mr-2"><a href="#ict" target="_self">Information and Communication Technologies (ICT)</a></span></li>
                                <li><span class="text-black mr-2"><a href="#communication">Communication, Other than ICT</a></span></li>
                                <li><span class="text-black mr-2"><a href="#procurement">Procurement of goods, services and facilities</a></span></li>
                                <li><span class="text-black mr-2"><a href="#design">Design and delivery of programs and services</a></span></li>
                                <li><span class="text-black mr-2"><a href="#transportation">Transportation</a></span></li>
                                <li><span class="text-black mr-2"><a href="#built">Built environment</a></span></li>
                                <li><span class="text-black mr-2"><a href="#provisions">Provisions of CTA accessibility-related regulations</a></span></li>
                                <li><span class="text-black mr-2"><a href="#consultations">Consultations</a></span></li>
                            </ul>
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">

                    <div class="form-box" id="general">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">General</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman Bangladesh Airlines is under commitment to implement its accessibility plan complying with the Accessible Canada Act(ACA) and Accessible Transportation Planning and Reporting Regulations (ATPRR). Biman Ground Service Manual asserts and guides how to handle people having disabilities but to be in line with regulations in Canada with regard to accessibility, Biman Bangladesh Airlines joins with different organizations who deals with different sorts of disabilities to get insight , strengthen commitment and streamline policies. 
                            </p>
                            <p>
                                In the year of 2023, Biman Bangladesh Airlines has formally made public its Accessibility Plan 2023-2026 to address the issues and needs of the people having disabilities to make their travel experience with Biman friendlier, easy, hassle-free and comfortable. An official having designation Manager Ground Service is assigned to receive feedback and to take action on the received information. Passengers can submit their feedback by sending post to Biman’s head office address or by direct calling or through sending email; detail information is available in Biman’s official webpage in the following link. 
                                <a href="https://www.biman-airlines.com/accessibility-plan" target="_blank">https://www.biman-airlines.com/accessibility-plan</a>
                            </p>
                            <h4 class="title font-weight-bold py-4">Feedback Information</h4>
                            <p>Passengers can submit feedback on accessibility via sending post to the mailing address or request via email, phone, or filling out the online form. </p>
                            <hr>
                            <ul class="list-items contact-address">
                                <li>
                                    <i class="la la-user icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">Mailing Address: </h5>
                                    <p><b>Manager Ground Service, Customer Services Division</b><br>
                                        Balaka Bhaban, Biman Head Office<br>
                                        Kurmitola, Dhaka-1229,
                                        Bangladesh</p>
                                </li>
                                <li>
                                    <i class="la la-phone icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">Phone</h5>
                                    <p class="map__desc"><p><b>Bangladesh:</b><br> 
                                        <a href="tel:+8801777715533">+88 01777715533</a>- Station Manager, Airport Services (24x7)
                                        <br>
                                         <a href="tel:+8801717103675">+88 01717103675</a>- Deputy Manager, Ground Services (Day Time Only)
                                    </p>

                                    <p><b>Canada:</b><br>
                                        <a href="tel:+14374252874">+1 437 425 2874</a>- Station Manager (Day Time Only)<br>
                                        <a href="tel:+14165462121">+1 416 546 2121</a>- Sales/Reservation (Day Time Only)
                                    </p>
                                </li>
                                <li>
                                    <i class="la la-envelope-o icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">Email</h5>
                                    <a class="text-color-2" href="mailto:mgrgs@biman.gov.bd">mgrgs@biman.gov.bd</a>
                                </li>
                                <li>
                                    <i class="la la-laptop icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">Online Feedback: </h5>
                                    <h6>You can submit anonymous feedback here.</h6>
                                    <a class="text-color-2" href="https://forms.office.com/r/bug0XVFZtR" target="_blank">Accessiblity Feedback Form<i class="las la-external-link-alt"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-box" id="ict">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Information and Communication Technologies (ICT)</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                The airline aims to comply with the Web Content Accessibility Guidelines (WCAG) 2.0 Level AA by September 2026. This includes making the website, mobile applications, and other online services more accessible through regular testing and updates based on feedback from users with disabilities. Biman has already created an online Accessibility Feedback Form in their website for submit anonymous feedback.
                            </p>
                        </div>
                    </div>

                    <div class="form-box" id="communication">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Communication, Other than ICT</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman ensures that passengers with disabilities receive appropriate support from trained personnel. This includes evaluating and exploring ways to support passengers with various disabilities to provide a safe and comfortable travel experience. Initial interactive session with the organizations deals with disabilities was held in May’24. We will have more sessions with the advisory committee members to get assistance for reviewing and updating training module for ground staffs, cabin crew and others. Development of instructions and signage that will be used to communicate with the disability people is also in our planning. Current status of this area is in progress and as per plan same will implemented by December 2025 and June 2026 respectively.
                            </p>
                        </div>
                    </div>

                    <div class="form-box" id="procurement">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Procurement of goods, services and facilities</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                We are at present developing the policy by incorporating the needs and requirements of the disable people while procurement of goods and services. Biman plans to complete the inclusion of these requirements in the procurement process by June 2025 and to create a list of suppliers who meet accessibility standards by June 2026.
                            </p>
                        </div>
                    </div>

                    <div class="form-box" id="design">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Design and delivery of programs and services </h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                The airline offers a range of services to assist passengers with disabilities, from booking to arrival. These services include providing wheelchairs, booking stretchers, priority boarding, and the carriage of service animals. In future, while procurement of programs and services that will serve the passengers will also include the requirements of target customers having disabilities taking the accessibility into consideration. As Biman Bangladesh Airlines is also act as a ground handler at airports in Bangladesh, we are planning to develop our procurement of goods, services, facilities and programs through a synergetic way to meet up the requirements of the people having different form of disabilities.
                            </p>
                        </div>
                    </div>

                    <div class="form-box" id="transportation">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Transportation </h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman Bangladesh Airlines ensures accessible transportation options for passengers with disabilities. Any procurement of wheelchair, ambu-lift, isle chair, ramp coaches and others in future, and options for the persons having disabilities will be taken into consideration. Currently, Biman is working on to develop suitable processes to handle mobility aids , helping disable people carrying own wheelchair and handle requirements of the disable people while onboard on plane. We are prioritizing staff training who will be engaged in handling passengers with mobility aids. We will include training contents in the manuals by getting the suggestions from the advisory committee members who are from disability dealing organizations.  
                            </p>
                        </div>
                    </div>

                    <div class="form-box" id="built">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Built environment </h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman Bangladesh Airlines is planning to restructure some of its office premises to ensure easier access of disable people. New Terminal at Hazrat Shahjalal Int’l Airport, Dhaka which will be opened in October 2024 has many features constructed taking the disable people’s needs into accont.We are in close touch with Civil Aviation Authority of Bangladesh(CAAB) that supervises, controls and responsible for infrastructure development. Our plan is include responsible officials of CAAB in the advisory committee.
                            </p>
                        </div>
                    </div>

                    <div class="form-box" id="provisions">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Provisions of CTA accessibility-related regulations </h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman Bangladesh Airlines is committed to complies with the Personnel Training for the Assistance of Persons with Disabilities Regulations (SOR/94-42) 
                            </p>
                        </div>
                    </div>

                    <div class="form-box" id="consultations">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Consultations </h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman is going to form an Advisory Committee comprising with members from different organizations who deals with disable people soon. An initial meeting in this regard was held on 21-May-24 under the presence of organizations that are going to be the part of the advisory committee. Through these organizations, Biman will include disable people for consultation to get direct feedback from them and to understand their needs in a better way.  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->
@endsection

@section('page-specific-footer')

@endsection
