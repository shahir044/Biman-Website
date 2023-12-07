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
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h5 class="font-weight-bold">Complete Your Profile</h5>
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action">
                                <form class="messenger-box-form" method="post"
  id="profileForm"
                                      action="{{ route('loyalty.account.submitProfile') }}">

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
                                                        <option value="Mr" {{ old('title') == "Mr" ? 'selected' : '' }}>Mr</option>
                                                        <option value="Mrs" {{ old('title') == "Mrs" ? 'selected' : '' }}>Mrs</option>
                                                        <option value="Ms" {{ old('title') == "Ms" ? 'selected' : '' }}>Ms</option>
                                                        <option value="Mstr" {{ old('title') == "Mstr" ? 'selected' : '' }}>Mstr</option>
                                                        <option value="Miss" {{ old('title') == "Miss" ? 'selected' : '' }}>Miss</option>

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

                                        <div class="col-lg-6">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text" for="first-name">First/Given Name
                                                    <span class="text-danger"> *</span></label>
                                                <div class="form-group">
                                                    <input class="form-control @error('first_name') is-invalid @enderror " name="first_name" id="first-name" value="{{old('first_name')}}" type="text"
                                                           placeholder="First name (as per passport)" required
                                                           style="padding-left: 20px">

                                                    @error('first_name')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                    <p class="font-size-13  pb-3"> *Your name must be entered in English as it appears on your passport.</p>


                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->

                                        <div class="col-lg-6">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text" for="last-name">Last/Surname Name
                                                    <span class="text-danger"> *</span></label>
                                                <div class="form-group">
                                                    <input class="form-control @error('last_name') is-invalid @enderror  "  type="text" name="last_name" id="last-name" value="{{old('last_name')}}"
                                                           placeholder="Last name (as per passport)" required
                                                           style="padding-left: 20px">

                                                    @error('last_name')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->


                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text ">Date of Birth<span class="text-danger">
                                                                *</span></label>
                                                <div class="form-group">
                                                    {{-- <span class="la la-calendar form-icon"></span>--}}

                                                    {{--   <input  class=" form-control" type="text" name="birthday" value="10/24/1984" />--}}

                                                    <input id="departingDate" class=" form-control  @error('daterange_single') is-invalid @enderror" type="text"
                                                           name="daterange_single" value="{{old('daterange_single')}}" placeholder="DD/MM/YYYY" required
                                                           style="padding-left: 20px">
                                                    @error('daterange_single')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div>
                                                <label class="label-text">Gender <span
                                                        class="text-danger"> *</span></label>
                                                <div class="form-group select-contain w-auto">
                                                    <select class="select-contain-select @error('gender') is-invalid @enderror" name="gender" id="gender" required>
                                                        <option value="">Select</option>
                                                        <option value="Male" {{ old('gender') == "Male" ? 'selected' : '' }}>Male</option>
                                                        <option value="Female" {{ old('gender') == "Female" ? 'selected' : '' }}>Female</option>
                                                        <option value="Others" {{ old('gender') == "Others" ? 'selected' : '' }}>Others</option>

                                                    </select>

                                                    @error('gender')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->

                                    </div>

                                    <div class="@if($errors->has('parent_ffn') || old('parent_ffn')) @else d-none @endif" id="parent-information">
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
                                                        <input class="form-control @error('parent_ffn') is-invalid @enderror  " value="{{old('parent_ffn')}}" type="text"
                                                               placeholder="FF Number" name="parent_ffn" id="parent_ffn"
                                                               style="padding-left: 20px">

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

                                                    <input class="form-control @error('email') is-invalid @enderror "
                                                           value="{{ $email }}" type="email" name="email"
                                                           id="email"
                                                            readonly
                                                           style="padding-left: 20px">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->

                                      <div class="col-lg-6 ">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text" for="phone">Contact Phone
                                                    <span class="text-danger"> *</span></label>
                                                <div class="form-group">

                                                    <div class="row">
                                                        <div class="col-lg-4">

                                                            <div class="select-contain"
                                                                 style="width: auto; display: flex;">
                                                                <select class="select-contain-select"
                                                                        name="country_code" id="country_code"
                                                                        style="padding-left: 1rem;">

                                                                    @foreach ($countries as $country)
                                                                        <option
                                                                            value="{{ $country->phonecode}}"
                                                                            data-countryName="{{ $country->name }}"
                                                                            data-code="{{ $country->phonecode }}" {{$country->iso == 'BD' ? 'selected':''}}>
                                                                            {{ $country->iso }}
                                                                            (+{{ $country->phonecode }})
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">

                                                            <input
                                                                class="form-control @error('phone') is-invalid @enderror "
                                                                value="{{ old('phone') }}" type="text" name="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                                id="phone" placeholder="Phone Number"
                                                                style="padding-left: 20px;"
                                                                required>
                                                        </div>
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
                                            <h6 class="title font-weight-bold">Mailing Address</h6>
                                        </div>
                                        <hr style="width: 100%;">
                                    </div>

                                    <div class="row pt-1">
                                        <div class="col-lg-8 ">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text" for="address">Address
                                                    <span class="text-danger"> *</span></label>
                                                <div class="form-group">

                                                    <input class="form-control @error('address') is-invalid @enderror "
                                                           value="{{ old('address') }}" type="text" name="address"
                                                           id="address" required
                                                           placeholder="Enter Address"
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
                                                    <input class="form-control @error('city') is-invalid @enderror "
                                                           value="{{ old('city') }}" type="text" name="city"
                                                           id="city" required
                                                           placeholder="Enter City"  style="padding-left: 20px">

                                                    @error('city')
                                                    <span class="invalid-feedback" role="alert"></span>
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->

                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box messenger-box-input-wrap">
                                                <label class="label-text" for="country">Country<span
                                                        class="text-danger"> *</span></label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select" id="country"
                                                                name="country" required>
                                                            <option value="">Select country</option>
                                                            <option value="Afghanistan">Afghanistan
                                                            </option>
                                                            <option value="Åland Islands">Åland
                                                                Islands
                                                            </option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American
                                                                Samoa
                                                            </option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica
                                                            </option>
                                                            <option value="Antigua and Barbuda">Antigua
                                                                and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan
                                                            </option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh
                                                            </option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegovina">
                                                                Bosnia and Herzegovina
                                                            </option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet
                                                                Island
                                                            </option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">
                                                                British Indian Ocean Territory
                                                            </option>
                                                            <option value="Brunei Darussalam">Brunei
                                                                Darussalam
                                                            </option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso
                                                            </option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde
                                                            </option>
                                                            <option value="Cayman Islands">Cayman
                                                                Islands
                                                            </option>
                                                            <option value="Central African Republic">
                                                                Central African Republic
                                                            </option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas
                                                                Island
                                                            </option>
                                                            <option value="Cocos (Keeling) Islands">
                                                                Cocos (Keeling) Islands
                                                            </option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option
                                                                value="Congo, The Democratic Republic of The">
                                                                Congo, The Democratic Republic of The
                                                            </option>
                                                            <option value="Cook Islands">Cook Islands
                                                            </option>
                                                            <option value="Costa Rica">Costa Rica
                                                            </option>
                                                            <option value="Cote D'ivoire">Cote
                                                                D'ivoire
                                                            </option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech
                                                                Republic
                                                            </option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican
                                                                Republic
                                                            </option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador
                                                            </option>
                                                            <option value="Equatorial Guinea">Equatorial
                                                                Guinea
                                                            </option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">
                                                                Falkland Islands (Malvinas)
                                                            </option>
                                                            <option value="Faroe Islands">Faroe
                                                                Islands
                                                            </option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French
                                                                Guiana
                                                            </option>
                                                            <option value="French Polynesia">French
                                                                Polynesia
                                                            </option>
                                                            <option value="French Southern Territories">
                                                                French Southern Territories
                                                            </option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe
                                                            </option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guernsey">Guernsey</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-bissau">
                                                                Guinea-bissau
                                                            </option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option
                                                                value="Heard Island and Mcdonald Islands">
                                                                Heard Island and Mcdonald Islands
                                                            </option>
                                                            <option value="Holy See (Vatican City State)">
                                                                Holy See (Vatican City State)
                                                            </option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran, Islamic Republic of">
                                                                Iran, Islamic Republic of
                                                            </option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man
                                                            </option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jersey">Jersey</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan
                                                            </option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option
                                                                value="Korea, Democratic People's Republic of">
                                                                Korea, Democratic People's Republic of
                                                            </option>
                                                            <option value="Korea, Republic of">Korea,
                                                                Republic of
                                                            </option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan
                                                            </option>
                                                            <option
                                                                value="Lao People's Democratic Republic">
                                                                Lao People's Democratic Republic
                                                            </option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">
                                                                Libyan Arab Jamahiriya
                                                            </option>
                                                            <option value="Liechtenstein">
                                                                Liechtenstein
                                                            </option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg
                                                            </option>
                                                            <option value="Macao">Macao</option>
                                                            <option
                                                                value="Macedonia, The Former Yugoslav Republic of">
                                                                Macedonia, The Former Yugoslav Republic
                                                                of
                                                            </option>
                                                            <option value="Madagascar">Madagascar
                                                            </option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall
                                                                Islands
                                                            </option>
                                                            <option value="Martinique">Martinique
                                                            </option>
                                                            <option value="Mauritania">Mauritania
                                                            </option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">
                                                                Micronesia, Federated States of
                                                            </option>
                                                            <option value="Moldova, Republic of">
                                                                Moldova, Republic of
                                                            </option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montenegro">Montenegro
                                                            </option>
                                                            <option value="Montserrat">Montserrat
                                                            </option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique
                                                            </option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands
                                                            </option>
                                                            <option value="Netherlands Antilles">
                                                                Netherlands Antilles
                                                            </option>
                                                            <option value="New Caledonia">New
                                                                Caledonia
                                                            </option>
                                                            <option value="New Zealand">New Zealand
                                                            </option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk
                                                                Island
                                                            </option>
                                                            <option value="Northern Mariana Islands">
                                                                Northern Mariana Islands
                                                            </option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory, Occupied">
                                                                Palestinian Territory, Occupied
                                                            </option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New
                                                                Guinea
                                                            </option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines
                                                            </option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico
                                                            </option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian
                                                                Federation
                                                            </option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Helena">Saint Helena
                                                            </option>
                                                            <option value="Saint Kitts and Nevis">Saint
                                                                Kitts and Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia
                                                            </option>
                                                            <option value="Saint Pierre and Miquelon">
                                                                Saint Pierre and Miquelon
                                                            </option>
                                                            <option
                                                                value="Saint Vincent and The Grenadines">
                                                                Saint Vincent and The Grenadines
                                                            </option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino
                                                            </option>
                                                            <option value="Sao Tome and Principe">Sao
                                                                Tome and Principe
                                                            </option>
                                                            <option value="Saudi Arabia">Saudi Arabia
                                                            </option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles
                                                            </option>
                                                            <option value="Sierra Leone">Sierra Leone
                                                            </option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon
                                                                Islands
                                                            </option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa
                                                            </option>
                                                            <option
                                                                value="South Georgia and The South Sandwich Islands">
                                                                South Georgia and The South Sandwich
                                                                Islands
                                                            </option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen">
                                                                Svalbard and Jan Mayen
                                                            </option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland
                                                            </option>
                                                            <option value="Syrian Arab Republic">Syrian
                                                                Arab Republic
                                                            </option>
                                                            <option value="Taiwan, Province of China">
                                                                Taiwan, Province of China
                                                            </option>
                                                            <option value="Tajikistan">Tajikistan
                                                            </option>
                                                            <option value="Tanzania, United Republic of">
                                                                Tanzania, United Republic of
                                                            </option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-leste">Timor-leste
                                                            </option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad
                                                                and Tobago
                                                            </option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan
                                                            </option>
                                                            <option value="Turks and Caicos Islands">
                                                                Turks and Caicos Islands
                                                            </option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United
                                                                Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United
                                                                Kingdom
                                                            </option>
                                                            <option value="United States">United
                                                                States
                                                            </option>
                                                            <option
                                                                value="United States Minor Outlying Islands">
                                                                United States Minor Outlying Islands
                                                            </option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan
                                                            </option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Viet Nam">Viet Nam</option>
                                                            <option value="Virgin Islands, British">
                                                                Virgin Islands, British
                                                            </option>
                                                            <option value="Virgin Islands, U.S.">Virgin
                                                                Islands, U.S.
                                                            </option>
                                                            <option value="Wallis and Futuna">Wallis and
                                                                Futuna
                                                            </option>
                                                            <option value="Western Sahara">Western
                                                                Sahara
                                                            </option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                        @error('country')
                                                        <span class="invalid-feedback" role="alert"></span>
                                                        <strong
                                                            class="text-danger">{{ $message }}</strong>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->


                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="submit-box">
                                                <div class="btn-box pt-3">
                                                    <button type="submit" id="send" class="theme-btn send-message-btn">Send
                                                    </button>
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

            $("#profileForm").submit(function (e) {

                document.getElementById("send").textContent = "Please wait...";
                document.getElementById("send").disabled = true;
                document.getElementById("send").style.background='#cccccc';
                document.getElementById("send").style.borderColor='#cccccc';
                document.getElementById("send").style.color='#666666';
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


        $('input[name="daterange_single"]').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY'));

        });

        $('input[name="daterange_single"]').on('cancel.daterangepicker', function (ev, picker) {
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
@endsection
