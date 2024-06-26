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
                                <h4 class="sec__title text-white">Accessibility Plan 2023-26</h4>
                                <h5 class="sec__desc text-white mt-3 d-none d-sm-block">We are committed to avert and eliminate all barriers to ensure accessibility</h5>
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
                                <li><span class="text-black mr-2"><a href="#ict"  class="active"
                                                                     target="_self">Information and Communication Technologies (ICT)</a></span></li>
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
                <div class="col-lg-8" id="general">

                    <div class="form-box" id="ict">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Information and Communication Technologies (ICT)</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman Bangladesh Airlines is dedicated to ensuring that our digital platforms and services
                                are accessible to everyone, including individuals with disabilities. We are committed to
                                providing a seamless and inclusive digital experience for all our customers.
                            </p>
                            <h4 class="title font-weight-bold py-2">Objectives:</h4>
                            <ul class="list--items">
                                <li>1. To comply with Web Content Accessibility Guidelines (WCAG) 2.0 Level AA success
                                    criteria.</li>
                                <li>2. To improve the accessibility and usability of the www.biman-airlines.com website.
                                </li>
                            </ul>
                            <table class="table table-bordered my-3">
                                <tr class="text-center alert-warning text-black">
                                    <th>Action</th>
                                    <th>Target Date</th>
                                </tr>
                                <tr>
                                    <td>
                                        Identify and address accessibility barriers and issues, collaborate with experts and
                                        utilize accessibility tools and resources, review and update our digital assets,
                                        such as the website, mobile applications, and other online services, to enhance the
                                        usability of www.biman-airlines.com and ensure compliance with WCAG 2.0 Level AA
                                        success criteria.
                                    </td>
                                    <td>Target date: September 2026</td>
                                </tr>
                                <tr>
                                    <td>
                                        Implement regular accessibility testing with people with disabilities to gather
                                        feedback and make user-centered improvements to ensure compliance with WCAG 2.0
                                        Level AA.
                                    </td>
                                    <td>Target date: September 2026</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-box" id="communication">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Communication, Other than ICT</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman Bangladesh Airlines ensures that passengers with a certain range of disabilities are
                                assisted by trained personnel to provide appropriate support, ensure safety, and handle
                                various situations with sensitivity and professionalism.
                            </p>
                            <table class="table table-bordered my-3">
                                <tr class="text-center alert-warning text-black">
                                    <th>Action</th>
                                    <th>Target Date</th>
                                </tr>
                                <tr>
                                    <td>
                                        Biman will evaluate and explore ways to support disable passengers, regardless of
                                        their category of disability to provide a safe and comfortable travel experience.
                                    </td>
                                    <td>December 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        Review personnel training program to include specific contents for addressing the
                                        needs of different types of disable customers.
                                    </td>
                                    <td>June 2026</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-box" id="procurement">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Procurement of goods, services and facilities</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman Bangladesh Airlines will ensure accessibility issue is taken into consideration in its
                                procurement process while evaluation of purchasing goods , services and facilities like
                                wheel Chair, Ambu-lift, Ground Service Equipment, New Aircraft etc. and wherever possible,
                                persons with disabilities will be consulted.
                            </p>
                            <table class="table table-bordered my-3">
                                <tr class="text-center alert-warning text-black">
                                    <th>Action</th>
                                    <th>Target Date</th>
                                </tr>
                                <tr>
                                    <td>
                                        Accessibility requirements will be included in Procurement Process.
                                    </td>
                                    <td>June 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        Make list of probable suppliers who provides items comply with accessibility
                                        requirements.
                                    </td>
                                    <td>June 2026</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-box" id="design">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Design and delivery of programs and services </h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Services to passengers’ originates from booking a ticket till safe arrival at destination.
                                Biman Bangladesh Airlines offers various facilitations to passengers throughout its journey
                                ranging from providing a wheel chair, booking a stretcher, assisted with check-in, priority
                                boarding and deplaning and carriage of service animals. In order to make the journey more
                                satisfying, Biman will ensure training to employees, equipment available to provide the
                                services, more interaction with organizations handles people with disabilities.
                            </p>
                            <table class="table table-bordered my-3">
                                <tr class="text-center alert-warning text-black">
                                    <th>Action</th>
                                    <th>Target Date</th>
                                </tr>
                                <tr>
                                    <td>
                                        An advisory committee including representations from disability bodies will be
                                        formed to strengthen the accessibility program.
                                    </td>
                                    <td>June 2024</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-box" id="transportation">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Transportation </h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                A suitable & comfortable transportation will be ensured to the persons with disabilities.
                                Biman will provide Wheel Chair Services, Ambulift, Ramp Coach Services etc., to the persons
                                with disabilities on report at Airport and to/from terminal & aircraft. Biman Bangladesh
                                Airlines will coordinate with its service providers and airport managing bodies to ensure
                                accessible transportation.
                            </p>
                        </div>
                    </div>

                    <div class="form-box" id="built">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Built environment </h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman Bangladesh Airlines is committed to focus on increasing accessibility by facilitating
                                reduced mobility passengers with comfortable mobility aids, guidance, carrying onboard aisle
                                chair, storing luggage in overhead compartments. Biman will explore scope to enhance built
                                in facilities in consultation with airport authority.
                            </p>
                        </div>
                    </div>

                    <div class="form-box" id="provisions">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Provisions of CTA accessibility-related regulations </h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                Biman Bangladesh Airlines shall comply with Personnel Training for the Assistance of persons
                                with Disabilities Regulations (SOR/94-42)
                            </p>
                        </div>
                    </div>

                    <div class="form-box" id="consultations">
                        <div class="form-title-wrap alert-success">
                            <h3 class="title font-weight-bold">Consultations </h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action text-justify">
                            <p>
                                To become compliant with the Accessibility Canada Act (ACA), Biman Bangladesh Airlines is committed to comply with the Accessibility related regulations and standards and also whenever required will get consultations with Chief Medical Officer of Biman Bangladesh Airlines Medical Centre and keep on communicating with disability rights organizations and consultations will also be carried out with people having disabilities. An internal working group is formed to materialize accessibility plan and also, planning is there to have consultation process through meetings and workshop with the relevant organizations, airport managing bodies, disable people and employees having disabilities. Feedback received through these processes will be incorporated in the policy matters of the company to implement the accessibility plan.
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
