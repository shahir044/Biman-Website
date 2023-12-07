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
                                <h3 class="title font-size-26">Boeing 787 Dreamliner</h3>
                                <div class="d-flex align-items-center pt-2">
                                    <p class="mr-2">Boeing 787-8, Boeing 787-9</p>
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
                                                <img src="{{ asset('assets/images/fleet/787-1.jpg') }}" alt="Boeing-787">
                                            </div>
                                        </div>
                                        <div class="card-item mb-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/fleet/787-2.jpg') }}" alt="Boeing-787">
                                            </div>
                                        </div>
                                        <div class="card-item mb-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/fleet/787-3.jpg') }}" alt="Boeing-787">
                                            </div>
                                        </div>
                                        <div class="card-item mb-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/fleet/787-4.jpg') }}" alt="Boeing-787">
                                            </div>
                                        </div>
                                        <div class="card-item mb-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/fleet/787-5.jpg') }}" alt="Boeing-787">
                                            </div>
                                        </div>
                                        <div class="card-item mb-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/fleet/787-6.jpg') }}" alt="Boeing-787">
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
                                                <h3 class="title font-size-15 font-weight-medium">Fresh air from outside</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Dimmable windows</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Laminar flow surfaces</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Head Up Display</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Gust suppression system</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-2">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">The electric jet: Brakes, Anti-ice system</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion accordion-item padding-top-30px" id="accordionExample2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading787one">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse787one" aria-expanded="false" aria-controls="fleetCollapse787one">
                                                            <span class="ml-3">AKASHBEENA</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse787one" class="collapse" aria-labelledby="fleetHeading787one" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 787-8 Dreamliner</li>
                                                            <li>Regn No.: S2-AJS </li>
                                                            <li>Business Seating: 24 </li>
                                                            <li>Economy Seating: 247 </li>
                                                            <li>Inauguration Date: 18/08/2018</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading787two">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse787two" aria-expanded="false" aria-controls="fleetCollapse787two">
                                                            <span class="ml-3">HANGSABALAKA</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse787two" class="collapse" aria-labelledby="fleetHeading787two" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 787-8 Dreamliner</li>
                                                            <li>Regn No.: S2-AJT </li>
                                                            <li>Business Seating: 24 </li>
                                                            <li>Economy Seating: 247 </li>
                                                            <li>Inauguration Date: 30/11/2018</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading787three">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse787three" aria-expanded="false" aria-controls="fleetCollapse787three">
                                                            <span class="ml-3">GAANGCHIL</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse787three" class="collapse" aria-labelledby="fleetHeading787three" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 787-8 Dreamliner</li>
                                                            <li>Regn No.: S2-AJV </li>
                                                            <li>Business Seating: 24 </li>
                                                            <li>Economy Seating: 247 </li>
                                                            <li>Inauguration Date: 24/07/2019</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading787four">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse787four" aria-expanded="false" aria-controls="fleetCollapse787four">
                                                            <span class="ml-3">RAJHANGSA</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse787four" class="collapse" aria-labelledby="fleetHeading787four" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 787-8 Dreamliner</li>
                                                            <li>Regn No.: S2-AJU </li>
                                                            <li>Business Seating: 24 </li>
                                                            <li>Economy Seating: 247 </li>
                                                            <li>Inauguration Date: 13/09/2019</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading787five">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse787five" aria-expanded="false" aria-controls="fleetCollapse787five">
                                                            <span class="ml-3">SHONAR TORI</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse787five" class="collapse" aria-labelledby="fleetHeading787five" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 787-9 Dreamliner</li>
                                                            <li>Regn No.: S2-AJY </li>
                                                            <li>Business Seating: 30 </li>
                                                            <li>Premium Economy Seating: 21 </li>
                                                            <li>Economy Seating: 247 </li>
                                                            <li>Inauguration Date: 20/12/2019</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header" id="fleetHeading787six">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#fleetCollapse787six" aria-expanded="false" aria-controls="fleetCollapse787six">
                                                            <span class="ml-3">AWCHIN PAKHI</span>
                                                            <i class="la la-minus"></i>
                                                            <i class="la la-plus"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="fleetCollapse787six" class="collapse" aria-labelledby="fleetHeading787six" data-parent="#accordionExample2">
                                                    <div class="card-body d-flex">
                                                        <ul>
                                                            <li>Type: B 787-9 Dreamliner</li>
                                                            <li>Regn No.: S2-AJX </li>
                                                            <li>Business Seating: 30 </li>
                                                            <li>Premium Economy Seating: 21 </li>
                                                            <li>Economy Seating: 247 </li>
                                                            <li>Inauguration Date: 23/12/2019</li>
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
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-bed"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Business Class</h3>
                                                    <li>787-8: 24 Seats</li> <li>787-9: 30 Seats</li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-bed"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Premium Economy Class</h3>
                                                    <li>787-9: 21 Seats</li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-bed"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Economy Class</h3>
                                                    <li>787-8: 247 Seats</li><li>787-9: 247 Seats</li>
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
                            <a href="/fleet-777">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/fleet/777-1.jpg')}}" alt="Boeing 777">
                                    <span class="badge">Boeing 777-300ER</span>
                                </div>
                            </a>
                        </div>
                        <div class="card-item destination-card">
                            <a href="/fleet-737">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/fleet/737-1.jpg')}}" alt="Boeing 737">
                                    <span class="badge">Boeing 737-800</span>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
<script type="text/javascript">
	$("img").lazyload({
	    effect : "fadeIn"
	});
</script>
@endsection
