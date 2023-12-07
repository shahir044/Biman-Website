@extends('header-footer')

@section('header-extension')

@endsection

@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-3">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content text-center">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Discover Our Exclusive Offers</h2>
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
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
            <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
        START OFFERS AREA
    ================================= -->
    <section class="hotel-area section-bg section-padding overflow-hidden padding-right-3rem padding-left-3rem padding-top-10px padding-bottom-10px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">Promotional Offers & Updates</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-40px">
                <div class="col-lg-12">
                    <div class="hotel-card-wrap">
                        <div class="hotel-card-carousel-2 carousel-action">
                            <div class="card-item mb-0">
                                <div class="card-img">
                                    <a data-src="{{ asset('assets/images/offers/marketingBanner3.jpeg') }}"
                                        data-fancybox="5% Discount NEWYEAR23"
                                        data-caption="5% Discount NEWYEAR23"
                                        data-speed="700">
                                        <img src="{{ asset('assets/images/offers/marketingBanner3.jpeg') }}" alt="5% Discount NEWYEAR23">
                                    </a>
                                </div>
                            </div>
                        
                        </div> 
                    </div>
                </div> 
            </div> 
        </div> 
    </section> 
    
    <!-- ================================
        END OFFERS AREA
    ================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="sec__desc text-white-50 pb-1">Get Special Offers</p>
                    <h2 class="sec__title font-size-30 text-white">Thoughtful Thoughts to Your Inbox</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5"> 
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form method="POST" id="subscriptionForm" action="javascript:void(0)">
                            @csrf
                            <div class="input-box">
                                <label class="label-text text-white">Enter email address</label>
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Email address">
                                    <button class="theme-btn theme-btn-small submit-btn" type="submit">Subscribe</button>
                                    <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't worry your information is safe with us.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->


@endsection


@section('page-specific-footer')
    <!-- Page Specific JS Files -->
    <script src="{{ asset('assets/js//masonry-4.2.2.min.js') }}"></script>
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
