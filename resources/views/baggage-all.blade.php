@extends('header-footer')

@section('header-extension')
    <style>
        .gradient-bg-gray-baggage {
            background-image: url("/assets/images/baggage/baggage.png");
        }
    </style>
@endsection

@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area gradient-bg-gray-baggage before-none">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                            <div class="section-heading text-left">
                                <h2 class="sec__title text-white">Baggage Information</h2>
                                <span class="sec__desc text-white mt-2 d-none d-sm-block">You will find essential information about the number of bags allowed, weight limits, and any extra fees for your upcoming journey.</span>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
        </div>
    <!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START JOB-DETAILS AREA
    ================================= -->
    <section class="job-details-area section--padding" id="main-content">
        <div class="container" >
            <div class="row">
                <div class="col-lg-4 " id="sticky-sidebar" >
                    <div class="sidebar mb-0 sticky-top">
                        <div class="sidebar-widget">
                            <h3 class="title stroke-shape  font-weight-bold">On this page</h3>
                            <ul class="list-items list--items list-group list-items-flush">
                                <li><span class="text-black mr-2"><a href="#list-item-1" class="active" target="_self">Checked Baggage</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-2">Carry-On/Hand Baggage</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-3">Checked Baggage Allowance</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-4">Excess Baggage Charges</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-5">Piece Concept</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-6">Baggage policy for travel to/ from USA/Canada</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-7">Baggage policy for Biman Loyalty Club (FFP) members</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-8">Special Baggage Provisions</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-9">Important Notice</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-10">Restricted And Prohibited Items</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-11">Baggage Claim</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-12">Trained DOG In Cabin For Deaf/Blind Passengers</a></span></li>
                                <li><span class="text-black mr-2"><a href="#list-item-13">Pet In Hold</a></span></li>
                            </ul>
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8" id="main">
                    <div class="form-box" id="list-item-1">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title font-weight-bold" style="color:#fff !important">Checked Baggage</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">Checked baggage refers to the luggage or items that you hand over to Biman at the airport check-in counter. Your baggage allowance can vary depending on your ticket type, class of service, and destination. Review your e-ticket or paper ticket or <a href="#list-item-3">Checked Baggage Allowance</a> to find details regarding the number of checked bags you are allowed, the weight limits for each bag, and any size restrictions. <br> Standard check-in baggage allowance: </p>
                            <h4 class="title pb-2">Weight Concept</h4>
                            <div class="table-form table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Business Class</th>
                                        <th scope="col">Economy Class</th>
                                        <th scope="col">Infants</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>30 kg</td>
                                        <td>20 kg</td>
                                        <td>10 kg</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="pb-4">Note: Please note, <a href="#list-item-10">Restricted And Prohibited Items</a> not allowed in cabin baggage and checked-in baggage.</p>
                            
                            <div class="row">
                                <div class="col-md-12" style="text-align: justify">
                                    <h3 class="title pb-2">Business Class</h3>
                                    <ul class="list-items list-items-bullet pb-4">
                                        <li>Free Baggage Allowance: 30 Kgs limited within maximum two pieces.</li>
                                        <li>The sum of the 3 dimensions (length + breadth + height) must not exceed 62 inches or 158 centimeters for each piece.</li>
                                        <li>The maximum weight permissible for a single piece of baggage is 30 Kgs.</li>
                                    </ul>

                                    <h4 class="title pb-2">Economy Class</h4>

                                    <ul class="list-items list-items-bullet pb-4">
                                        <li>Free Baggage Allowance: 20 Kgs limited within maximum two pieces.</li>
                                        <li>The sum of the 3 dimensions (length + breadth + height) of both must not exceed 62 inches or 158 centimeters.</li>
                                        <li>The weight of each bag must not exceed 20 Kgs.</li>
                                    </ul>
                                </div>
                                <!--<div class="col-md-6">-->
                                <!--    <img style="length: 20rem; width: 20rem" src="{{asset('assets/images/baggage/checked.png')}}">-->
                                <!--</div>-->
                            </div>

                            <h4 class="title pb-2">Infants in all Classes</h4>

                            <ul class="list-items list-items-bullet">
                                <li>Free Baggage Allowance: 10Kgs limited to one piece.</li>
                                <li>The sum of the 3 dimensions (length + breadth + height) must not exceed 45 inches or 115 centimeters.</li>
                                <li>In addition they are entitled to one collapsible stroller/carrycot/infant car seat subject to availability of space.</li>
                            </ul>


                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    
                    <div class="form-box" id="list-item-2" >
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Carry-On/Hand Baggage</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">

                            <p class="pb-4">When flying with Biman you can enjoy the following checked baggage allowances:</p>
                            <div class="table-form table-responsive pb-4">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Business Class</th>
                                        <th scope="col">Economy Class</th>
                                        <th scope="col">Infants</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>10 kg</td>
                                        <td>7 kg</td>
                                        <td>Nill kg</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

<div class="row">
                                <div class="col-md-12" style="text-align: justify">
                                    <h3 class="title pb-2">Business Class</h3>

                                    <p class="pb-4">Carry-on/Hand baggage two pieces not exceeding 10 KGs with the size of 56cm x 36cm x 23cm (20in x 15in x 10in), including the handle, pockets and wheels for each passenger.</p>

                                    <h4 class="title pb-2">Economy Class</h4>
                                    <p class="pb-4">Carry-on/Hand baggage one piece not exceeding 07 KGs with the size of 56cm x 36cm x 23cm (20in x 15in x 10in), including the handle, pockets and wheels for each passenger.</p>

                                    <p class="pb-4">The Following Items Constitute One Piece Of Cabin Baggage:</p>
                                </div>
                                <!--<div class="col-md-4">-->
                                <!--    <img style="length: 20rem; width: 15rem" src="{{asset('assets/images/baggage/carryon.png')}}"/>-->
                                <!--</div>-->
                            </div>
                            
                            <div class="table-form table-responsive pb-4">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Trolley Bag </th>
                                        <th scope="col">Garment Bag</th>
                                        <th scope="col">Briefcase</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>55cm x 36cm x 20cm</td>
                                        <td>Dimensions not exceeding 115cm, thickness not exceeding 20cm when folded</td>
                                        <td>50cm x 36cm x 20 cm</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h4 class="title pb-2">Articles Allowed On-Board</h4>
                            <p class="pb-4">You may carry on-board the articles listed below free of charge, over and above your free baggage allowance (subject to local country specific restrictions, if any):</p>
                            <ul class="list-items list-items-bullet pb-4">
                                <li>Ladies' handbag, Overcoat, Umbrella</li>
                                <li>Walking stick, Notebook, Small camera</li>
                                <li>Reasonable Reading material, Infant’s food for consumption in flight / infant’s carrying basket</li>
                                <li>A pair of crutches and/or other prosthetic devices for the passenger’s use provided the passenger is dependent upon them.</li>
                            </ul>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    
                    <div class="form-box" id="list-item-3">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Checked Baggage Allowance</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <div class="table-form table-responsive pb-4">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th colspan="5" class="text-left alert-success">DOMESTIC STATION</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">ABU DHABI</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to AUH</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">AUH to BD</th>
                                        <td>40kg in 2PCs</td>
                                        <td>50kg in 2PCs</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">BANGKOK</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to BKK</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BKK to BD</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                       
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">CHINA</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to CAN</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">CAN to BD</th>
                                        <td>30kg</td>
                                        <td>45kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left alert-success">DAMMAM</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to DMM</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">DMM to BD</th>
                                        <td>45kg</td>
                                        <td>55kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">DELHI</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to DEL</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">DEL to BD</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">DOHA</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to DOH</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">DOH to BD</th>
                                        <td>40kg</td>
                                        <td>50kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">DUBAI</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to DXB</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">DXB to BD</th>
                                        <td>40kg in 2PCs</td>
                                        <td>50kg in 2PCs</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left alert-success">HONGKONG</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to HKG</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">HKG to BD</th>
                                        <td>35kg</td>
                                        <td>45kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">JEDDAH</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to JED</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">JED to BD</th>
                                        <td>50kg</td>
                                        <td>60kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left alert-success">KOLKATA</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to CCU</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">CCU to BD</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">KATHMANDU</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to KTM</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">KTM to BD</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">KUALALUMPUR</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to KUL</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">KUL to BD</th>
                                        <td>35kg</td>
                                        <td>45kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">KUWAIT</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to KWI</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">KWI to BD</th>
                                        <td>50kg</td>
                                        <td>60kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">LONDON & MANCHESTER</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to LHR/MAN</th>
                                        <td>40kg in 02 PCs</td>
                                        <td>50kg in 02 PCs</td>
                                        <td>10kg</td>
                                    </tr>
                                    <tr>
                                        <th class="subhead">LHR/MAN to BD</th>
                                        <td>40kg in 02 PCs</td>
                                        <td>50kg in 02 PCs</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">MADINA</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to MED</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">MED to BD</th>
                                        <td>50kg</td>
                                        <td>60kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left alert-success">MUSCAT</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to MCT</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">MCT to BD</th>
                                        <td>45kg</td>
                                        <td>55kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left alert-success">NARITA <span class="badge badge-success">*Effective for tickets issued on/after 12.09.23</span></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to NRT</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">NRT to BD</th>
                                        <td>35kg</td>
                                        <td>45kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left  alert-success">RIYADH</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to RUH</th>
                                        <td>20kg</td>
                                        <td>30kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">RUH to BD</th>
                                        <td>45kg</td>
                                        <td>55kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="5" class="text-left alert-success">SINGAPORE</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>Economy Class</th>
                                        <th>Business Class</th>
                                        <th>Infant</th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">BD to SIN</th>
                                        <td>30kg</td>
                                        <td>40kg</td>
                                        <td>10kg</td>
                                        
                                    </tr>
                                    <tr>
                                        <th class="subhead">SIN to BD</th>
                                        <td>40kg</td>
                                        <td>50kg</td>
                                        <td>10kg</td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    
                    
                    
                    
                    <div class="form-box" id="list-item-4">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Excess Baggage Charges</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{ asset('assets/pdf/baggage/Excess_and_prepaid_Baggage_v4.pdf') }}"
                                width="100%" height="700px">
                            </iframe>
                        </div>
                        
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-5">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Piece Concept</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <h4 class="title pb-2">Business Class</h4>
                            <ul class="list-items list-items-bullet pb-4">
                                <li>Free Baggage Allowance: 2 pieces.</li>
                                <li>The sum of the 3 dimensions (length + breadth + height) must not exceed 62 inches or 158 centimeters for each piece.</li>
                                <li>The maximum weight permissible for a single piece of baggage is 30 Kgs.</li>
                            </ul>
                            <h4 class="title pb-2">Economy Class</h4>
                            <ul class="list-items list-items-bullet pb-4">
                                <li>Free Baggage Allowance: 2 pieces.</li>
                                <li>The sum of the 3 dimensions (length + breadth + height) must not exceed 62 inches or 158 centimeters for each piece.</li>
                                <li>The weight of each bag must not exceed 50 pounds or 23 Kilos.</li>
                            </ul>
                            <h4 class="title pb-2">Infants in all Classes</h4>
                            <ul class="list-items list-items-bullet">
                                <li>Free Baggage Allowance: 1 piece not exceeding 10 Kgs(Economy & Business Class).</li>
                                <li>The sum of the 3 dimensions (length + breadth + height) must not exceed 45 inches or 115 centimeters.</li>
                                <li>In addition they are entitled to one collapsible stroller/carrycot/infant car seat subject to availability of space.</li>
                            </ul>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-6">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Baggage Policy For Travel To/From USA/Canada</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{ asset('assets/pdf/terms-conditions/Revised-baggage-YYZ-v1.pdf') }}"
                                width="100%" height="700px">
                            </iframe>
                        </div><!-- end form-content -->
                        
                        <div class="form-content contact-form-action">

                            <h4 class="title pb-2">Examples of Standard of personal articles (As determined by their size) </h4>
                            <ul class="list-items list-items-bullet pb-4">
                                <li>Carry-on bag, roller bag, backpack, briefcase</li>
                                <li>Laptop computer</li>
                                <li>Airport shopping and duty-free purchases</li>
                                <li>Sport racquet (e.g. tennis, squash, badminton)</li>
                                <li>Camera bag</li>
                                <li>Garment bag (size and weight restrictions apply)</li>
                                <li>Diplomatic or Consular bag</li>
                                <li>Musical instrument</li>
                            </ul>

                            <h4 class="title pb-2">Other Items May Bring on Board</h4>
                            <p>Here are examples of items that can bring on board in addition to carry-on allowance:</p>
                            <ul class="list-items list-items-bullet pb-4" id="strollers">
                                <li>Coat or other outer garment</li>
                                <li>Small purse measuring no more than <br><b>25cm x 30cm x 14cm</b><br> (10in x 12in x 5.5
                                    in)</li>
                                <li>Larger purses will be included in your carry-on allowance</li>
                                <li>Infant care item (e.g.: diaper bag)</li>
                                <li>Stroller -collapsed diameter not to exceed <br><b>25.5 cm</b> (10 in) &amp; length not
                                    to exceed <b>92cm</b> (36 in)</li>
                                <li>Child restraint device <b>(car seat)</b> if it has been purchased for the child/infant
                                </li>
                                <li class="bg-light">
                                    <ul>
                                        <b>Special Needs Items</b>
                                        <i>The following items are allowed at all times, in addition to carry-on
                                            allowance:</i>
                                        <li>Mobility Aid <span>(e.g.: braces, cane, crutches, walker, communication
                                                device*)</span> or other special need item</li>
                                        <li>Container carrying life sustaining items</li>
                                        <li>Medication in its original, labeled container</li>
                                    </ul>
                                </li>
                                <li>Small electronic device such as cell phone or MP3 player</li>
                                <li><b>Snacks or food</b> to eat on board: All food must be wrapped or in a container</li>
                            </ul>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-7">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Baggage Policy For Biman Loyalty Club (FFP) Members</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">Biman has special baggage allowances on BG online services for frequent flyer passengers of Biman Loyalty Club.</p>
                            <div class="table-form table-responsive pb-4">
                                <table class="table">
                                    <tbody><tr>
                                        <th class="bg-success text-white">Green Member</th>
                                        <th class="bg-silver">Silver Member</th>
                                        <th class="bg-gold" colspan="3">Gold Member</th>
                                    </tr>
                                    <tr>
                                        <td>Open and free membership for everybody. No minimum requirements.</td>
                                        <td>You need to have 50,000 miles per year to become a Silver Biman Loyalty Club member.</td>
                                        <td colspan="3">You need to have 75,000 miles per year to become a Gold Biman Loyalty Club member.</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" class="text-left text-black">Benefits</th>
                                        <th class="bg-success text-white text-center">Green</th>
                                        <th class="bg-silver text-center">Silver</th>
                                        <th class="bg-gold text-center">Gold</th>
                                    </tr>
                                    <tr align="center">
                                        <th colspan="2" class="text-left text-black">Additional free baggage allowance</th>
                                        <td>NIL</td>
                                        <td >10kg</td>
                                        <td>20kg</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-8">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Special Baggage Provisions</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">Sports equipment’s are included in passenger checked baggage allowance, any exceed weight resulting from such inclusion shall be assessed at the existing Excess Baggage Rate.
                                For ease of reference, the different categories of sporting equipment are defined as under:</p>
                            <div class="table-form table-responsive pb-4">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Type of Sporting Equipment</th>
                                        <th scope="col">Definition</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Bicyle</td>
                                        <td>Non-motorized touring or racing bicycles. Linear dimensions not exceeding 145x160x110 centimeters.</td>
                                    </tr>
                                    <tr>
                                        <td>Fishing Equipment</td>
                                        <td>2 rods + 1 reel + 1 landing net + 1 pair of waders + tackle box</td>
                                    </tr>
                                    <tr>
                                        <td>Golf Kit</td>
                                        <td>1 golf bag containing not more than 14 golf clubs + 12 golf balls + 1 pair of golf shoes</td>
                                    </tr>
                                    <tr>
                                        <td>Paragliding Equipment</td>
                                        <td>Non-motorized paragliding equipment. Motorized paragliding equipment and hang-gliding equipment are not permitted as baggage.</td>
                                    </tr>
                                    <tr>
                                        <td>Scuba Diving Equipment</td>
                                        <td>1 empty scuba tank + 1 scuba regulator + 1 tank harness + 1 tank pressure gauge + 1 mask + 2 fins + 1 snorkel + 1 knife + 1 spear gun + 1 safety vest</td>
                                    </tr>
                                    <tr>
                                        <td>Ski Kit Equipment</td>
                                        <td>1 pair of skis + 1 pair of ski poles + 1 pair of boots</td>
                                    </tr>
                                    <tr>
                                        <td>Snow board</td>
                                        <td>1 snowboard + 1 pair of boots</td>
                                    </tr>
                                    <tr>
                                        <td>Surfboard</td>
                                        <td>Surfboard of fibre glass.</td>
                                    </tr>
                                    <tr>
                                        <td>Water Ski</td>
                                        <td>
                                            1 pair of standard water skis or 1 slalom water ski
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h4 class="title pb-2">Scenario 1</h4>

                            <ul class="list-items list-items-bullet pb-4">

                                    <li>Free Baggage Allowance: <b>30kgs</b></li>
                                    <li>Guest is carrying 1 bag weighing <b>20kgs</b> + 1 golf kit (not exceeding 158 cm) weighing <b>10kgs</b></li>
                                    <li>Charge: <em>No excess baggage charge will apply.</em></li>
                            </ul>

                            <h4 class="title pb-2">Scenario 2</h4>
                            <ul class="list-items list-items-bullet pb-4">

                                    <li>Free Baggage Allowance: <b> 30kgs</b></li>
                                    <li>Guest is carrying 1 bag weighing <b>25kgs</b>s + 1 golf kit (not exceeding 158 cm) weighing <b>10kgs</b></li>
                                    <li>
                                        Charges: <em>Excess baggage fee for 5 kgs at the applicable rate.</em>
                                    </li>
                            </ul>


                            <h4 class="title pb-2">Cabin baggage in passenger seat (CBBG).</h4>
                           <p class="pb-4"> A guest can carry fragile or delicate items such as musical instruments, electronic equipment’s, paintings and diplomatic mail in the cabin by purchasing an extra seat next to him / her. The weight of such cabin baggage item on extra seat should not exceed 60 kgs which deemed to be safe in cabin secured with seat belt or extension belt and must be of a size as under :
                           </p>

                            <div class="table-form table-responsive pb-4">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th>Musical Instrument</th>
                                        <td>145cm X 42cm x 42cm</td>

                                    </tr>
                                    <tr>
                                        <th>Other Baggage</th>
                                        <td>66cm X 42cm X 42cm</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    
                    <div class="form-box" id="list-item-9">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Important Notice</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            
                            <ul class=" list-items list-items-bullet">
                                <li class="text-danger">All of the above regulations are strictly enforced. Passengers who
                                    exceed their allowance will be required to check their carry-on baggage, and additional
                                    checked baggage charge may apply. </li>
                                <li class="text-danger">Maximum Permissible excess baggage limits 100kg within 05 Pieces
                                    per Passenger.</li>
                                <li class="text-danger">Free baggage allowance shall be 2 Pieces, Maximum 25kg per Piece on
                                    Economy class.</li>
                                <li class="text-danger">Free baggage allowance shall be 2 Pieces, Maximum 32kg per Piece on
                                    Business class.</li>
                                <li class="text-danger">Odd Size/Round Shape bundle not allowed as a checked baggage.</li>
                                <li class="text-danger">Gold Card Members allowed 20kg/01 Pc &amp; Silver Card Members
                                    allowed 10/01pc in-addition of their entitlement of FBA irrespective class of service.
                                </li>
                            </ul>

                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-10">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Restricted and Prohibited Items</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">
                                Due to international regulations, and to ensure the safety of our passengers, there are a number of restrictions on items that can be carried in your cabin baggage. Items that may cause injury or represent any other security or safety threat can only be carried as checked baggage, and are not allowed in cabin baggage. These items should be appropriately packed for carriage as checked baggage, in accordance with IATA Dangerous Goods Regulations and relevant Biman regulations.
                            </p>

                            <h4 class="title pb-2">In Cabin Baggage
                                Following Items Are Restricted To Carry In Cabin Baggage:</h4>
                            <ul class="list-items list-items-bullet pb-4">
                                <li>Liquids, creams,gels,pastes and aerosols over 100ml</li>
                                <li>Real or toy weapons</li>
                                <li>Arms and ammunition</li>
                                <li>Explosives or anything containing explosives (for example, fireworks or fire crackers)</li>
                                <li>Knives of any kind, type, shape or size</li>
                                <li>Letter openers</li>
                                <li>Metal cutlery</li>
                                <li> Slingshots </li>
                                <li>Razor blades and straight razor blades</li>
                                <li>Tradesmen's tools</li>
                                <li> Darts </li>
                                <li> Scissors </li>
                                <li>Nail files</li>
                                <li>Hypodermic needles and syringes (unless required for medical reasons and accompanied by a medical certificate confirming the medical condition necessitating carriage)</li>
                                <li>Knitting needles</li>
                                <li> Corkscrews </li>
                                <li> Laser pointers</li>
                                <li>Lighters</li>
                            </ul>

                            <h4 class="title pb-2">In Checked-In Baggage Following Items Are Restricted To Carry In Checked-In Baggage:</h4>

                            <ul class="list-items list-items-bullet pb-4">
                                <li><span class="font-weight-bold">Explosive Materials</span>	such as Flare Guns, Gun Lighters and Gun Powder, Explosive materials, Ammunitions including Blank Cartridges Handguns, Pistol Caps, Blasting caps, Dynamite, Fireworks, Flares (in any form), Hand Grenades, Plastic Explosives and Realistic Replicas of Explosives.</li>
                                <li>
                                    <span class="font-weight-bold">Compressed gases</span> such as (deeply refrigerated, flammable, non-flammable and poisonous) Such as Butane, Oxygen, Liquid nitrogen, Aqualung cylinders and Compressed Gas Cylinders.
                                </li>

                                <li>
                                    <span class="font-weight-bold">Flammable Items</span> such as Aerosol (any except for personal care or toiletries in limited quantities), Fuels (including cooking fuels and any flammable liquid fuel), Gasoline, Gas Torches, Lighter Fluid, Strike anywhere matches, Turpentine and Paint Thinner, Realistic Replicas of Incendiaries

                                </li>
                                <li>
                                    <span class="font-weight-bold">Oxidizing materials</span> such as bleaching powder, peroxides
                                </li>
                                <li>
                                   <span class="font-weight-bold"> Poisonous and infectious substances</span> such as insecticides, weed-killers and live virus materials
                                </li>

                                <li>
                                   <span class="font-weight-bold">Radio-active materials</span>	such As Bleaching Powder And Peroxides
                                </li>

                                <li> <span class="font-weight-bold">Corrosives</span> such as Acids, Alkalis, Mercury, Wet Cell Batteries (except those in wheelchairs), Oven or Drain cleaners and Apparatus Containing Mercury</li>
                                <li>
                                   <span class="font-weight-bold">Other dangerous articles</span> such as magnetized, offensive or irritating materials. Briefcases and attach cases with installed alarm devices
                                </li>

                            </ul>

                            <p class="pb-4">
                                Dangerous Goods are classified as items or substances that may pose health and safety hazards to customers. The transport of these goods is regulated by Civil Aviation Regulations, and they are generally not allowed in either cabin baggage or checked baggage, with some exceptions.
                            </p>

                            <h4 class="title pb-2">Weapons And Ammunition</h4>
                            <p>Security regulations prohibit the carriage of weapons in the passenger cabin except authorized by Government of Bangladesh.

                                Bringing a prohibited item to the Passenger and Cabin Baggage Screening point without authorization is a criminal offence and may result in charges and prosecution.

                                The following list of weapons may be carried in checked-in luggage, provided they are sheathed / securely packed to prevent injury to handlers and screeners:</p>
                            <ul class="list-items list-items-bullet pb-4">

                                    <li> Knives </li>
                                    <li> Swords </li>
                                    <li>Martial Arts Weapons </li>
                                    <li>Box cutters</li>
                                    <li>Spear guns</li>
                                    <li> Licensed firearms</li>
                            </ul>
                            <h4 class="title pb-2">Exceptions</h4>
                            <p class="pb-4">
                                Medicines and toiletries in limited quantities which are necessary or appropriate for the passenger during the journey, such as hair sprays, perfumes and medicines containing alcohol may be carried. Many of these listed articles can be carried as air cargo provided they are packed in accordance with cargo regulations.
                            </p>

                            <h4 class="title pb-2">European Union Regulations As Per Regulation 185, 2010..<br>
                                List Of Prohibited Articles In Passengers And Cabin Baggage</h4>

                            <p class="pb-4">
                                Without prejudice to applicable safety rules, passengers are not permitted to carry the following articles into security restricted areas and on board an aircraft:
                            </p>

                            <ul>
                                <li>
                                    <strong>(a) guns, firearms and other devices that discharge projectiles — devices capable, or appearing capable, of being used to cause serious injury by discharging a projectile, including:</strong>
                                    <ul>
                                        <li>-firearms of all types, such as pistols, revolvers, rifles, shotguns,</li>
                                        <li>-toy guns, replicas and imitation firearms capable of being mistaken for real weapons,</li>
                                        <li>-component parts of firearms, excluding telescopic sights,</li>
                                        <li>-compressed air and CO2 guns, such as pistols, pellet guns, rifles and ball bearing guns,</li>
                                        <li>-signal flare pistols and starter pistols,</li>
                                        <li>-bows, cross bows and arrows,</li>
                                        <li>-harpoon guns and spear guns,</li>
                                        <li>-slingshots and catapults;</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>(b) stunning devices — devices designed specifically to stun or immobilise, including:</strong>
                                    <ul>
                                        <li>-devices for shocking, such as stun guns, tasers and stun batons,</li>
                                        <li>-animal stunners and animal killers,</li>
                                        <li>-disabling and incapacitating chemicals, gases and sprays, such as mace, pepper sprays, capsicum sprays, tear gas, acid sprays and animal repellent sprays;</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>(c) objects with a sharp point or sharp edge — objects with a sharp point or sharp edge capable of being used to cause serious injury, including:</strong>
                                    <ul>
                                        <li>-items designed for chopping, such as axes, hatchets and cleavers,</li>
                                        <li>-ice axes and ice picks,</li>
                                        <li>-razor blades,</li>
                                        <li>-box cutters,</li>
                                        <li>-knives with blades of more than 6 cm,</li>
                                        <li>-scissors with blades of more than 6 cm as measured from the fulcrum,</li>
                                        <li>-martial arts equipment with a sharp point or sharp edge,</li>
                                        <li>-swords and sabres;</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>(d) workmen’s tools — tools capable of being used either to cause serious injury or to threaten the safety of aircraft,</strong>
                                    <ul>
                                        <li><strong>Including:</strong></li>
                                        <li>-crowbars,</li>
                                        <li>-drills and drill bits, including cordless portable power drills,</li>
                                        <li>-tools with a blade or a shaft of more than 6 cm capable of use as a weapon, such as screwdrivers and chisels,</li>
                                        <li>-saws, including cordless portable power saws,</li>
                                        <li>-blowtorches,</li>
                                        <li>-bolt guns and nail guns;</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>(e) blunt instruments — objects capable of being used to cause serious injury when used to hit,</strong>
                                    <ul>
                                        <li><strong>Including:</strong></li>
                                        <li>-baseball and softball bats,</li>
                                        <li>-clubs and batons, such as billy clubs, blackjacks and night sticks,</li>
                                        <li>-martial arts equipment;</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>(f) explosives and incendiary substances and devices — explosives and incendiary substances and devices capable, or appearing</strong>
                                    <ul>
                                        <li><strong>capable, of being used to cause serious injury or to pose a threat to the safety of aircraft, including:</strong></li>
                                        <li>-ammunition,</li>
                                        <li>-blasting caps,</li>
                                        <li>-detonators and fuses,</li>
                                        <li>-replica or imitation explosive devices,</li>
                                        <li>-mines, grenades and other explosive military stores,</li>
                                        <li>-fireworks and other pyrotechnics,</li>
                                        <li>-smoke-generating canisters and smoke-generating cartridges,</li>
                                        <li>-dynamite, gunpowder and plastic explosives.</li>
                                    </ul>
                                </li>
                            </ul>


                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-11">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Baggage Claim</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">
                                In case of delay/damage/loss of your checked baggage on arrival at destination, the 1st step is to notify Biman official on duty &/or to contact Lost & Found section near to baggage claim area to complete the report immediately.

                                Fill up the form called Property Irregularity Report (PIR) with details of baggage i.e. colour,size,identifying mark etc. to assist Biman to trace the missing baggage within a reasonable time.

                                When the missing baggage is not traced within a reasonable time, passenger may raise the claim to Biman along with all required documents for settlement.

                                Biman’s liability for any lost baggage is up to 20KGs at the rate of USD-20/- per KG.
                            </p>

                            <h4 class="title pb-2">Contact For Hazrat Shahjalal International Airport, Dhaka.</h4>
                            <p class="font-weight-bold">On Duty Junior Ground Service Officer</p>
                            <p class="font-weight-bold">Room - 15 Ground Floor, HSIA (South Corner), Dhaka.</p>
                            <p class="font-weight-bold"> (+88) 01777715535, (+88) 028901315(T&T), (+88) 8901500/5402(PABX)</p>



                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-12">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Trained DOG in Cabin for Deaf/Blind Passengers</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">
                                A dog trained to lead a blind person will be carried free of charge in addition to normal free baggage allowance, provided that such a dog accompanied a passenger with impaired vision and dependent upon it, and proper permits are obtained for entry into the country or territories of transit where such permits are required and only if the evidence of possession of such permits is presented prior to reservation being made, unless any country or territory on the route prohibits the entry of a dog, carriage will be refused.
                            </p>
                            <p class="pb-4">Under certain operating conditions, such as more than 4 hours flight, VVIP flight, official carrier flight or on certain types of aircraft, it is some time not possible to carry a dog in the passenger cabin and therefore, carriage can be refused.</p>

                            <p class="pb-4">The passenger will be requested to put a muzzle on the dog, to avoid annoyance/disturbance to other passengers.

                                Biman will not be responsible in the event any such dog is refused entry into or passage through any country or territory. The owner will have to assume all risks or injury to or sickness or death or such animal carried under this rule.</p>

                            <h4 class="title pb-2">Categories Of Dogs Of Assistance</h4>
                            <ul class="list-items list-items-bullet pb-4">
                                <li>Eye seeing dog (To assist person with visual deficiency)</li>
                                <li>Hearing hear dog (To assist person with auditory deficiency)</li>
                            </ul>
                            <p class="pb-4">
                                The statute of assistance dog is recognized to the dogs trained in certificated, national or international, establishments. The assistance dog must carry the badge that classifies it as such in a visible way. The passenger must prove whenever necessary, the identification of the animal as assistance dog and fulfill the sanitary requirements, as well as provide for the animal correct behavior and is responsible for any damages that the animal may cause to another person.
                            </p>

                            <p class="pb-4">
                                Whenever travelling in the cabin, the dog may not occupy a seat neither block the ways, including the emergency exits. Reservation control department (or cabin crew staff), shall assign a window seat for the passenger in order the dog may stay on the floor near the passenger avoiding that the dog blocks the way of the other passengers in the same row, (whenever possible should opt for seats with more space in front, except seats in the emergency rows).
                            </p>

                            <p class="pb-4">
                                If a flight segment is scheduled to take within four hours of flight, reservation/ticketing staff must request the passenger to provide documentation that the guide dog will not need to relieve itself or can do so in a way that will not create a health or sanitation problems on the flight.
                            </p>

                            <p class="pb-4">
                                This document must be produced at the check-in as well. If the passenger is unable to provide the obligatory documentations for carriage in cabin, the guide dog can be accepted only as checked baggage. The guest has to carry an absorbent protective sheet/mat to be placed in front of the seat to be occupied.
                            </p>

                            <p>These guide dogs are carried free of charge in the cabin.</p>


                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                    <div class="form-box" id="list-item-13">
                        <div class="form-title-wrap" style="background-color: #006747; color:#fff !important">
                            <h3 class="title  font-weight-bold" style="color:#fff !important">Pet in Hold</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <p class="pb-4">Pet animals can be carried only on Biman flights as passengers’s accompanied baggage or shipped cargo. Pets such as dogs, cats, household birds, rabbits, canaries are allowed only in the aircraft holds. Live animals should be carried in escape proof containers of proper size with ample ventilation. The container must be i.e. not made of chewable material.</p>
                            
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                </div><!-- end col-lg-8 -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end job-details-area -->


    @push('custom-script')
        <script type="text/javascript">

        </script>
    @endpush

@endsection


