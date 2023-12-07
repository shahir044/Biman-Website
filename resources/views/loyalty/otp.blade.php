@extends('header-footer')

@section('header-extension')
    {!! htmlScriptTagJsApi() !!}

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>

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
                                <h2 class="sec__title text-white">Become a Loyalty Member</h2>
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
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h5 class="font-weight-bold">Verify Your Account</h5>
                            <p class="font-size-15">Please check your email. We have sent you a verification code.</p>
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <form method="post" id="otpForm" action="@if(!empty($forgotPassword)) {{route('loyalty.fgp.otp')}} @else  {{route('loyalty.account.otp')}} @endif ">

                                    @csrf

                                    <div class="input-box">
                                        <label class="label-text">
                                            @if(\Illuminate\Support\Facades\Session::has('iotp'))
                                                <span class="invalid-feedback" role="alert"></span>
                                                <strong class="text-danger">{{\Illuminate\Support\Facades\Session::get('iotp')}}</strong>
                                            @else
                                                Enter OTP
                                            @endif

                                        </label>
                                        <div id="otp" class="form-group" style="display: flex">
                                            {{-- <span class="la la-user form-icon"></span>--}}
                                            <input type="hidden" name="email" id="email" value="{{$email}}">
                                            <input class="form-control" style="padding-right: 0px;margin-right: 5px"
                                                   id="first" name="first" type="tel" pattern="[0-9]" autofocus="true" maxlength="1" onkeyup="move(event,'','first','second')">

                                            <input class="form-control " style="padding-right: 0px;margin-right: 5px"
                                                   id="second" name="second"  type="tel" pattern="[0-9]" maxlength="1"  onkeyup="move(event,'first','second','third')">

                                            <input class="form-control" style="padding-right: 0px;margin-right: 5px"
                                                   id="third" name="third" type="tel" pattern="[0-9]" maxlength="1"  onkeyup="move(event,'second','third','fourth')">

                                            <input class="form-control" style="padding-right: 0px;margin-right: 5px"
                                                   id="fourth" name="fourth" type="tel" pattern="[0-9]" maxlength="1"  onkeyup="move(event,'third','fourth','fifth')">

                                            <input class="form-control" style="padding-right: 0px;margin-right: 5px"
                                                   id="fifth" name="fifth" type="tel" pattern="[0-9]" maxlength="1"  onkeyup="move(event,'fourth','fifth','sixth')">

                                            <input class="form-control" style="padding-right: 0px;" type="tel"
                                                   id="sixth" name="sixth" pattern="[0-9]" maxlength="1" onkeyup="move(event,'fifth','sixth','')">


                                        </div>
                                    </div><!-- end input-box -->
                                    {{-- <div class="input-box">
                                         <label class="label-text">Password</label>
                                         <div class="form-group mb-2">
                                             --}}{{-- <span class="la la-lock form-icon"></span>--}}{{--
                                             <input class="form-control"  style="padding-left: 10px"type="text" name="text" placeholder="Type your password">
                                         </div>
                                         <div class="d-flex align-items-center justify-content-end">
                                             --}}{{--<div class="custom-checkbox mb-0">
                                                 <input type="checkbox" id="rememberchb">
                                                 <label for="rememberchb">Remember me</label>
                                             </div>--}}{{--
                                             <p class="forgot-password">
                                                 <a href="#">Forgot Password?</a>
                                             </p>
                                         </div>
                                     </div><!-- end input-box -->--}}
                                    <div class="btn-box pt-3 pb-4 d-none" id="verify_button">
                                        <button type="submit" id="verfiyBtn" class="theme-btn w-100">Verify</button>
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
                                
                                 <p class="font-size-15">Note: If you didn't receive an OTP:</p>
                                <ul class="list-items list-items-bullet">
                                    <li class="font-size-15">Check your spam or junk email folder.</li>
                                    <li class="font-size-15">Confirm that your email address was entered correctly.</li>
                                </ul>
                                
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

            $("#otpForm").submit(function (e) {


                    //disable the submit button
                    document.getElementById("verfiyBtn").textContent = "Please wait...";
                    document.getElementById("verfiyBtn").disabled = true;
                    document.getElementById("verfiyBtn").style.background='#cccccc';
                    document.getElementById("verfiyBtn").style.borderColor='#cccccc';
                    document.getElementById("verfiyBtn").style.color='#666666';

                return true;

            });
        });
    </script>

    <script>
      /*  document.addEventListener("DOMContentLoaded", function (event) {
            function OTPInput() {
                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) {

                    inputs[i].addEventListener('keydown', function (event) {
                        console.log(i);
                        if (event.key === "Backspace") {
                            inputs[i].value = '';
                            if (i !== 0) inputs[i - 1].focus();
                        } else {
                            if (i === inputs.length - 1 && inputs[i].value !== '') {
                                return true;
                            } else if (event.keyCode > 47 && event.keyCode < 58) {
                                inputs[i].value = event.key;
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            } else if (event.keyCode > 64 && event.keyCode < 91) {
                                inputs[i].value = String.fromCharCode(event.keyCode);
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            }
                        }
                    });
                }
            }

            OTPInput();
        });*/

    function move(e,p,c,n) {



        var length = document.getElementById(c).value.length;
        var maxlength = document.getElementById(c).getAttribute("maxlength");
        var btn = document.getElementById('verify_button');

        var first = document.getElementById("first");
        var second = document.getElementById("second");
        var third = document.getElementById("third");
        var fourth = document.getElementById("fourth");
        var fifth = document.getElementById("fifth");
        var sixth = document.getElementById("sixth");

        if((first && first.value) && (second && second.value)&& (third && third.value) && (fourth && fourth.value) && (fifth && fifth.value)&&(sixth && sixth.value)){
            btn.classList.remove('d-none');
        }else{
            btn.classList.add('d-none');
        }


    
        if(length == maxlength){
            if(n!== ""){
                document.getElementById(n).focus();
            }
        }
        if(e.key === "Backspace"){
            document.getElementById(p).focus();
        }
    }

    </script>
@endsection
