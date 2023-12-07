@extends('header-footer')

@section('header-extension')

@endsection

@section('content')

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-destinations">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content text-center">
                        <div class="hero-content pb-5 text-center">
                            <div class="section-heading">
                                
                            </div>
                        </div>
                        <span class="arrow-blink">
                            <i class="la la-arrow-down"></i>
                        </span>
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
    START DESTINATION AREA
================================= -->
<section class="destination-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!--<a href="{{route('destinations-domestic')}}">-->
                <a href="#">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/destinations/bangladesh-destinations.jpg')}}" alt="domestic">
                            <span class="badge">Domestic</span>
                        </div>
                        <div class="card-body"> 
                            
                            <h3 class="card-title">Domestic (Inside Bangladesh)</h3>
                            <div class="card-rating d-flex align-items-center">
                                
                                <span class="rating__text">Dhaka, Barishal, Chattogram, Cox's Bazar, Jashore, Rajshahi, Sylhet, Saidpur.</span>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </a>
                <!--<a href="{{route('destinations-subcontinent')}}">-->
                <a href="#">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/destinations/india-destinations.jpg')}}" alt="subcontinent">
                            <span class="badge">Subcontinent</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Subcontinent</h3>
                            <div class="card-rating d-flex align-items-center">
                                
                                <span class="rating__text">India, Nepal.</span>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </a>
                <a href="#">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/destinations/toronto-index.jpg')}}" alt="asia">
                            <span class="badge">North America</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">North America</h3>
                            <div class="card-rating d-flex align-items-center">
                                
                                <span class="rating__text">Canada (Toronto)</span>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </a>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4">
                <!--<a href="{{route('destinations-middle-east')}}">-->
                <a href="#">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/destinations/uae-destinations.jpg')}}" alt="middle-east">
                            <span class="badge">Middle East</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Middle East</h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="rating__text">Kuwait, Oman, Qatar, Saudi Arabia, United Arab Emirates.</span>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </a>
                <!--<a href="{{route('destinations-asia')}}">-->
                <a href="#">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/destinations/singapore-destinations.jpg')}}" alt="asia">
                            <span class="badge">South-East Asia</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">South-East Asia</h3>
                            <div class="card-rating d-flex align-items-center">
                                
                                <span class="rating__text">Malaysia, Singapore, Thailand.</span>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </a>
                <!--<a href="{{route('destinations-asia')}}">-->
                <a href="#">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/destinations/guangzhou-grid-1.jpg')}}" alt="asia">
                            <span class="badge">East Asia</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">East Asia</h3>
                            <div class="card-rating d-flex align-items-center">
                                
                                <span class="rating__text">China.</span>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </a>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4">
                <!--<a href="{{route('destinations-europe')}}">-->
                <a href="#">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="{{asset('assets/images/destinations/london-destinations.jpg')}}" alt="europe">
                            <span class="badge">Europe</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Europe</h3>
                            <div class="card-rating d-flex align-items-center">
                                
                                <span class="rating__text">England (London, Manchester)</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- end card-item -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end destination-area -->
<!-- ================================
    END DESTINATION AREA
================================= -->




@endsection


@section('page-specific-footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>


<script>
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#subscriptionForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: '{!! URL::route('addsubscriber')!!}',
            type:'post',
            data:{
                email: $('#email').val()
            },
            success: (data) =>{
                console.log(data);
                if(data.success == 0){                    
                    swal({
                        type: 'info',
                        html: data.message + '<br> Thank you for being with us.'
                    });

                }else if(data.success == 1){  
                    swal({
                        type: 'success',
                        html: data.message + '<br> Thank you for being with us.'
                    });
                }
            }
        });
    });
</script>


@endsection
