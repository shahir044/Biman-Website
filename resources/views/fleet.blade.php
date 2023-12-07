@extends('header-footer')
@section('header-extension')
@endsection

@section('content')


<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-3 before-none">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <p class="sec__desc pb-2">21 Fleet - 14 Countries - 30 Destinations</p>
                            <h2 class="sec__title font-size-40">Fleet Information</h2>
                        </div>
                        <div class="btn-box padding-top-35px">
                            <a href="/fleet-737" class="theme-btn">B-737</a>
                            <a href="/fleet-777" class="theme-btn">B-777</a>
                            <a href="/fleet-787" class="theme-btn">B-787</a>
                            <a href="/fleet-dash8" class="theme-btn">Dash-8</a>
                        </div>
                    </div> 
                </div> 
                <div class="col-lg-6">
                    <div class="image-box image-box-layout-2">
                        <a class="img__item img__item-1 shadow hover-y" data-fancybox="gallery" href="{{ asset('assets/images/fleet/777-1.jpg') }}" data-caption="Boeing 777-300ER">
                            <img src="{{ asset('assets/images/fleet/777-1.jpg') }}" class="w-100 h-100 radius-round-full" alt="Boeing 777-300ER">
                        </a>
                        <a class="img__item img__item-2 shadow hover-y" data-fancybox="gallery" href="{{ asset('assets/images/fleet/787-6.jpg') }}" data-caption="Boeing 787 Dreamliner">
                            <img src="{{ asset('assets/images/fleet/787-6.jpg') }}" class="w-100 h-100 radius-round-full" alt="Boeing 787 Dreamliner">
                        </a>
                        <a class="img__item img__item-3 shadow hover-y" data-fancybox="gallery" href="{{ asset('assets/images/fleet/737-4.jpg') }}" data-caption="Boeing 777-300ER">
                            <img src="{{ asset('assets/images/fleet/737-4.jpg') }}" class="w-100 h-100 radius-round-full" alt="Boeing 777-300ER">
                        </a>
                    </div><!-- end img-fluid -->
                </div><!-- end col-lg-6 -->
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
<section class="about-area padding-top-200px padding-bottom-40px overflow-hidden">
    <div class="container">
        <div class="row" style="text-align:justify;">
            <div class="col-lg-7">
                <div class="section-heading margin-bottom-40px">
                    
                    <p class="sec__desc pb-2">History of Biman Fleet</p>
                    <h2 class="sec__title">Youngest fleet in South Asia</h2>
                    <p class="sec__desc font-size-16 py-3">​Immediately after the independence, Biman Bangladesh Airlines started its journey on 4th January 1972 with a DC-3 aircraft. After procuring two F-27s, Biman finally took-off on 7th March 1972 with domestic flights to Chittagong and Sylhet from its base at Dhaka. Shortly after, a Boeing 707 aircraft joined the airline’s fleet, allowing Biman to begin international flights. By end of the Seventies, Biman had a fleet of 8 F27 and 5 Boeing 707 to serve domestic and international destinations.</p>
                    <p class="sec__desc font-size-16">The Eighties was the new era of building Biman fleet with new Fokker 28-4000 in 1981, wide-bodied three DC10-30s joined in 1983, one new DC10-30 joined in 1989. In early 1990, Biman phased out its aging F27 and purchased two new ATPs to serve domestic and some regional destinations. In 1996 Biman also purchased two new Airbus 310-300 from Airbus Company and phased out its ATPs in 2004.</p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5 ml-auto">
                <div class="image-box about-img-box image-box-layout-3">
                    <img src="{{ asset('assets/images/logo/biman_red_logo.png') }}" alt="about-img" class="img__item img__item-1">
                    <img src="{{ asset('assets/images/logo/50year-logo.png') }}" alt="about-img" class="img__item img__item-2">
                </div>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-12">
                <div class="section-heading margin-bottom-40px">
                    <p class="sec__desc font-size-16 pb-3">In order to modernize Biman fleet with new generation aircraft, Biman signed two agreements with Boeing in April and May 2008 for purchasing new generation 4 X 777-300ER, 4 X 787-8 and 2 X 737-800 aircraft. Four 777-300ER aircraft joined Biman fleet in October/November 2011, February 2014 and 21 March 2014. Two 737-800s aircraft joined Biman fleet in November/December 2015. Three Boeing 787-8 aircraft joined Biman fleet in August/December 2018 and August 2019. On 16 May 2019, 5th Boeing 737-800 arrives to join Biman fleet. 6th Boeing 737-800 arrives to join Biman fleet in June 30, 2019. Fourth new 787-8 aircraft delivered by Boeing on September 2019. </p>
                    <p class="sec__desc font-size-16 pb-3">The first of the three Dash-8 planes purchased based on G2G agreement between the Governments of Bangladesh and Canada was added to the fleet on 26 December 2020 and the second & third are respectively on 24 February 2021 & 05 March 2021.</p>
                    <p class="sec__desc font-size-16">At present, the total number of aircraft in the fleet is 21. Of these, four are Boeing 777-300 ER, four are Boeing 787-8, two are Boeing 787-9, six are Boeing 737 and five are Dash 8-400 aircraft.</p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
        
        <div class="row" style="text-align:justify;">
            <div class="col-lg-3">
                <div class="card-item destination-card">
                    <a href="/fleet-787">
                        <div class="card-img">
                            <img src="{{asset('assets/images/fleet/787-1.jpg')}}" alt="Boeing 787">
                            <span class="badge">Boeing 787 Dreamliner</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card-item destination-card">
                    <a href="/fleet-777">
                        <div class="card-img">
                            <img src="{{asset('assets/images/fleet/777-1.jpg')}}" alt="Boeing 777">
                            <span class="badge">Boeing 777-300ER</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card-item destination-card">
                    <a href="/fleet-737">
                        <div class="card-img">
                            <img src="{{asset('assets/images/fleet/737-1.jpg')}}" alt="Boeing 737">
                            <span class="badge">Boeing 737-800</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
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
        
    </div><!-- end container -->
</section><!-- end about-area -->
<!-- ================================
    END ABOUT AREA
================================= -->


@endsection


@section('page-specific-footer')


@endsection
