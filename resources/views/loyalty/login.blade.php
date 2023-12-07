@extends('header-footer')

@section('header-extension')
    {!! htmlScriptTagJsApi() !!}

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <style type="text/css">
        .daterangepicker {
            font-size: 9pt !important
        }

        /*.select-contain .dropdown-toggle {*/
        /*    padding: 14px 20px 14px 40px;*/
        /*}*/
        /*  body > section.contact-area.section--padding > div > div > div > div > div.form-content > div > form > div:nth-child(2) > div.col-lg-3.pr-0 > div > div > div > button{
              padding-left: 1rem !important;
          }*/
        /*#overview > div > div > form > div:nth-child(3) > div.col-lg-4.responsive-column > div > div > div > div > button {*/
        /*    padding-left: 1rem !important;*/
        /*}*/
    </style>
@endsection

@section('content')

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-loyalty-register">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <!--<h2 class="sec__title text-white">Become a Loyalty Member</h2>-->
                                 <h2 class="sec__title text-white">Biman Loyalty Club</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{route('loyalty.home')}}">Loyalty Club</a></li>
                                <li><a href="{{route('loyalty.register')}}">Login</a></li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->
    <!-- ================================
    START CONTACT AREA
================================= -->
    <section class="contact-area section--padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h5 class="font-weight-bold text-center">Login to Loyalty Club</h5>

                            <div class="card mt-2">
                                <div class="card-body">
                                    <p class=" font-size-15 text-danger">
                                        
                                         Dear BLC Member, We've migrated to the new BLC system.
                                        If you haven't signed up through this website before, please <a class="text-danger font-size-15 font-weight-bold" style="text-decoration: underline;
    color: #2aaa8a!important" href="{{route('loyalty.register')}}">Sign up</a>.
                                       <!-- Dear BLC Member,
                                        We've migrated to the new BLC system.  To login to your BLC account, please first <a class="text-danger font-weight-bold" href="{{route('loyalty.register')}}">sign up</a> using your email address.
                                   -->
                                    </p>
                                    
                                                                        <p class=" font-size-15 text-danger mt-1">Click <a class="text-danger font-size-15 font-weight-bold" style="text-decoration: underline;
    color: #2aaa8a!important" href="{{ asset('assets/pdf/loyalty/Loyalty_Registration_Process.pdf') }}" target="__blank">here</a> to check the details.</p>
                                </div>
                            </div>

                          {{--  @if($errors->any())
                                <p class=" font-size-15 text-danger">{{$errors->first()}}</p>
                            @endif--}}
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <form id="loginForm" method="post" action="{{ route('login') }}">

                                    @csrf

                                    @if(session('password-reset'))
                                        <p class=" font-size-15 text-success font-weight-bold">Congratulations! Your password has been reset successfully.</p>
                                    @endif
                                    <div class="input-box">
                                        <label class="label-text">Email</label>
                                        <div class="form-group">
                                             <span class="la la-envelope form-icon"></span>
                                            <input class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" type="text" id="email" name="email" placeholder="Type your email" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert"></span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="input-box">
                                        <label class="label-text">Password</label>
                                        <div class="form-group mb-2">
                                             <span class="la la-lock form-icon"></span>
                                            <input class="form-control" type="password" id="password" name="password" placeholder="Type your password" required>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            {{--<div class="custom-checkbox mb-0">
                                                <input type="checkbox" id="rememberchb">
                                                <label for="rememberchb">Remember me</label>
                                            </div>--}}
                                            <p class="forgot-password">
                                                <a href="{{route('loyalty.forgot-password-view')}}">Forgot Password?</a>
                                            </p>
                                        </div>
                                    </div><!-- end input-box -->
                                    <div class="btn-box pt-3 pb-4">
                                        <button type="submit" id="loginBtn" class="theme-btn w-100"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
                                    </div>
                                    <div>
                                        <p class="text-center">Don’t have an account? <a class="font-weight-bold" href="{{route('loyalty.register')}}">Sign up</a></p>
                                    </div>
                                    {{--  <div class="action-box text-center">
                                          <p class="font-size-14">Or Login Using</p>
                                          <ul class="social-profile py-3">
                                              <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                              <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                              <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                              <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                          </ul>
                                      </div>--}}
                                </form>
                            </div><!-- end contact-form-action -->
                           {{-- <div class="contact-form-action">
                                <form class="messenger-box-form" method="post"
                                      action="{{ route('login') }}">

                                    @csrf

                                  --}}{{--  <div class="row">
                                        <div class="col-lg-12 responsive-column">
                                            <h6 class="title font-weight-bold">Log-in Information</h6>
                                        </div>
                                        <hr style="width: 100%;">
                                    </div>
--}}{{--
                                    <div class="row pt-1">
                                        <div class="col-lg-6 ">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text" for="email">Email
                                                    <span class="text-danger"> *</span></label>
                                                <div class="form-group">

                                                    <input class="form-control @error('email') is-invalid @enderror "
                                                           value="{{ old('email') }}" type="email" name="email" id="email"
                                                           placeholder="Email Address" required style="padding-left: 20px">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->

                                        <div class="col-lg-6">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text " for="password">Password
                                                    <span class="text-danger"> *</span></label>
                                                <div class="form-group">
                                                    <input class="form-control @error('password') is-invalid @enderror "
                                                           type="password" name="password" id="password"
                                                           placeholder="Your Password" required style="padding-left: 20px">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->

                                    </div>


                                  --}}{{--  <div class="row pt-1">
                                        <div class="col-lg-6">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text " for="password">Password
                                                    <span class="text-danger"> *</span></label>
                                                <div class="form-group">
                                                    <input class="form-control @error('password') is-invalid @enderror "
                                                           type="password" name="password" id="password"
                                                           placeholder="Your Password" required style="padding-left: 20px">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->

                                    --}}{{----}}{{--    <div class="col-lg-6">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text" for="password-confirm">Confirm Password
                                                    <span class="text-danger"> *</span></label>
                                                <div class="form-group">
                                                    <input class="form-control @error('password_confirmation') is-invalid @enderror "
                                                           type="password" name="password_confirmation" id="password-confirm"
                                                           placeholder="Confirm Your Password" required style="padding-left: 20px">

                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->--}}{{----}}{{--

                                    </div>
--}}{{--

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="submit-box">
                                               --}}{{-- <div class="custom-checkbox pt-3">
                                                    <input type="checkbox" id="agreeChb" name="agreeChb">

                                                    <label for="agreeChb">
                                                        I acknowledge and accept the terms of Biman Bangladesh Airlines <a href="">Privacy Policy </a> and <a href="">Terms and Conditions</a> of the registered customer account</label>

                                                    @error('agreeChb')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                                </div>

                                                <div class="input-box messenger-box-input-wrap pt-3">
                                                    <div class="form-group">
                                                        {!! htmlFormSnippet() !!}

                                                        @error('g-recaptcha-response')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror

                                                    </div>
                                                </div>--}}{{--
                                                <div class="btn-box pt-3">
                                                    <button type="submit" class="theme-btn send-message-btn"><i class="la la-sign-in-alt" style="font-size: 1.1rem"></i> Login</button>
                                                </div>
                                            </div><!-- end submit-box -->
                                        </div>
                                    </div>

                                </form>
                            </div><!-- end contact-form-action -->--}}
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end contact-area -->
    <!-- ================================
    END CONTACT AREA
================================= -->
@endsection

@section('page-specific-footer')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#loginForm").submit(function (e) {

                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;

                if(email.length != 0 && password.length !=0){
                    //disable the submit button
                    document.getElementById("loginBtn").textContent = "Please wait...";
                    document.getElementById("loginBtn").disabled = true;
                    document.getElementById("loginBtn").style.background='#cccccc';
                    document.getElementById("loginBtn").style.borderColor='#cccccc';
                    document.getElementById("loginBtn").style.color='#666666';

                }
                return true;

            });
        });
    </script>

    <script>
        var year = 30;

        $('input[name="daterange_single"]').daterangepicker({
            singleDatePicker: true,
            autoUpdateInput: false,
            showDropdowns: true,
            startDate:moment().subtract(2,'years'),
            autoApply: true,
            maxDate: moment().subtract(2,'years'),
            // maxYear: parseInt(moment().format('YYYY'),-2),
            locale: {
                format: 'DD/MM/YYYY',
                cancelLabel: 'Clear'
            }
        }, function(start, end, label) {
            var years = moment().diff(start, 'years');
            if(years>=2 && years<12){
                $('#parent-information').removeClass('d-none');
            }else{
                $('#parent-information').addClass('d-none');
            }

        });

        /* $(function() {
             $('input[name="daterange_single"]').daterangepicker({
                 singleDatePicker: true,
                 showDropdowns: true,
                 autoUpdateInput: false,
                 minYear: 1901,
                 maxYear: parseInt(moment().format('YYYY'),10)
             }, function(start, end, label) {
                 var years = moment().diff(start, 'years');
                 alert("You are " + years + " years old!");
             });
         });*/

        $('input[name="daterange_single"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY'));

        });

        $('input[name="daterange_single"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
@endsection
