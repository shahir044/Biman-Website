@extends('header-footer')

@section('header-extension')

@endsection

@section('content')
    <!-- ================================
    START CONTACT AREA
================================= -->
    <section class="contact-area  section--padding">
        <div class="container">
               {{-- <div class="row">
                    <div class="col-12">
                        <div class="form-box mb-0 pt-4 pb-4">
                          <div class="row">
                              <div class="col-md-6 text-center">
                                  <a href="#" class="theme-btn ">Domestic Flight Schedule</a>
                              </div>
                              <div class="col-md-6 text-center">
                                      <a href="#" class="theme-btn theme-btn-transparent bg-white">International Flight Schedule</a>
                              </div>
                          </div>
                        </div><!-- end payment-card -->
                    </div>
                </div><!-- end row -->--}}

            <div class="row">
                <div class="col-12">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title d-flex align-items-center justify-content-between">
                                <span><i class="la la-plane mr-2 text-gray"></i>Domestic Flight Schedule</span>
                               {{-- <span class="font-size-13 text-gray"><span class="text-danger">*</span> Required</span>--}}
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                </div>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end container -->
    </section>
    <!-- end contact-area -->
    <!-- ================================
    END CONTACT AREA
================================= -->
@endsection
