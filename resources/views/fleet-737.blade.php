@extends('header-footer')
@section('header-extension')
@endsection

@section('content')

@include('fleet-top')
<section class="tour-detail-area padding-bottom-100px">
    <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content-nav" id="single-content-nav">
                        <ul>
                            <li><a data-scroll="description" href="#description" class="scroll-link active">Fleet Information</a></li>
                            <li><a data-scroll="inflight-features" href="#inflight-features" class="scroll-link">Inflight Features</a></li>
                            <li><a data-scroll="seat-selection" href="#seat-selection" class="scroll-link">Seat Selection</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-content-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content-wrap padding-top-60px">
                        <div id="description" class="page-scroll">
                            <div class="single-content-item pb-4">
                                <h3 class="title font-size-26">Boeing 737-800</h3>
                                <div class="d-flex align-items-center pt-2">
                                    <p>
                                        <span class="badge badge-warning text-white font-weight-medium font-size-16">6 Aircraft</span>
                                    </p>
                                </div>
                            </div>
                            <div class="section-block"></div>
                            <div id="photo" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <div class="gallery-carousel carousel-action">
                                        <div class="card-item mb-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/fleet/737-1.jpg') }}" alt="Boeing-737">
                                            </div>
                                        </div>
                                        <div class="card-item mb-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/fleet/737-2.jpg') }}" alt="Boeing-737">
                                            </div>
                                        </div>
                                        <div class="card-item mb-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/fleet/737-3.jpg') }}" alt="Boeing-737">
                                            </div>
                                        </div>
                                        <div class="card-item mb-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/fleet/737-4.jpg') }}" alt="Boeing-737">
                                            </div>
                                        </div>
                                        <div class="card-item mb-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/fleet/737-5.jpg') }}" alt="Boeing-737">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-block"></div>
                            </div>

                            <div class="section-block"></div>

                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Window Reveal</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Sculpted Sidewalls</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Pivot Bins</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Color LED Lighting</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Bright Color & Decor</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Touch-Screen Attendant Panel</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion accordion-item padding-top-30px" id="accordionExample2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading737one">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse737one" aria-expanded="false" aria-controls="fleetCollapse737one">
                                                            <span class="ml-3">MEGHDOOT</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse737one" class="collapse" aria-labelledby="fleetHeading737one" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 737-800</li>
                                                            <li>Regn No.: S2-AHO </li>
                                                            <li>Business Seating: 12 </li>
                                                            <li>Economy Seating: 150 </li>
                                                            <li>Inauguration Date: 25/11/2015</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading737two">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse737two" aria-expanded="false" aria-controls="fleetCollapse737two">
                                                            <span class="ml-3">MAYURPANKHI</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse737two" class="collapse" aria-labelledby="fleetHeading737two" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 737-800</li>
                                                            <li>Regn No.: S2-AHV </li>
                                                            <li>Business Seating: 12 </li>
                                                            <li>Economy Seating: 150 </li>
                                                            <li>Inauguration Date: 23/12/2015</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading737three">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse737three" aria-expanded="false" aria-controls="fleetCollapse737three">
                                                            <span class="ml-3">S2-AFL</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse737three" class="collapse" aria-labelledby="fleetHeading737three" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 737-800</li>
                                                            <li>Regn No.: S2-AFL </li>
                                                            <li>Business Seating: 12 </li>
                                                            <li>Economy Seating: 150 </li>
                                                            <li>Inauguration Date: 21/01/2010</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading737four">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse737four" aria-expanded="false" aria-controls="fleetCollapse737four">
                                                            <span class="ml-3">S2-AFM</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse737four" class="collapse" aria-labelledby="fleetHeading737four" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 737-800</li>
                                                            <li>Regn No.: S2-AFM </li>
                                                            <li>Business Seating: 12 </li>
                                                            <li>Economy Seating: 150 </li>
                                                            <li>Inauguration Date: 27/01/2010</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading737five">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse737five" aria-expanded="false" aria-controls="fleetCollapse737five">
                                                            <span class="ml-3">S2-AEQ</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse737five" class="collapse" aria-labelledby="fleetHeading737five" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 737-800</li>
                                                            <li>Regn No.: S2-AEQ </li>
                                                            <li>Business Seating: 12 </li>
                                                            <li>Economy Seating: 150 </li>
                                                            <li>Inauguration Date: 16/05/2019</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading737six">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse737six" aria-expanded="false" aria-controls="fleetCollapse737six">
                                                            <span class="ml-3">S2-AEW</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse737six" class="collapse" aria-labelledby="fleetHeading737six" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 737-800</li>
                                                            <li>Regn No.: S2-AEW </li>
                                                            <li>Business Seating: 12 </li>
                                                            <li>Economy Seating: 150 </li>
                                                            <li>Inauguration Date: 29/06/2019</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-block"></div>
                        </div>
                        <div id="inflight-features" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-30px">
                                <h3 class="title font-size-20">Inflight Features</h3>
                                <div class="inflight-content-item pt-4">
                                    <div class="row">
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-wifi"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">WI-FI</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-music"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Entertainment</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-glass"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Drink</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-tree"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Air Conditioning</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-coffee"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Coffee</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-shopping-cart"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Shopping</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-cutlery"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Food</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-bed"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Comfort</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-photo"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Magazines</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-block"></div>
                        </div>
                        
                        <div id="seat-selection" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">Seat Selection</h3>
                                <div class="cabin-type padding-top-30px">
                                    <div class="row">
                                        <div class="col-lg-6 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-bed"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Business Class (12 Seats)</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-bed"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Economy Class (150 Seats)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-block"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar single-content-sidebar mb-0">
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Why Book With Us?</h3>
                            <div class="sidebar-list">
                                <ul class="list-items">
                                    <li><i class="la la-dollar icon-element mr-2"></i>No-hassle best price guarantee</li>
                                    <li><i class="la la-microphone icon-element mr-2"></i>Customer care available 24/7</li>
                                    <li><i class="la la-thumbs-up icon-element mr-2"></i>Fly in safe and comfort</li>
                                    <li><i class="la la-plane icon-element mr-2"></i>Youngest fleet in the region</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Get a Question?</h3>
                            <p class="font-size-14 line-height-24">Do not hesitate to give us a call. We are an expert team and we are happy to talk to you.</p>
                            <div class="sidebar-list pt-3">
                                <ul class="list-items">
                                    <li><i class="la la-phone icon-element mr-2"></i>+8801990997997</li>
                                    <li><i class="la la-envelope icon-element mr-2"></i><a href="mailto:ibebiman@bdbiman.com">ibebiman@bdbiman.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Fly Safe with Biman</h3>
                            <div class="author-content">
                                <div class="d-flex">
                                    <div class="author-bio">
                                        <h4 class="author__title"><a href="#">Explore the World</a></h4>
                                        <span class="author__meta">With Brand New Dreamliners</span>
                                        <div class="btn-box pt-3">
                                            <a href="https://www.biman-airlines.com/#flight" class="theme-btn theme-btn-small theme-btn-transparent">Click here to Book a Flight</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-item destination-card">
                            <a href="/fleet-787">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/fleet/787-1.jpg')}}" alt="Boeing 787">
                                    <span class="badge">Boeing 787 Dreamliner</span>
                                </div>
                            </a>
                        </div>
                        <div class="card-item destination-card">
                            <a href="/fleet-777">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/fleet/777-1.jpg')}}" alt="Boeing 777">
                                    <span class="badge">Boeing 777-300ER</span>
                                </div>
                            </a>
                        </div>
                        <div class="card-item destination-card">
                            <a href="/fleet-dash8">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/fleet/dash8-1.jpg')}}" alt="Dash-8">
                                    <span class="badge">Bombardier Dash-8-Q400</span>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div>
                ** Features and Facilities may vary for various reasons!
            </div>
        </div>
    </div>
</section>

@endsection


@section('page-specific-footer')


@endsection
