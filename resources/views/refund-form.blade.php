@extends('header-footer')

@section('header-extension')
    {!! htmlScriptTagJsApi() !!}

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <style type="text/css">
        .daterangepicker {
            font-size: 9pt !important
        }

    </style>
@endsection

@section('content')
    <section class="breadcrumb-area bread-bg-3">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Refund Request & Policy</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li>Refund</li>
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

    <section class="contact-area section--padding custom-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('success'))
                        <div style="text-align: center;" class="alert alert-success messenger-box-contact__msg col-lg-12"
                            role="alert">
                            <i class="las la-lightbulb"></i> {{ session('success') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div style="text-align: center;" class="alert alert-danger messenger-box-contact__msg col-lg-12"
                            role="alert">
                            <i class="las la-exclamation-triangle"></i> {!! implode('', $errors->all(':message')) !!}
                        </div>
                    @endif
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Refund Request Process</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content">
                            <div class="contact-form-action">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <ol style="padding-left: 1rem; padding-right: 1rem;">
                                            <li>Dear Sir, Please read the Refund and Change Policy <b><a href="#Refund-and-Change-Policy">Click here</a>.</b></li>
                                            <li class="text-success"><b>If you have purchased your ticket using www.biman-airlines.com or Biman Mobile App, it can be refunded using the
                                                    following Refund Portal. If you have purchased your ticket from any "TRAVEL AGENCY", you need to contact with the Travel Agency for refund.</b></li>
                                            <li>Refunds will be credited back to the original credit card/mobile banking
                                                account used for payment.
                                            </li>
                                            <li>Standard refund terms and condition will apply. Refund request is subject to
                                                cancellation fee and other charges if any.</li>
                                            <li>Refund will be processed by Biman Bangladesh Airlines immediately. It may
                                                take up to 02 billing cycles to appear on your credit card statement and is
                                                subject to the card issuing bank.</li>
                                            <li>For any queries please send e-mail to <a href="mailto:ibebiman@bdbiman.com">ibebiman@bdbiman.com</a> &
                                                <a href="mailto:iberefund@bdbiman.com">iberefund@bdbiman.com</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    {{-- policy show starts --}}
                    <div class="form-box" id="Refund-and-Change-Policy">
                        <div class="form-title-wrap">

                            {{-- <div class="section-heading text-left"> --}}
                            <h3 class="title  font-weight-bold">Refund and Change Policy <span class="badge badge-success">Updated on 07.10.2023</span></h3>
                            {{-- </div> --}}


                        </div><!-- form-title-wrap -->
                        <div class="form-content contact-form-action">
                            <iframe src="{{ asset('assets/pdf/terms-conditions/RefundAndExchangePolicy_EffectiveFrom05OCT23.pdf') }}"
                                width="100%" height="500px">
                            </iframe>
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    {{-- policy show ends --}}
                    <div class="form-box">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item" style="width: 50%;">
                                <a class="nav-link custom-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab"
                                    aria-selected="true"><b>Refund Request Form</b></a>
                            </li>
                            <li class="nav-item" style="width: 50%;">
                                <a class="nav-link custom-link" id="refund_status-tab" data-toggle="tab" href="#refund_status" role="tab"
                                    aria-selected="false"><b>Check Refund Status</b></a>
                            </li>
                        </ul>
                        <div class="tab-content tab-bordered" id="myTab3Content">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview-tab">
                                <div class="form-content multi-person-wrap">
                                    <div class="contact-form-action">
                                        <form class="messenger-box-form" method="post" action="{{ route('refund-request') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12 responsive-column">
                                                    <h5>General Information</h5>
                                                </div>
                                                <hr style="width: 100%;">
                                            </div>

                                            <div class="row pt-3">
                                                
                                                <div class="col-lg-3 responsive-column" style="padding-right: 0;">
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <label class="label-text font-weight-bold" for="pnr">Booking Reference (PNR)
                                                            <span class="text-danger"> *</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-ticket form-icon"></span>
                                                            <input class="form-control @error('pnr') is-invalid @enderror "
                                                                value="{{ old('pnr') }}" type="text" name="pnr" id="pnr"
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                maxlength="6" placeholder="6 digit code on your ticket" required>

                                                            @error('pnr')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->

                                                <div class="col-lg-2 responsive-column" style="padding-right: 0;">
                                                    <div class="input-box">
                                                        <label class="label-text font-weight-bold ">Departure Date<span class="text-danger">
                                                                *</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>

                                                            <input id="departingDate" class=" form-control" type="text"
                                                                name="daterange_single" readonly="" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 responsive-column" style="padding-right: 0;">
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <label class="label-text font-weight-bold" for="email">Contact Email
                                                            <span class="text-danger"> *</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-envelope form-icon"></span>
                                                            <input class="form-control @error('email') is-invalid @enderror "
                                                                value="{{ old('email') }}" type="email" name="email" id="email"
                                                                placeholder="your email id" required>

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->

                                                <div class="col-lg-4 responsive-column">
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <label class="label-text font-weight-bold" for="email">Contact Phone
                                                            <span class="text-danger"> *</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-phone form-icon" style="z-index: 999"></span>
                                                            <div class="select-contain" style="width: auto; display: flex;">
                                                                <select class="select-contain-select" name="country_code" id="country_code" style="padding-left: 1rem;">
                                                                    {{-- <option value="country-code">Select country code</option> --}}

                                                                    @foreach ($countries as $country)
                                                                        <option value="{{ $country->iso }}-{{ $country->phonecode}}"
                                                                            data-countryName="{{ $country->name }}"
                                                                            data-code="{{ $country->phonecode }}" {{$country->iso == 'BD' ? 'selected':''}}>
                                                                            {{ $country->iso }} (+{{ $country->phonecode }})
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                                <input class="form-control @error('phone') is-invalid @enderror "
                                                                    value="{{ old('phone') }}" type="text" name="phone"
                                                                    id="phone" placeholder="your contact number" style="padding-left: .5rem;"
                                                                    required>
                                                            </div>


                                                            @error('phone')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                            </div>
                                            <div class="row pt-4">
                                                <div class="col-lg-12 responsive-column">
                                                    <h5>Account Information</h5>
                                                </div>
                                                <hr style="width: 100%;">
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <label class="label-text font-weight-bold" for="name">Credit Card/ Mobile Banking Account
                                                            Holder Full Name<span class="text-danger">
                                                                *</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-user form-icon"></span>
                                                            <input class="form-control @error('full_name') is-invalid @enderror "
                                                                value="{{ old('full_name') }}" type="text" id="full_name"
                                                                name="full_name" placeholder="payment account holder's full name"
                                                                required>

                                                            @error('full_name')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->

                                                <div class="col-lg-6 responsive-column">
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <label class="label-text font-weight-bold" for="last_digits">Last 04(four) Digits of
                                                            Credit Card/ Mobile Banking Account Number<span class="text-danger">
                                                                *</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-credit-card form-icon"></span>
                                                            <input class="form-control @error('last_digits') is-invalid @enderror "
                                                                value="{{ old('last_digits') }}" type="number" id="last_digits"
                                                                name="last_digits"
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                maxlength="4" placeholder="last 4 digit of your account number" required>

                                                            @error('last_digits')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div>

                                            <div class="row pt-4">
                                                <div class="col-lg-12 responsive-column">
                                                    <h5>Requesting Refund For</h5>
                                                </div>
                                                <hr style="width: 100%;">
                                                <div class="col-lg-12 responsive-column">
                                                    <span class="badge badge-success">ADD MORE PERSON USING THE GREEN "PLUS" ICON ON THE RIGHT. MAXIMUM 9 PERSON CAN BE ADDED</span>
                                                </div>

                                            </div>
                                            <div class="contact-form-action multi-person-field d-flex align-items-center">
                                                <div class="row flex-grow-1 align-items-center pt-3">
                                                    <div class="col-lg-6">
                                                        <div class="input-box">
                                                            <label class="label-text font-weight-bold " for="p_name_1" name="l_p_name_1"
                                                                id="l_p_name_1">Passenger Full Name<span class="text-danger">
                                                                    *</span></label>
                                                            <div class="form-group">
                                                                <span class="la la-user-alt form-icon custom-icon"></span>
                                                                <input
                                                                    class="form-control @error('p_name_1') is-invalid @enderror "
                                                                    value="{{ old('p_name_1') }}" type="text" id="p_name_1"
                                                                    name="p_name_1" placeholder="Traveller's Full Name" required>

                                                                @error('p_name_1')
                                                                    <span class="invalid-feedback" role="alert"></span>
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="input-box">
                                                            <label class="label-text font-weight-bold " for="p_ticket_1" name="l_p_ticket_1"
                                                                id="l_p_ticket_1">E-ticket Number<span class="text-danger">
                                                                    *</span></label>
                                                            <div class="form-group">
                                                                <span class="la la-ticket-alt form-icon custom-icon"></span>
                                                                <input
                                                                    class="form-control @error('p_ticket_1') is-invalid @enderror "
                                                                    value="{{ old('p_ticket_1') }}" type="text" id="p_ticket_1"
                                                                    name="p_ticket_1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                    maxlength="13" placeholder=" your 13 digit e-ticket number" required>

                                                                @error('p_ticket_1')
                                                                    <span class="invalid-feedback" role="alert"></span>
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                </div>
                                                <div class="multi-person-delete-wrap pt-3 pl-3">
                                                    <button class="multi-person-remove" type="button"><i
                                                            class="la la-remove"></i></button>
                                                </div>
                                                <div class="multi-person-add-wrap pt-3 pl-3">
                                                    <button class="add-person-btn" type="button">
                                                        <i class="la la-plus"></i></button>
                                                </div>
                                            </div>

                                            <div class="row pt-4">
                                                <div class="col-lg-12 responsive-column">
                                                    <h5>Additional Comment</h5>
                                                </div>
                                                <hr style="width: 100%;">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <label class="label-text font-weight-bold" for="reason">Reason of Refund
                                                            <span class="text-danger"> *</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-pencil form-icon"></span>
                                                            <input class="form-control @error('reason') is-invalid @enderror "
                                                                value="{{ old('reason') }}" type="text" name="reason" id="reason"
                                                                placeholder="Cause of Requesting Refund" maxlength="1000" required>

                                                            @error('reason')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 responsive-column">
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <label class="label-text font-weight-bold" for="comment">Description</label>
                                                        <div class="form-group">
                                                            <span class="la la-pen-fancy form-icon"></span>
                                                            <textarea class="message-control form-control @error('comment') is-invalid @enderror " name="comment" id="comment"
                                                                maxlength="1000" placeholder="Additional Comments">{{ old('comment') }}</textarea>
                                                            @error('comment')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 pt-3 pl-0 responsive-column">
                                                <div class="input-box messenger-box-input-wrap">
                                                    <div class="form-group">
                                                        {{-- <label class="label-text" for="g-recaptcha-response">Captcha<span
                                                                class="text-danger"> *</span></label> --}}

                                                        {!! htmlFormSnippet() !!}

                                                        @error('g-recaptcha-response')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->


                                            <div class="col-lg-12 ">
                                                <div class="btn-box messenger-box-input-wrap refund-submit-btn">
                                                    <button name="submit" type="submit" class="theme-btn send-message-btn"
                                                        id="send-message-btn">Submit
                                                    </button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </form>
                                    </div><!-- end contact-form-action -->
                                </div><!-- end form-content -->
                            </div>
                            <div class="tab-pane fade " id="refund_status" role="tabpanel" aria-labelledby="refund_status-tab">
                                <div class="form-content">
                                    <div class="contact-form-action">
                                        <form class="messenger-box-form" method="post" action="{{ route('refund_status-request') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12 responsive-column">
                                                    <h5>Check Status of Your Refund Request</h5>
                                                </div>
                                                <hr style="width: 100%;">
                                            </div>

                                            <div class="row pt-3">
                                                {{-- @if (session('success'))
                                                    <div class="alert alert-success messenger-box-contact__msg col-lg-12"
                                                        role="alert">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif --}}

                                                <div class="col-lg-6 responsive-column" >
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <label class="label-text font-weight-bold" for="pnr">Booking Reference (PNR)
                                                            <span class="text-danger"> *</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-ticket form-icon"></span>
                                                            <input class="form-control @error('pnr') is-invalid @enderror "
                                                                value="{{ old('pnr') }}" type="text" name="pnr" id="pnr"
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                maxlength="6" placeholder="6 digit code on your ticket"  required>

                                                            @error('pnr')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->

                                                <div class="col-lg-6 responsive-column">
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <label class="label-text font-weight-bold" for="last_digits">Last 4 Digits of
                                                            Credit Card/ Mobile Banking Account Number<span class="text-danger">
                                                                *</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-credit-card form-icon"></span>
                                                            <input class="form-control @error('last_digits') is-invalid @enderror "
                                                                value="{{ old('last_digits') }}" type="number" id="last_digits"
                                                                name="last_digits"
                                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                                maxlength="4" placeholder="last 4 digit of your account number" required>

                                                            @error('last_digits')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                
                                                <div class="col-lg-6 pt-2 pl-3 responsive-column">
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <div class="form-group">
                                                            {{-- <label class="label-text" for="g-recaptcha-response">Captcha<span
                                                                    class="text-danger"> *</span></label> --}}

                                                            {!! htmlFormSnippet() !!}

                                                            @error('g-recaptcha-response')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->

                                                <div class="col-lg-6 pt-5 responsive-column">
                                                    <div class="btn-box messenger-box-input-wrap refund-submit-btn">
                                                        <button name="submit" type="submit" class="theme-btn send-message-btn"
                                                            id="send-message-btn">Submit
                                                        </button>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end form-box -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->

        </div>



        </div>
        <!-- end container -->
    </section>
    <!-- end contact-area -->
@endsection

@section('page-specific-footer')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $('input[name="daterange_single"]').daterangepicker({
            singleDatePicker: true,
            autoApply: true,
        });
    </script>
@endsection
