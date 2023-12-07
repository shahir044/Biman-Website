@extends('header-footer')


@section('header-extension')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <style>
        /*Loader S*/
        .lds-dual-ring.hidden {
            display: none;
        }
        .lds-dual-ring {
            /*display: inline-block;*/
            width: 80px;
            height: 80px;
        }
        .lds-dual-ring:after {
            content: " ";
            display: block;
            width: 64px;
            height: 64px;
            margin: 18% auto;
            border-radius: 50%;
            border: 6px solid #fff;
            border-color: #2AAA8A transparent #2AAA8A transparent;
            animation: lds-dual-ring 1.2s linear infinite;
        }
        @keyframes lds-dual-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /*.overlay {
            position: absolute; z-index: 99998; top: 0px; left: 0px; width: 100%; height: 2384px; background: rgb(0, 0, 0); opacity: 0.5;
        }*/
        /*Loader E*/
    </style>

@endsection


@section('content')


    <!-- ================================
        START JOB-DETAILS AREA
    ================================= -->
    <section class="cta-area cta-bg bg-fixed section-padding">
        <div id="fullscreen-slide-contain">
            <img src="../assets/images/hero-bg7.jpg" alt="">
        </div><!-- End background slider -->

        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title text-white font-size-50 line-height-60">My Dashboard </h2>
                    </div><!-- end section-heading -->
                    <div class="btn-box padding-top-35px" style="height: 90px">

                        {{-- <a href="/loyalty-club/terms-and-conditions" class="theme-btn border-0">Terms & Conditions</a> --}}
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->

        <div class="container padding-bottom-70px mt-5">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tab text-center" id="lms-card">
                        <ul class="nav nav-tabs custom-widget-ul" id="myTab" role="tablist">
                            <li class="nav-item custom-widget-li">
                                <a class="nav-link d-flex align-items-center active" id="my-card-tab" data-toggle="tab"
                                   href="#my-card" role="tab" aria-controls="my-card" aria-selected="true">
                                    <i class="la la-plane mr-1"></i>Member Card Information
                                </a>
                            </li>
                            <li class="nav-item custom-widget-li">
                                <a class="nav-link d-flex align-items-center" id="my-profile-tab" data-toggle="tab"
                                   href="#my-profile" role="tab" aria-controls="my-profile"
                                   aria-selected="false">
                                    <i class="las la-suitcase mr-1"></i>My Profile
                                </a>
                            </li>
                            <li class="nav-item custom-widget-li">
                                <a class="nav-link d-flex align-items-center" id="history-tab" data-toggle="tab"
                                   href="#my-history" role="tab" aria-controls="my-history"
                                   aria-selected="false">
                                    <i class="las la-suitcase mr-1"></i>Activities History
                                </a>
                            </li>
                            <li class="nav-item custom-widget-li">
                                <a class="nav-link d-flex align-items-center" id="flight-mileage-claim-tab" data-toggle="tab"
                                   href="#flight-mileage-claim" role="tab" aria-controls="flight-mileage-claim"
                                   aria-selected="false">
                                    <i class="las la-clock mr-1"></i>Flight Mileage Claim
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content search-fields-container" id="myTabContent">
                        <div class="tab-pane fade show active" id="my-card" role="tabpanel"
                             aria-labelledby="my-card-tab">
                            <div class="form-content multi-person-wrap">
                                <div class="contact-form-action">
                                    {{-- <div class="table-form table-responsive pb-4"> --}}
                                    <div class="row">

                                        <div class="col-12">
                                            <ul class="list-items list-items-3 flex-grow-1">

                                                <li><span
                                                        class="font-weight-bold">Member Number:</span>{{$user->customer->external_id}}
                                                </li>
                                                <li><span
                                                        class="font-weight-bold">Tier:</span>{{$user->customer->current_slab}}
                                                </li>
                                                <li><span
                                                        class="font-weight-bold">Reward Balance:</span>{{$user->customer->loyalty_points}}
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div><!-- end tab-pane -->

                        <div class="tab-pane fade" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                            <div class="form-content ">
                                <div class="contact-form-action">
                                    <form class="messenger-box-form" id="profileForm" method="post"

                                          action="{{ route('loyalty.member.update-profile') }}">

                                        @csrf

                                        <div class="row">
                                            <div class="col-lg-12 responsive-column">
                                                <h6 class="title font-weight-bold">Personal Information</h6>
                                            </div>
                                            <hr style="width: 100%;">
                                        </div>
                                        <div class="row pt-1">

                                            <div class="col-lg-6 pr-0">
                                                <div>
                                                    <label class="label-text">Title <span
                                                            class="text-danger"> *</span> <span class="text-info font-weight-bold font-size-19"> <i class="las la-exclamation-circle" data-toggle="tooltip" data-placement="right" title="For Child Select MSTR/MISS"></i></span></label>
                                                    <div class="form-group select-contain w-auto">
                                                        <select class="select-contain-select @error('title') is-invalid @enderror" name="title" id="title" required>
                                                            <option value="">Select</option>
                                                            <option value="Mr" {{ ($user->customer->custom_fields->field[0]->value == "Mr" || $user->customer->custom_fields->field[0]->value == "MR") ? 'selected' : '' }}>Mr</option>
                                                            <option value="Mrs" {{ ($user->customer->custom_fields->field[0]->value == "Mrs" || $user->customer->custom_fields->field[0]->value == "MRS") ? 'selected' : '' }}>Mrs</option>
                                                            <option value="Ms" {{ ($user->customer->custom_fields->field[0]->value == "Ms" || $user->customer->custom_fields->field[0]->value == "MS") ? 'selected' : '' }}>Ms</option>
                                                            <option value="Mstr" {{ ($user->customer->custom_fields->field[0]->value == "Mstr" || $user->customer->custom_fields->field[0]->value == "MSTR") ? 'selected' : '' }}>Mstr</option>
                                                            <option value="Miss" {{ ($user->customer->custom_fields->field[0]->value == "Miss" || $user->customer->custom_fields->field[0]->value == "MISS" )? 'selected' : '' }}>Miss</option>

                                                        </select>
                                                        @error('title')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->

                                        </div>

                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="input-box messenger-box-input-wrap">
                                                    <label class="label-text" for="first_name">First/Given Name
                                                        <span class="text-danger"> *</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" name="first_name" id="first_name"
                                                               value="{{$user->customer->firstname}}" type="text"
                                                               readonly required="" style="padding-left: 20px">

                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->

                                            <div class="col-lg-4">
                                                <div class="input-box messenger-box-input-wrap">
                                                    <label class="label-text" for="last_name">Last/Surname Name
                                                        <span class="text-danger"> *</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" name="last_name" id="last_name"
                                                               value="{{$user->customer->lastname}}" type="text"
                                                               readonly required="" style="padding-left: 20px">

                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->

                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text ">Date of Birth<span class="text-danger">
                                                                *</span></label>
                                                    <div class="form-group">
                                                        <input class=" form-control @error('date_of_birth') is-invalid @enderror" type="text" name="date_of_birth"
                                                               value="{{\Carbon\Carbon::createFromFormat('Y-m-d', \Carbon\Carbon::parse($user->customer->extended_fields->field[3]->value)->toDateString())->format('d/m/Y')}}"
                                                                required style="padding-left: 20px">

                                                        @error('date_of_birth')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label class="label-text">Gender <span
                                                            class="text-danger"> *</span></label>
                                                    <div class="form-group select-contain w-auto">
                                                        <select class="select-contain-select  @error('gender') is-invalid @enderror" name="gender" id="gender" required>
                                                            <option value="">Select</option>
                                                            <option value="Male" {{ $user->customer->extended_fields->field[0]->value == "Male" ? 'selected' : '' }}>Male</option>
                                                            <option value="Female" {{ $user->customer->extended_fields->field[0]->value == "Female" ? 'selected' : '' }}>Female</option>
                                                            <option value="Others" {{$user->customer->extended_fields->field[0]->value == "Others" ? 'selected' : '' }}>Others</option>

                                                        </select>

                                                        @error('gender')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->

                                        </div>

                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="input-box messenger-box-input-wrap">
                                                    <label class="label-text" for="passport_number">Passport Number</label>
                                                    <div class="form-group">
                                                        <input class="form-control" name="passport_number" id="passport_number"
                                                               value="{{$user->customer->custom_fields->field[2]->value}}"
                                                               type="text"  style="padding-left: 20px">

                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-4">
                                                <label class="label-text" for="passport_issual_coun">Passport Issuing Country</label>
                                                <div class="form-group" style="width: auto; display: flex;">
                                                    <input class=" form-control" type="text" name="passport_issual_coun" id="passport_issual_coun"
                                                           value="{{$user->customer->custom_fields->field[5]->value}}"
                                                            style="padding-left: 20px">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text" for="passport_expiry">Passport Expiry Date</label>
                                                    <div class="form-group">
                                                        <input class=" form-control" type="text" name="passport_expiry" id="passport_expiry"
                                                               value="{{$user->customer->custom_fields->field[4]->value}}"
                                                                style="padding-left: 20px">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                        <div class="@if($errors->has('parent_ffn') || old('parent_ffn')|| !empty($user->customer->custom_fields->field[3]->value)) @else d-none @endif" id="parent-information">
                                            <div class="row pt-4">
                                                <div class="col-lg-12 responsive-column">
                                                    <h6 class="title font-weight-bold">Parent / Guardian Information</h6>
                                                    <p>Affiliation (parents/guardian) information (FF number) to be
                                                        mandatory for 2-12
                                                        age</p>
                                                </div>
                                                <hr style="width: 100%;">
                                            </div>

                                            <div class="row pt-1">
                                                <div class="col-lg-6">
                                                    <div class="input-box messenger-box-input-wrap">
                                                        <label class="label-text" for="parent_ffn">Frequent Flyer Number
                                                            <span class="text-danger"> *</span></label>
                                                        <div class="form-group">
                                                            <input class="form-control @error('parent_ffn') is-invalid @enderror  " value="{{$user->customer->custom_fields->field[3]->value}}" type="text"
                                                                   placeholder="FF Number" name="parent_ffn" id="parent_ffn"
                                                                   style="padding-left: 20px" readonly>

                                                            @error('parent_ffn')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                            </div>

                                        </div>

                                        <div class="row pt-4">
                                            <div class="col-lg-12 responsive-column">
                                                <h6 class="title font-weight-bold">Contact Information</h6>
                                            </div>
                                            <hr style="width: 100%;">

                                        </div>

                                        <div class="row pt-1">
                                            <div class="col-lg-6 ">
                                                <div class="input-box messenger-box-input-wrap">
                                                    <label class="label-text" for="email">Contact Email
                                                    </label>
                                                    <div class="form-group">

                                                        <input class="form-control" name="email" id="email"
                                                               value="{{ $user->customer->email }}" readonly
                                                               required style="padding-left: 20px">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->

                                            <div class="col-lg-6 ">
                                                <div class="input-box messenger-box-input-wrap">
                                                    <label class="label-text" for="phone">Mobile (Country code followed by mobile number)
                                                        </label>
                                                    <div class="form-group">

                                                        <input class=" form-control @error('phone') is-invalid @enderror  " type="text" name="phone" id="phone"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                               value="{{$user->customer->mobile}}" required
                                                               style="padding-left: 20px">

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
                                                <h6 class="title font-weight-bold">Mailing Address</h6>
                                            </div>
                                            <hr style="width: 100%;">
                                        </div>

                                        <div class="row pt-1">
                                            <div class="col-lg-8 ">
                                                <div class="input-box messenger-box-input-wrap">
                                                    <label class="label-text" for="email">Address
                                                        <span class="text-danger"> *</span></label>
                                                    <div class="form-group">

                                                        <input class="form-control  @error('address') is-invalid @enderror"
                                                               value="{{ $user->customer->custom_fields->field[1]->value}}" type="text" name="address"
                                                               id="email"
                                                               required
                                                               style="padding-left: 20px">

                                                        @error('address')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->


                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-box messenger-box-input-wrap">
                                                    <label class="label-text" for="city">City
                                                        <span class="text-danger"> *</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control @error('city') is-invalid @enderror"
                                                            value="{{ $user->customer->extended_fields->field[1]->value}}" type="text" name="city"
                                                            id="city"
                                                            required
                                                            style="padding-left: 20px">

                                                        @error('city')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->

                                            <div class="col-lg-6">
                                                <div class="input-box messenger-box-input-wrap">
                                                    <label class="label-text " for="country">Country
                                                        <span class="text-danger"> *</span></label>

                                                    <div class="form-group select-contain w-auto">
                                                        <select class="select-contain-select @error('country') is-invalid @enderror" name="country" id="country" required>
                                                            <option value="">Select</option>
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->nicename}}" {{ $user->customer->extended_fields->field[2]->value == $country->nicename ? 'selected' : '' }}>
                                                                    {{$country->nicename}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('country')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div><!-- end col-lg-3 -->


                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="btn-box pt-3">
                                                    <button type="submit" id="updateBtn" class="theme-btn send-message-btn">Update
                                                        Profile
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end form-content -->
                        </div><!-- end tab-pane -->

                        <div class="tab-pane fade" id="my-history" role="tabpanel" aria-labelledby="my-history">
                            <div class="form-content">
                                <div class="contact-form-action">

                                    <div class="col-lg-12 responsive-column">
                                        <h3 class="title font-weight-bold">Activites History</h3>
                                        <p class="font-size-15">The activity list will be populated for travel dates on/after the 5th of December,2022. If you already claimed your travel miles the activity records will not be shown however miles could already be credited in your account.</p>

                                    </div>
                                    <hr style="width: 100%;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <div class="form-content">
                                            <div class="table-form table-responsive" >
                                                <table class="table" id="transaction-history-table">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th scope="col">Ticket Number</th>
                                                        <th scope="col">Origin</th>
                                                        <th scope="col">Destination</th>
                                                        <th scope="col">Journey Date</th>
                                                        <th scope="col">Reward Miles Earned</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="show-transaction-history">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- end form-box -->
                                </div><!-- end col-lg-12 -->
                                <div class="col-lg-12 ">
                                    <div class="btn-box messenger-box-input-wrap text-center">
                                        <button name="get-transaction-history-btn"
                                                class="theme-btn send-message-btn"
                                                id="get-transaction-history-btn">View History
                                        </button>
                                    </div>
                                </div><!-- end col-lg-12 -->
                            </div>
                        </div><!-- end tab-pane -->

                        <div class="tab-pane fade" id="flight-mileage-claim" role="tabpanel"
                             aria-labelledby="flight-mileage-claim-tab">
                            <div class="form-content">

                                <div class="contact-form-action">
                                    <form class="row messenger-box-form" method="post" id="claim_mileage"
                                          action="{{ route('loyalty.member.claim-mileage') }}">
                                        @csrf

                                            <div class="col-lg-12 responsive-column">
                                                <h3 class="title font-weight-bold">Flight Mileage Claim</h3>
                                                <p class="font-size-15">Claims are only valid for flights flown within the last 90 days.</p>

                                            </div>
                                            <hr style="width: 100%;">

                                        {{--<div id="loader" class="lds-dual-ring hidden overlay"></div>--}}
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text" for="flight">Flight No.
                                                </label>
                                                <div class="form-group">

                                                    <div class="input-group">
                                                        <span class="input-group-text" style="border-top-right-radius:0rem;border-bottom-right-radius:0rem"><i class="la la-plane"></i> BG</span>
                                                        <input class="form-control" type="text" name="flight"
                                                               id="flight" placeholder="4039" required>
                                                    </div>
                                                    <span class="text-danger error-text flight_error" role="alert"></span>

                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->


                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text" for="departingDate">Journey
                                                    Date
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input id="departingDate" class=" form-control" type="text"
                                                           name="departingDate" required>
                                                    <span class="text-danger error-text departingDate_error" role="alert"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->


                                        <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Flying from</label>
                                                <div class="form-group">
                                                    <span class="la la-plane-departure form-icon custom-icon"></span>
                                                    <select style="width: 100%; !important" id="departure1"
                                                            name="from" class="form-control select2" placeholder="TYPE"
                                                            oninvalid="this.setCustomValidity('Please Select Departure City or Airport')"
                                                            oninput="this.setCustomValidity('')" required>
                                                        <option value=''>Departure City or Airport</option>
                                                    </select>
                                                    <span class="text-danger error-text from_error" role="alert"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->


                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Flying to</label>
                                                <div class="form-group">
                                                    <span class="la la-plane-arrival form-icon custom-icon"></span>

                                                    <select style="width: 100%; !important" id="arrival1"
                                                            name="to" class="form-control select2" placeholder="TYPE"
                                                            oninvalid="this.setCustomValidity('Please Select Arrival City or Airport')"
                                                            oninput="this.setCustomValidity('')" required>
                                                        <option value=''>Arrival City or Airport</option>
                                                    </select>
                                                    <span class="text-danger error-text to_error" role="alert"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->

                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text" for="to">Ticket Number
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-ticket form-icon"></span>
                                                    <input class="form-control" type="text" name="ticket_number"
                                                           id="ticket_number" placeholder="Ticket Number" required>
                                                    <span class="text-danger error-text ticket_number_error" role="alert"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->



                                        <div class="col-lg-12 ">
                                            <div class="btn-box float-right messenger-box-input-wrap">
                                                <button name="submit" type="submit"
                                                        class="theme-btn send-message-btn"
                                                        id="send-message-btn">Send
                                                </button>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                    </form>
                                </div>
                            </div>
                        </div><!-- end tab-pane -->




                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->

    </section><!-- end cta-area -->


@endsection

@section('page-specific-footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{asset('assets/js/loyalty/sweetalert2.all.min.js')}}"></script>
    <script src="{{ asset('assets/js/customJs/searchWidgetDestination_v11.js') }}"></script>

    <script>
        var nowDate = new Date();
        var priordate = new Date(new Date().getTime() - 90*24 * 60 * 60 * 1000);
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);

        $(function() {
            $('input[name="departingDate"]').daterangepicker({
                autoApply: true,
                singleDatePicker: true,
                showDropdowns: true,
                minDate: priordate,
                maxDate: today
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            $("#profileForm").submit(function (e) {

                    document.getElementById("updateBtn").textContent = "Please wait...";
                    document.getElementById("updateBtn").disabled = true;
                    document.getElementById("updateBtn").style.background='#cccccc';
                    document.getElementById("updateBtn").style.borderColor='#cccccc';
                    document.getElementById("updateBtn").style.color='#666666';
                return true;

            });
        });
    </script>


    <script>
        var year = 30;



        $('input[name="date_of_birth"]').daterangepicker({
            singleDatePicker: true,
            autoUpdateInput: false,
            showDropdowns: true,
            startDate: moment().subtract(2, 'years'),
            autoApply: true,
            maxDate: moment().subtract(2, 'years'),
            // maxYear: parseInt(moment().format('YYYY'),-2),
            locale: {
                format: 'DD/MM/YYYY',
                cancelLabel: 'Clear'
            }
        }, function (start, end, label) {
            var years = moment().diff(start, 'years');
            if (years >= 2 && years < 12) {

                $('#parent-information').removeClass('d-none');
                $("#title").val("Mstr").change();
                $('#parent_ffn').prop('required',true);

            } else {

                $('#parent-information').addClass('d-none');
                $('#parent_ffn').prop('required',false);
                if($("#title").find(":selected").val() === "Mstr" || $("#title").find(":selected").val() === "Miss"){
                    $("#title").val("").change();
                }

            }

        });


        $('input[name="date_of_birth"]').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY'));

        });

        $('input[name="date_of_birth"]').on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');
        });

        $('#gender').on('change', function() {
            if($("#title").find(":selected").val() === "Mstr" && $("#gender").find(":selected").val() === "Female"){
                $("#title").val("Miss").change();
            }else if($("#title").find(":selected").val() === "Miss" && $("#gender").find(":selected").val() === "Male"){
                $("#title").val("Mstr").change();
            }
        });

    </script>
    <script src="{{ asset('assets/js/loyalty/claim-mileage.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        $(document).ready(function () {



            $('#get-transaction-history-btn').click(function () {

                $.ajax({
                    type:'get',
                    url:'{{route('loyalty.member.get-transaction-history')}}',
                    beforeSend:function () {
                        Swal.fire({
                            text: 'Processing...',
                            allowOutsideClick:false,
                            didOpen: ()=>{
                                Swal.showLoading()
                            }

                        })

                    },
                    success:function (data) {
                      
                        Swal.close();
                        $("#show-transaction-history").html(data);
                        $("#get-transaction-history-btn").html('Refresh');
                        $('#transaction-history-table').DataTable();
                    }
                });
            });
        });

    </script>
@endsection
