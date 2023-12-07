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
                                @if(!Session::has('forgot-password'))
                                <h2 class="sec__title text-white">Become a Loyalty Member</h2>
                                @else
                                    <h2 class="sec__title text-white">Reset Your password</h2>
                                @endif
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{route('loyalty.home')}}">Loyalty Club</a></li>
                                <li><a href="{{route('loyalty.register')}}">Register</a></li>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-box">
                        @if(!Session::has('forgot-password'))
                        <div class="form-title-wrap">
                            <h5 class="font-weight-bold">Join Loyalty Club</h5>
                            <p class="font-size-15">Frequent Flyer Program, with tiered benefits, lots of special offers and mileage rewards earned on every Biman flight.</p>
                       
                        <p class="font-size-15 mt-1">Already a Biman Loyalty Club member? <a class="font-weight-bold" href="{{route('login')}}">Log in</a></p>
                       
                        </div><!-- form-title-wrap -->
                        @endif
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <form class="messenger-box-form" method="post" id="regForm"
                                      action="@if(session('forgot-password')) {{route('loyalty.forgot-password')}} @else {{ route('generateToken') }} @endif">

                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-12 responsive-column">
                                            @if(session('forgot-password'))
                                                <h6 class="title font-weight-bold">Forgot Password</h6>
                                                @if(session('password-reset-failed'))
                                                    <p class="font-size-15 text-danger">{{\Illuminate\Support\Facades\Session::get('password-reset-failed')}}</p>
                                                @endif

                                            @else
                                            <h6 class="title font-weight-bold">Sign-up Information</h6>
                                            
                                              @if(session('otp_not_generated'))
                                                    <p class=" font-size-15 text-danger font-weight-bold">{{session('otp_not_generated')}}</p>
                                                @endif

                                            @endif
                                        </div>
                                        <hr style="width: 100%;">

                                    </div>

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
                                                     @if(session('user_exist'))
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">{{ \Illuminate\Support\Facades\Session::get('user_exist') }}</strong>
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->

                                    </div>


                                    <div class="row pt-1">
                                        <div class="col-lg-6">
                                            <div class="input-box messenger-box-input-wrap">
                                                @if(session('forgot-password'))
                                                    <label class="label-text " for="password">New Password
                                                        <span class="text-danger"> *</span></label>
                                                @else
                                                    <label class="label-text " for="password">Password
                                                        <span class="text-danger"> *</span></label>
                                                @endif

                                                <div class="form-group">
                                                    <input class="form-control @error('password') is-invalid @enderror "
                                                           type="password" name="password" id="password"
                                                           placeholder="Your Password" required style="padding-left: 20px">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @else
                                                        <p class="font-size-13  pb-3">The password must be at least 8 characters and contain at least one uppercase character and one number.</p>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->

                                        <div class="col-lg-6">
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
                                        </div><!-- end col-lg-3 -->

                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="submit-box">

                                                @if(!Session::has('forgot-password'))
                                                <div class="custom-checkbox pt-3">
                                                    <input type="checkbox" id="agreeChb" name="agreeChb">

                                                    <label for="agreeChb">
                                                        I acknowledge and accept the Biman Bangladesh Airlines <a style="color: #2aaa8a" href="{{route('privacyPolicy')}}" target="__blank">Privacy Policy </a> and <a style="color: #2aaa8a" href="{{route("loyalty.tc")}}" target="__blank">Terms and Conditions </a> of of the Biman Loyalty Club</label>

                                                    @error('agreeChb')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                                </div>
                                                @endif

                                                    <div class="input-box messenger-box-input-wrap pt-3">
                                                        <div class="form-group">
                                                            {!! htmlFormSnippet() !!}

                                                            @error('g-recaptcha-response')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                <div class="btn-box pt-3">
                                                    <button type="submit" id="signBtn" class="theme-btn send-message-btn">Send</button>
                                                </div>
                                            </div><!-- end submit-box -->
                                        </div>
                                    </div>

                                </form>
                            </div><!-- end contact-form-action -->
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

            $("#regForm").submit(function (e) {

                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;
                var confirm_password = document.getElementById("password-confirm").value;

                if((email.length != 0 && password.length !=0)&& confirm_password.length !=0){
                    //disable the submit button
                    document.getElementById("signBtn").textContent = "Please wait...";
                    document.getElementById("signBtn").disabled = true;
                    document.getElementById("signBtn").style.background='#cccccc';
                    document.getElementById("signBtn").style.borderColor='#cccccc';
                    document.getElementById("signBtn").style.color='#666666';

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
