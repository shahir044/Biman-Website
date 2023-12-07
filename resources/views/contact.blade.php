@extends('header-footer')

@section('header-extension')
{!! htmlScriptTagJsApi() !!}
<style>
        .verticalLine {
            border-left: thin solid #f0e7d6;
        }
        .ml-auto, .mx-auto {
            border: 1px solid;
        }
    </style>
@endsection

@section('content')
<!-- ================================
            START BREADCRUMB AREA
        ================================= -->
<section class="breadcrumb-area bread-bg-3">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Contact & Feedback</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li>Contact Us</li>
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
<section class="contact-area section--padding custom-padding">
    <div class="container">
        <div class="row padding-top-50px">
            <div class="col-lg-12">
                <div class="flight-filter-tab">
                    <div class="section-tab section-tab-3">
                        <ul class="nav nav-tabs justify-content-around" id="myTab4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="customer-feedback-tab" data-toggle="tab" href="#customer-feedback" role="tab" aria-controls="customer-feedback" aria-selected="false">
                                    Customer Feedback
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="domestic-tab" data-toggle="tab" href="#domestic" role="tab" aria-controls="domestic" aria-selected="false">
                                    Domestic Office
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="global-office-tab" data-toggle="tab" href="#global-office" role="tab" aria-controls="global-office" aria-selected="false">
                                    Global Office
                                </a>
                            </li>
                        </ul>
                    </div><!-- end section-tab -->
                </div><!-- end flight-filter-tab -->
                <div class="popular-round-trip-wrap padding-top-40px">
                    <div class="tab-content" id="contactusTab">
                        <div class="tab-pane fade show active" id="customer-feedback" role="tabpanel" aria-labelledby="customer-feedback-tab">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <div class="form-title-wrap">
                                            <h3 class="title">We'd love to hear from you</h3>
                                            <p class="font-size-15">Send us a message and we'll respond as soon as
                                                possible</p>
                                        </div><!-- form-title-wrap -->
                                        <div class="form-content ">
                                            <div class="contact-form-action">
                                                <h6>You can also send us a Direct Mail to <a href="mailto:ibebiman@bdbiman.com">ibebiman@bdbiman.com</a>. We will reply you as soon as possible.</h6>
                                                                <hr>
                                                <form class="row messenger-box-form" method="post" enctype="multipart/form-data" action="{{ route('submitFeedback') }}">
                                                    @csrf

                                                    @if (session('success'))
                                                    <div class="alert alert-success messenger-box-contact__msg col-lg-12" role="alert">
                                                        {{ session('success') }}
                                                    </div>
                                                    @endif
                                                    <div class="col-lg-12 responsive-column">
                                                        @if($errors->any())
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">Please Note: {!! implode('', $errors->all('<div>:message</div>')) !!}</strong>
                                                        @endif
                                                        <br>
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <fieldset class="row mb-3">
                                                                <legend class="label-text col-sm-2 pt-0">Select
                                                                    Category<span class="text-danger"> *</span>
                                                                </legend>
                                                                <div class="col-sm-10">
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="suggestionType" id="inlineRadio1" value="Compliment" checked>
                                                                        <label class="form-check-label" for="inlineRadio1">Compliment</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="suggestionType" id="inlineRadio2" value="Suggestion">
                                                                        <label class="form-check-label" for="inlineRadio2">Suggestion</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="suggestionType" id="inlineRadio3" value="Complaint">
                                                                        <label class="form-check-label" for="inlineRadio3">Complaint</label>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 responsive-column">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <label class="label-text" for="subject">Subject<span class="text-danger"> *</span></label>
                                                            <div class="form-group">
                                                                <span class="la la-book form-icon"></span>
                                                                <input class="form-control @error('subject') is-invalid @enderror " value="{{ old('subject') }}" type="text" id="subject" name="subject" placeholder="What is your feedback about?" required>

                                                                @error('subject')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 responsive-column">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <label class="label-text" for="name">Your Name<span class="text-danger"> *</span></label>
                                                            <div class="form-group">
                                                                <span class="la la-user form-icon"></span>
                                                                <input class="form-control @error('name') is-invalid @enderror " value="{{ old('name') }}" type="text" id="name" name="name" placeholder="Your name" required>

                                                                @error('name')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                                @enderror

                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 responsive-column">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <label class="label-text" for="email">Your Email<span class="text-danger"> *</span></label>
                                                            <div class="form-group">
                                                                <span class="la la-envelope-o form-icon"></span>
                                                                <input class="form-control @error('email') is-invalid @enderror " value="{{ old('email') }}" type="email" name="email" id="email" placeholder="Email address" required>

                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 responsive-column">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <label class="label-text" for="contact">Active
                                                                Contact Number<span class="text-danger">
                                                                    *</span></label>
                                                            <div class="form-group">
                                                                <span class="la la-phone form-icon"></span>
                                                                <input class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact') }}" type="text" name="contact" id="contact" placeholder="Contact number" required>

                                                                @error('contact')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 responsive-column">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <label class="label-text" for="country">Country<span class="text-danger"> *</span></label>
                                                            <div class="form-group">
                                                                <div class="select-contain w-auto">
                                                                    <select class="select-contain-select" id="country" name="country">
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
                                                                        <option value="Bangladesh" selected>Bangladesh
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
                                                                        <option value="Congo, The Democratic Republic of The">
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
                                                                        <option value="Heard Island and Mcdonald Islands">
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
                                                                        <option value="Korea, Democratic People's Republic of">
                                                                            Korea, Democratic People's Republic of
                                                                        </option>
                                                                        <option value="Korea, Republic of">Korea,
                                                                            Republic of
                                                                        </option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan
                                                                        </option>
                                                                        <option value="Lao People's Democratic Republic">
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
                                                                        <option value="Macedonia, The Former Yugoslav Republic of">
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
                                                                        <option value="Saint Vincent and The Grenadines">
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
                                                                        <option value="South Georgia and The South Sandwich Islands">
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
                                                                        <option value="United States Minor Outlying Islands">
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
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->

                                                    <div class="col-lg-12">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <label class="label-text" for="description">Message<span class="text-danger">
                                                                    *</span></label>
                                                            <div class="form-group">
                                                                <span class="la la-pencil form-icon"></span>
                                                                <textarea class="message-control form-control @error('description') is-invalid @enderror " name="description" id="description" placeholder="Write message" required>{{ old('description') }}</textarea>
                                                                @error('description')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->

                                                    <div class="col-lg-12 responsive-column">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <label class="label-text" for="contact-number"><b>(Optional Section)</b> Enter
                                                                details of your booking so that we can be more specific
                                                                about your feedback.
                                                            </label>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->

                                                    <div class="col-lg-6 responsive-column">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <label class="label-text" for="flight">PNR (6 Letter) / Ticket Number (13 Digit)
                                                            </label><span class="badge badge-primary">Important. It will help us to find you accurately.</span>
                                                            <div class="form-group">
                                                                <span class="la la-plane form-icon"></span>
                                                                <input class="form-control" type="text" name="flight" id="flight" placeholder="PNR / Ticker number">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->


                                                    <div class="col-lg-6 responsive-column">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <label class="label-text" for="journey_date">Journey
                                                                Date
                                                            </label>
                                                            <div class="form-group">
                                                                <span class="la la-calendar form-icon"></span>
                                                                {{-- <input class="date-picker-single form-control"
                                                                        type="date" id="journey_date" name="journey_date"
                                                                        readonly> --}}

                                                                <input id="departingDate" class=" form-control" type="text" name="daterange_single" readonly>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->


                                                    <div class="col-lg-12 responsive-column">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <label class="label-text" for="contact-number">Ticket:
                                                                Image/Pdf <span class="badge badge-primary">*image size not greater than 500KB.</span>
                                                            </label>
                                                            @error('input_file')
                                                            <span role="alert">
                                                                <strong style="color: red; font-size: 16px">
                                                                    {{ $message }}
                                                                </strong>
                                                            </span>
                                                            @enderror
                                                            <div class="form-group">
                                                                <div class="file-upload-wrap file-upload-wrap-2 resumre-wrap">
                                                                    <input type="file" name="input_file" id="input_file" class="" accept="image/*,pdf/*">
                                                                    {{-- <span class="file-upload-text"><i class="la la-upload mr-2"></i>Attach File</span> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->



                                                    <div class="col-lg-6 responsive-column">
                                                        <div class="input-box messenger-box-input-wrap">
                                                            <div class="form-group">
                                                                <label class="label-text" for="g-recaptcha-response">Captcha<span class="text-danger"> *</span></label>
                                                                {!! htmlFormSnippet() !!}

                                                                @error('g-recaptcha-response')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                                @enderror

                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->


                                                    <div class="col-lg-12 ">
                                                        <div class="btn-box messenger-box-input-wrap">
                                                            <button name="submit" type="submit" class="theme-btn send-message-btn" id="send-message-btn">Send Message
                                                            </button>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                </form>
                                            </div><!-- end contact-form-action -->
                                        </div><!-- end form-content -->
                                    </div><!-- end form-box -->
                                </div><!-- end col-lg-8 -->
                            </div><!-- end row -->

                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="domestic" role="tabpanel" aria-labelledby="domestic-tab">
                            <div class="form-box">
                                <div class="form-content card">
                                 <div class="row">
                                    <div class="col-12">
                                        <div class="card-header alert-success text-center">
                                            <h5><strong>Dhaka Office</strong></h5>
                                        </div>
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-12 col-md-6">
                                            <p>
                                                <b>Head Office</b>
                                            </p>
                                            <p><i class="la la-map-marked mr-1 ml-2"></i>Balaka, Kurmitola, Dhaka-1229, Bangladesh.</p>
                                            <p><i class="la la-phone mr-1 ml-2"></i>+88-02-8901600</p>
                                            <p>
                                                <b>Call Center: </b><a href="tel:+8801990997997"><i class="la la-phone mr-1"></i>+8801990997997</a>
                                            </p>
                                             <p>
                                                <b>Online Booking: </b><a href="mailto:ibebiman@bdbiman.com"><i class="la la-envelope mr-1"></i>ibebiman@bdbiman.com</a>
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-6">

                                            <p>
                                                <b>Airport Office</b>
                                            </p>
                                            <p><i class="la la-map-marked mr-1 ml-2"></i>Hazrat Shahjalal International Airport,Kurmitola, Dhaka-1229. </p>
                                            <p><i class="la la-phone mr-1 ml-2"></i>+88-02-8901500</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">

                                        <div class="col-12 col-md-6">

                                            <p>
                                                <b>District Sales Office</b>
                                            </p>
                                            <p><i class="la la-map-marked mr-1 ml-2"></i>Biman Bhaban, Motijheel, Dhaka, Bangladesh. </p>
                                            <p><i class="la la-phone mr-1 ml-2"></i>+88-02-223389517</p>
                                            <p>
                                                <i class="la la-envelope mr-1 ml-2"></i>amcdso@bdbiman.com
                                            </p>
                                            <p>
                                                <i class="la la-clock mr-1 ml-2"></i> 10 AM To 06 PM Everyday
                                            </p>

                                        </div>
                                        <div class="col-12 col-md-6">
                                            <p>
                                                <b>
                                                    Dhanmondi Office</b>
                                            </p>
                                            <p><i class="la la-map-marked mr-1 ml-2"></i>Plot No. 75/C, 75/D
                                                Road No. 5A,
                                                Satmasjid Road,
                                                Dhanmondi Residential Area, Dhaka - 1209. </p>
                                            <p><i class="la la-phone mr-1 ml-2"></i>+88-01777715620 to 621</p>
                                            <p>
                                                <i class="la la-envelope mr-1 ml-2"></i>dhanmondidso@bdbiman.com
                                            </p>
                                            <p>
                                                <i class="la la-clock mr-1 ml-2"></i> 10 AM To 06 PM ( Friday & Saturday Closed)
                                            </p>

                                        </div>

                                    </div>


                                    <hr>

                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <p>
                                                <b>
                                                    Farmgate Office</b>
                                            </p>
                                            <p><i class="la la-map-marked mr-1 ml-2"></i>81 Kazi Nazrul Islam Avenue
                                                Farmgate, Tejgaon, Dhaka-1215. </p>
                                            <p><i class="la la-phone mr-1 ml-2"></i>+88-01777715625 to 626 </p>
                                            <p>
                                                <i class="la la-envelope mr-1 ml-2"></i>farmgatedso@bdbiman.com
                                            </p>
                                            <p>
                                                <i class="la la-clock mr-1 ml-2"></i>10 AM To 06 PM ( Friday & Saturday Closed)
                                            </p>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <p>
                                                <b> Biman Head Office Balaka Gate Sales Outlet</b>
                                            </p>
                                            <p><i class="la la-map-marked mr-1 ml-2"></i>Biman Bangladesh Airlines Ltd.
                                                Balaka Bhaban, Kurmitola, Dhaka-1229. </p>
                                            <p><i class="la la-phone mr-1 ml-2"></i>+88-01777715630 to 631 </p>
                                            <p>
                                                <i class="la la-envelope mr-1 ml-2"></i>balakadso@bdbiman.com
                                            </p>
                                            <p> <i class="la la-clock mr-1 ml-2"></i>08:30 AM To 08:30 PM Every Day
                                            </p>

                                            <p>&nbsp;</p>

                                        </div>
                                    </div>
                                    </div>
                                    

                                    </div>
                                </div>
                                </div>

                            </div>
                            <div class="form-box">
                              <div class="form-content card">
                                  <div class="card-header alert-warning text-center">
                                        <h5><b>Other Domestic Offices</b></h5>
                                    </div>
                                <div class="row">
                                <div class="col-12 pl-0 pr-0 card-body">
                                    <div class="table table-responsive mr-0 ml-0">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center alert-success">
                                                    <th style="width:30%" scope="col">Office location</th>
                                                    <th style="width: 70%" scope="col">Contact number</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="">
                                                    <th scope="row text-wrap">Sylhet<br>Airport Road, Majumdari,<br> Sylhet-3100</th>
                                                    <td>
                                                        <ul>
                                                            <li>Stations Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-017-777-15711</li>
                                                            <li>Stations Manager (Phone): <i class="la la-phone mr-1 ml-2"></i>+88-02-996631815</li>

                                                            <li><i class="la la-phone mr-1 ml-2"></i>+88-0821-717026 to 028</li>
                                                            <li><i class="la la-phone mr-1 ml-2"></i>+88-0821-717411 to 421</li>
                                                        </ul>
                                                    </td>

                                                </tr>

                                                <tr class="">
                                                    <th scope="row text-wrap">Saidpur<br>Bangabandhu Sarak (Rangpur Road)<br>
                                                        Bangalipur,Saidpur,Nilphamari.</th>
                                                    <td>
                                                        <ul>
                                                            <li>District Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-01777775538</li>
                                                            <li>District Manager (Phone): <i class="la la-phone mr-1 ml-2"></i>+88-02589956953</li>
                                                            <li>Stations Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-01777775539</li>
                                                            <li>District Sales Office (Phone): <i class="la la-phone mr-1 ml-2"></i>+88-02589956954</li>
                                                        </ul>
                                                    </td>

                                                </tr>

                                                <tr class="">
                                                    <th scope="row ">Rajshahi<br>Parjatan Motel,<br>
                                                        Shah Abdul Majid Road,<br>
                                                        Sreerampur, Rajshahi – 6000</th>
                                                    <td>
                                                        <ul>
                                                            <li>District Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-01777775536</li>
                                                            <li>District Manager (Phone): <i class="la la-phone mr-1 ml-2"></i>+88-02588804787</li>
                                                            <li>Stations Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-01777775537</li>
                                                            <li>District Sales Office (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-01777715736</li>
                                                            <li>District Sales Office (Phone): <i class="la la-phone mr-1 ml-2"></i>+88-02588854838</li>
                                                        </ul>

                                                    </td>

                                                </tr>

                                                <tr class="">
                                                    <th scope="row ">Jashore<br>Green Vila,<br> Puraton Kosba, Jashore</th>
                                                    <td>
                                                        <ul>
                                                            <li>District Manager (Mobile):<i class="la la-phone mr-1 ml-2"></i>+88-01777775528</li>
                                                            <li>District Manager (Phone):<i class="la la-phone mr-1 ml-2"></i>02477760773</li>
                                                            <li>Stations Manager (Mobile):<i class="la la-phone mr-1 ml-2"></i>+88-01777775529</li>
                                                            <li>Stations Manager (Phone):<i class="la la-phone mr-1 ml-2"></i>0277762823</li>
                                                            <li>District Sales Office (Mobile):<i class="la la-phone mr-1 ml-2"></i>+88-01777715728</li>
                                                            <li>District Sales Office (Phone):<i class="la la-phone mr-1 ml-2"></i>+02477760774</li>
                                                        </ul>
                                                    </td>

                                                </tr>


                                                <tr class="">
                                                    <th scope="row ">Cox's Bazar<br>Motel Upal, <br>Parjatan Holiday Complex,
                                                        Cox's Bazar</th>
                                                    <td>
                                                        <ul>
                                                            <li>District Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-01777775526</li>
                                                            <li>District Manager (Phone): <i class="la la-phone mr-1 ml-2"></i>+88-0341-63461</li>
                                                            <li>Stations Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-01777775527</li>
                                                            <li>District Sales Office (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-01777715726</li>
                                                            <li>District Sales Office (Phone): <i class="la la-phone mr-1 ml-2"></i>+88-0341-63461</li>
                                                        </ul>
                                                    </td>

                                                </tr>


                                                <tr class="">
                                                    <th scope="row " rowspan="2">Chattogram<br>City Office:
                                                        Shulashahar, Chattogram.<br>Airport Office:
                                                        Room No-307<br>
                                                        SAIA,Chattogram.</th>
                                                    <td>
                                                        <ul>
                                                            <li>Officer-in-Charge Counter: <i class="la la-phone mr-1 ml-2"></i>+88-01777715723</li>
                                                            <li>District Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-01777715700</li>
                                                            <li>District Manager (Phone): <i class="la la-phone mr-1 ml-2"></i>+88-02334450866</li>
                                                            <li>Officer In Charge Sales: <i class="la la-phone mr-1 ml-2"></i>+88-01777715703 (City Office)</li>
                                                            <li>In Charge Domestic Sales: <i class="la la-phone mr-1 ml-2"></i>+88-01777715704 (Airport)</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <ul>
                                                            <li>Stations Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-017-77715701</li>
                                                            <li>Stations Manager (Landline): <i class="la la-phone mr-1 ml-2"></i>+88-02333300739</li>
                                                            <li>Duty Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-017-77715705</li>
                                                            <li>Duty Manager (Landline): <i class="la la-phone mr-1 ml-2"></i>+88-02333300739</li>
                                                            <li>Lost & Found Section: <i class="la la-phone mr-1 ml-2"></i>+88-017-77715702</li>
                                                        </ul>

                                                    </td>

                                                </tr>


                                                <tr class="">
                                                    <th scope="row text-wrap">Barishal<br>B.S Tower (01st Floor)<br>
                                                        595, Shaheed Nazrul Islam Sarak (Police Line Road)<br>
                                                        Barishal - 8200</th>
                                                    <td>
                                                        <ul>
                                                            <li>Sales Counter (Phone): <i class="la la-phone mr-1 ml-2"></i>+88-02-478865019</li>
                                                            
                                                            <li>District Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-017-777-75530</li>
                                                            <li>District Manager (E-mail): <i class="la la-envelope mr-1 ml-2"></i>bzluu@bdbiman.com</li>
    
                                                            <li>Stations Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+88-017-777-75531</li>
                                                            <li>Stations Manager (Phone): <i class="la la-phone mr-1 ml-2"></i>+88-02-478869755</li>

                                                        </ul>
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- end form-box -->
                                </div>
                                <!-- end col-lg-12 -->
                            </div>
                              </div>
                            </div>
                            <!-- end row -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="global-office" role="tabpanel" aria-labelledby="global-office-tab">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="accordion accordion-item padding-top-30px" id="globalOffice">
                                        
                                        <!-- CARD 21 -->

                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading22">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse22" aria-expanded="false" aria-controls="globalOfficeCollapse22">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/jp.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">TOKYO, JAPAN <span class="badge badge-success">NEW ROUTE</span></h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse22" class="collapse border-top" aria-labelledby="globalOfficeHeading22" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text">
                                                                <div class="whiteBlack normal-text">
                                                                    <p><b>Office Address:</b></p>
                                                                    <p>Nisso 24 Building, 9th Floor, 3-2-2, Akasaka, Minato-ku, Tokyo, 107-0052.</p>
                                                                    <ul>
                                                                        <li>Phone (Reservation): <i class="la la-phone mr-1 ml-2"></i>+81-3-6426-5646</li>
                                                                        <li>Fax: <i class="la la-fax mr-1 ml-2"></i>+81-3-6426-5645</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        
                                        <!-- CARD 21 -->

                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading21">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse21" aria-expanded="false" aria-controls="globalOfficeCollapse21">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/cn.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">GUANGZHOU, CHINA <span class="badge badge-success">NEW ROUTE</span></h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse21" class="collapse border-top" aria-labelledby="globalOfficeHeading21" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row padding-top-10px">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">City Office</div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-6 col-md-6 criteria-head">Country Manager
                                                                            </span>
                                                                            <span class="col-sm-6 col-md-6 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+8613501534854</li>
                                                                                    <li><i class="la la-fax mr-1 ml-2"></i>020-38377307</li>
                                                                                    <li>WeChat : Shahnewaz34246</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>canuu@biman.gov.bd</li>
                                                                        </li>
                                                                    </ul>
                                                                    </span>
                                                                    </li>
                                                                    <li>Address: Room 504b, 5th Floor, Guangdong International Building, 339 East of Huanshi Road, Guangzhou 510098, China</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">Airport Office</div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-6 col-md-6 criteria-head">Station Manager
                                                                            </span>
                                                                            <span class="col-sm-6 col-md-6 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+8613502412171 </li>
                                                                                    <li><i class="la la-fax mr-1 ml-2"></i>020-38377307</li>
                                                                                    <li>WeChat : shameembg </li>
                                                                                    <li>WhatsApp : +8801713039280  </li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>cankk@biman.gov.bd</li>
                                                                        </li>
                                                                    </ul>
                                                                    </span>
                                                                    </li>
                                                                    <li>Address: No.E201A, Pullman Guangzhou Baiyun Airport, China    </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 2 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading8">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse8" aria-expanded="false" aria-controls="globalOfficeCollapse8">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/hk.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">HONG KONG</h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse8" class="collapse border-top" aria-labelledby="globalOfficeHeading8" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row padding-top-10px">
                                                        <div class="col-sm-12 col-md-6">
                                                            <ul>
                                                                <li>Room no. 214 & 215, F-2, F East</li>
                                                                <li>Houston Centre, 63 Mody Road Tsim</li>
                                                                <li>Shatsuikowloon</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <ul>
                                                                <li><i class="la la-phone mr-1 ml-2"></i>+85-227-248464</li>
                                                                <li><i class="la la-fax mr-1 ml-2"></i>+85-227-246284</li>
                                                                <li><i class="la la-mobile-alt mr-1 ml-2"></i>+85-294-702724</li>
                                                                <li><i class="la la-envelope mr-1 ml-2"></i>hkguu@bdbiman.com</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 3 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeadingFour">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapseFour" aria-expanded="false" aria-controls="globalOfficeCollapseFour">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/in.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">DELHI, INDIA
                                                        </h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>


                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapseFour" class="collapse border-top" aria-labelledby="globalOfficeHeadingFour" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row padding-top-10px">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">City Office</div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li>GSA-MINAR TRAVELS INDIA PVT LTD</li>
                                                                        <li>M-34, Outer Circle, Ground Floor, Connaught Place</li>
                                                                        <li>New Delhi-110001</li>
                                                                        <li>Regional Manager:<i class="la la-phone mr-1 ml-2"></i>+91-966-7999374</li>
                                                                        <li>Reservation/Sales Counter:<i class="la la-phone mr-1 ml-2"></i>+91-11-43416450</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">Airport Office</div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-7 criteria-head">Station Manager
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-5 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+91-966-7999375</li>
                                                                                    <li><i class="la la-fax mr-1 ml-2"></i>+91-112-5652943</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>delkk@bdbiman.com</li>
                                                                        </li>
                                                                    </ul>
                                                                    </span>
                                                                    </li>
                                                                    <li>Address: Room no-3.107, Level - 3, Terminal 3, IGI Airport, New Delhi, India</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 4 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading11">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse11" aria-expanded="false" aria-controls="globalOfficeCollapse11">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/in.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">KOLKATA, INDIA <span class="badge badge-success">Updated</span></h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse11" class="collapse border-top" aria-labelledby="globalOfficeHeading11" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row padding-top-10px">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">
                                                                    City Office
                                                                </div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-8 col-md-8 criteria-head">MINAR TRAVELS INDIA PVT LTD (GSA)<br>
                                                                                99A, Park Street<br>
                                                                                Siddha Park, 6th Floor<br>
                                                                                Kolkata - 700016, W.B. India
                                                                            </span>
                                                                            <span class="col-sm-4 col-md-4 criteria-body">
                                                                            </span>
                                                                        </li>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-7 criteria-head">Regional Manager (E.I.)
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-5 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+91-033-22266675</li>
                                                                                    <li><i class="la la-fax mr-1 ml-2"></i>+91-9831098639</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>ccuuu@bdbiman.com</li>
                                                                                </ul>
                                                                            </span>
                                                                        </li>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-7 criteria-head">SALES 
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-5 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+91 8961819102</li>
                                                                                </ul>
                                                                            </span>
                                                                        </li>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-7 criteria-head">RESERVATION/TICKETING 
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-5 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+91 9836613656</li>
                                                                                </ul>
                                                                            </span>
                                                                        </li>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-7 criteria-head">SALES COUNTER LANDLINE 
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-5 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+91 033-22266672/73 </li>
                                                                                </ul>
                                                                            </span>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">
                                                                    Airport Office
                                                                </div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-7 criteria-head">N S C B International Airport,<br>Kolkata - 700052
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-5 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+91-033-25118662</li>
                                                                                </ul>
                                                                            </span>
                                                                        </li>
                                                                        <!--<li class="row criteria-list">-->
                                                                        <!--    <span class="col-sm-7 col-md-7 criteria-head">Residence-->
                                                                        <!--    </span>-->
                                                                        <!--    <span class="col-sm-5 col-md-5 criteria-body">-->
                                                                        <!--        <ul>-->
                                                                        <!--            <li><i class="la la-phone mr-1 ml-2"></i>+91-332-5119826</li>-->
                                                                        <!--            <li><i class="la la-envelope mr-1 ml-2"></i>ccukk@bdbiman.com</li>-->
                                                                        <!--        </ul>-->
                                                                        <!--    </span>-->
                                                                        <!--</li>-->
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-7 criteria-head">Station Manager 
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-5 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+91 9831098638</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>ccukk@bdbiman.com</li>
                                                                                </ul>
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 5 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading13">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse13" aria-expanded="false" aria-controls="globalOfficeCollapse13">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/kw.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">KUWAIT </h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse13" class="collapse border-top" aria-labelledby="globalOfficeHeading13" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row padding-top-10px">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">
                                                                    City Office
                                                                </div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-5 col-md-5 criteria-head">Al-Homaizi Building<br>
                                                                            Al-Soor  Street<br>
                                                                            Safat-13099<br>
                                                                            Kuwait
                                                                            </span>
                                                                            <span class="col-sm-7 col-md-7 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+965-22439764</li>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+965-22441040/42</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>zaminnaqvi@alathlatravels.com</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>john@alathlatravels.com</li>
                                                                                </ul>
                                                                            </span>
                                                                        </li>
                                                                        <br>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-7 criteria-head">Country Manager
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-5 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+965-22439764</li>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+965-22441040/42</li>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+965-99813462</li>
                                                                                    <i class="lab la-whatsapp mr-1 ml-2">+880-1727245145</i>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>kwiuu@bdbiman.com</li>
                                                                                </ul>
                                                                            </span>
                                                                        </li>
                                                                        <br>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-5 col-md-5 criteria-head">Reservation / <br>
                                                                            Sales Counter
                                                                            </span>
                                                                            <span class="col-sm-7 col-md-7 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+965-22452977/8</li>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i><i class="lab la-whatsapp"></i>+965-97645909</li>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i><i class="lab la-whatsapp"></i>+965-97154608</li>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i><i class="lab la-whatsapp"></i>+965-99117332</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>zaminnaqvi@alathlatravels.com</li>
                                                                                </ul>
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">
                                                                    Airport Office
                                                                </div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-7 criteria-head">Room no-FF 58, Airport Mall Area<br>Kuwait International Airport, Kuwait
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-5 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i><i class="lab la-whatsapp"></i>+965-99367919</li>                                                                                    
                                                                                </ul>
                                                                            </span>
                                                                        </li>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-7 criteria-head">Station Manager
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-5 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+965-22441040/42</li>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i><i class="lab la-whatsapp"></i>+965-99367919</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>kwikk@bdbiman.com</li>
                                                                                </ul>
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 6 -->

                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading12">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse12" aria-expanded="false" aria-controls="globalOfficeCollapse12">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/my.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">KUALALUMPUR, MALAYSIA </h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse12" class="collapse border-top" aria-labelledby="globalOfficeHeading12" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p>13th Floor Menera Atlan, 161B Jalan Ampang
                                                                        t</p>
                                                                    <p>50450 Kualalumpur, Malaysia</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+60-321-646131</p>
                                                                    <p><i class="la la-fax mr-1 ml-2"></i>+60-321-646142</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+60-122-736676</p>
                                                                    <p>Sales Counter:</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+60-321-646270, +60-321-646271</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>kuluu@bdbiman.com</p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p class="text-black ">

                                                                        Airport Office</p>
                                                                    <p>Lot S10 & S31</p>

                                                                    <p>Main Terminal Building</p>
                                                                    <p>KL International Airport Sepang,Selangor,
                                                                        Malaysia</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+60-387-764770</p>
                                                                    <p><i class="la la-fax mr-1 ml-2"></i>+60-387-873881 </p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+60-193-806643</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>kulkk@bdbiman.com</p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 7 -->

                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading10">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse10" aria-expanded="false" aria-controls="globalOfficeCollapse10">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/np.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">KATHMANDU, NEPAL</h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse10" class="collapse border-top" aria-labelledby="globalOfficeHeading10" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <ul>
                                                                        <li>
                                                                            <p><i class="la la-phone mr-1 ml-2"></i> +97-701-4534869 (Country Manager)
                                                                            <p>
                                                                        </li>
                                                                        <li>
                                                                            <p><i class="la la-phone mr-1 ml-2"></i> +97-701-4534740 (Sales Counter)</p>
                                                                        </li>
                                                                        <li>
                                                                            <p><i class="la la-phone mr-1 ml-2"></i> +97-701-4534982 (Accounts)</p>
                                                                        </li>
                                                                        <li>
                                                                            <p><i class="la la-fax mr-1 ml-2"></i> +97-701-4434869</p>
                                                                        </li>
                                                                        <li>
                                                                            <p><i class="la la-phone mr-1 ml-2"></i> +97-798-51037510</p>
                                                                        </li>
                                                                        <li>
                                                                            <p><i class="la la-envelope mr-1 ml-2"></i> ktmuu@bdbiman.com</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>House N6- 314, Nagpokhari, Nepal</p>
                                                                        </li>
                                                                    </ul>
                                                                    <br>
                                                                    <hr>
                                                                    <br>
                                                                    <ul>
                                                                        <li>Stations Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+977-9851026159</li>
                                                                        <li>Stations Manager (Phone): <i class="la la-phone mr-1 ml-2"></i>+977-01-4113174</li>
                                                                        <li><i class="la la-envelope mr-1 ml-2"></i>ktmkk@bdbiman.com</li>
                                                                        <li>
                                                                            <p>
                                                                                Airport Address: Room no-201, Operation Building,<br>
                                                                                Tribhuwan International Airport (TIA), Kathmandu, Nepal.
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 8 -->

                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading17">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse17" aria-expanded="false" aria-controls="globalOfficeCollapse17">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/om.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">MUSCAT, OMAN</h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse17" class="collapse border-top" aria-labelledby="globalOfficeHeading17" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p class="text-black ">GSA - Bahwan Travel
                                                                        Agencies LLC</p>

                                                                    <p>Shop No- 623, Plot No- 734, Way no-
                                                                        3719,Makha Business Center Ruwi High Street,
                                                                        Ruwi </p>

                                                                    <p>Post Box-169, Muscat PC-100, Sultanate of
                                                                        Oman</p>
                                                                    <p>For Reservations & Ticketing:</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i> (+968)
                                                                        24830071 / 24830072 / 24830073 </p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>bimanho@bahwantravels.com </p>
                                                                    <p>Country Manager Biman, Muscat </p>
                                                                    <p><i class="la la-mobile-alt mr-1 ml-2"></i>+96-899-044138 (With What's App) </p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>mctuu@bdbiman.com </p>

                                                                    <p>Station Manager Biman, Muscat </p>
                                                                    <p><i class="la la-mobile-alt mr-1 ml-2"></i>+96-892-009125 (With What's App) </p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>mctkk@bdbiman.com </p>

                                                                    <p>Finance Manager Biman, Muscat </p>
                                                                    <p><i class="la la-mobile-alt mr-1 ml-2"></i>+96-898-007530 (With What's App) </p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>mctab@bdbiman.com </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 9 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeadingFive">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapseFive" aria-expanded="false" aria-controls="globalOfficeCollapseFive">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/qa.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">DOHA, QATAR <span class="badge badge-success">Updated</span>
                                                        </h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>


                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapseFive" class="collapse border-top" aria-labelledby="globalOfficeHeadingFive" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row padding-top-10px">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">City Office</div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li>Regency Travel & Tours(GSA)</li>
                                                                        <li>Al Emadi Building C#20 (Beside Lulu Hyper, Matar Kadim), Street#250, Zone#45, D-Ring Road, Doha, Qatar. <a referrerpolicy="no-referrer" target="_black" href="https://www.google.com/maps/place/25%C2%B015'18.7%22N+51%C2%B032'48.7%22E/@25.2551979,51.544276,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.2551979!4d51.5468509?entry=ttu" style="text-decoration: underline; font-style: italic; font-weight: bold">SEE ON MAPS</a>
                                                                        
                                                                        </li>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-3 criteria-head"><b>Contact:</b>
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-9 criteria-body">
                                                                                <ul>
                                                                                    <li>Mobile: <i class="la la-tty mr-1 ml-2"></i>51178758, 55112218, 77557363</li>
                                                                                     <li>Phone: <i class="la la-tty mr-1 ml-2"></i>44153351</li>
                                                                                </ul>
                                                                        </li>
                                                                        <hr>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-4 criteria-head">Country Manager
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-8 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-tty mr-1 ml-2"></i>+974-44153451</li>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+974-51166128</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>dohuu@bdbiman.com</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>dohuu@biman.gov.bd</li>
                                                                                </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">Airport Office</div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-7 col-md-4 criteria-head">Station Manager
                                                                            </span>
                                                                            <span class="col-sm-5 col-md-8 criteria-body">
                                                                                <ul>
                                                                                    <li><i class="la la-tty mr-1 ml-2"></i>+974-40175924</li>
                                                                                    <li><i class="la la-phone mr-1 ml-2"></i>+974-51164506</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>dohkk@bdbiman.com</li>
                                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>dohkk@biman.gov.bd</li>
                                                                        </li>
                                                                    </ul>
                                                                    </span>
                                                                    </li>
                                                                    <li>Hamad International Airport</li>
                                                                    <li>Room No: T3-21-53, Level: 03</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                        <!-- end card -->


                                        <!-- CARD 10 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeadingThree">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapseThree" aria-expanded="false" aria-controls="globalOfficeCollapseThree">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/sa.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">DAMMAM, SAUDI ARABIA <span class="badge badge-success">Updated</span></h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapseThree" class="collapse border-top" aria-labelledby="globalOfficeHeadingThree" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p>Nardeen Building,</p>
                                                                    <p>5124 Prince Faisal Bin Fahad Road,</p>
                                                                    <p>Al Khobar 34433, Dammam, K.S.A</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+966138130884</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+966554261469</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i><a>dmmuu@bdbiman.com</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->


                                        <!-- CARD 11 -->

                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading9">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse9" aria-expanded="false" aria-controls="globalOfficeCollapse9">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/sa.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">JEDDAH, SAUDI ARABIA</h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse9" class="collapse border-top" aria-labelledby="globalOfficeHeading9" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p><b>Jeddah Office Address:</b></p>
                                                                    <p>
                                                                        Al Nakheel Center, Al-Madinah Al-Munawarah Rd, Al-Hamra'a, Jeddah 21414,
                    
                                                                        P.O Box-13541, Jeddah, Saudi Arabia. <a referrerpolicy="no-referrer" target="_blank" href="https://www.google.com/maps/place/Biman+Bangladesh+Airlines/@21.5302209,39.178461,21z/data=!4m19!1m12!4m11!1m6!1m2!1s0x15c3cfdccd208715:0x4b5ef7be3d7b0918!2zQmltYW4gQmFuZ2xhZGVzaCBBaXJsaW5lcyDYqNmK2YXYp9mGINin2YTYrti32YjYtyDYp9mE2KzZiNmK2Kkg2KfZhNio2YbYrNmE2KfYr9mK2LTZitip!2m2!1d39.1785897!2d21.5302319!1m3!2m2!1d39.178716!2d21.5298524!3m5!1s0x15c3cfdccd208715:0x4b5ef7be3d7b0918!8m2!3d21.5302347!4d39.1786361!16s%2Fg%2F11hblxn9q4?entry=ttu " style="text-decoration: underline; font-style: italic; font-weight: bold">SEE ON MAP</a>
                                                                    </p>
                                                                    <p>Reservation Counter:</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+96-626-652733,6653023</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+96-650-5618213 </p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>jeduu@bdbiman.com</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p class="text-black">King
                                                                        Abdul Aziz lnt'I Airport</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+96-626-853194</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+96-650-1491014</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>jedkk@bdbiman.com</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 12 -->

                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading15">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse15" aria-expanded="false" aria-controls="globalOfficeCollapse15">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/sa.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">MADINAH, SAUDI ARABIA </h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse15" class="collapse border-top" aria-labelledby="globalOfficeHeading15" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text">
                                                                <div class="whiteBlack normal-text">
                                                                    <br>
                                                                    
                                                                    <ul>
                                                                        
                                                                        <li>
                                                                            <p>Country Manager <i class="la la-phone mr-1 ml-2"></i>+966 56532 8634</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Sales Executive: +96-653-8218667/+96-656-5784930 </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Email: <i class="la la-envelope mr-1 ml-2"></i>meduu@bdbiman.com</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>
                                                                                <b>Madinah Office : </b>
                                                                            </p>
                                                                            <p>
                                                                                Office NBR- 16
                            
                                                                                Soultana Commercial Center
                            
                                                                                Abo Bakr Al Siddiq, Al Rayah, Al Madinah Al Munawwarah 42312,
                            
                                                                                PO BOX NO-13541, Madinah,Saudi Arabia. <a referrerpolicy="no-referrer" target="_blank" href="https://www.google.com/maps/place/24%C2%B029'04.9%22N+39%C2%B035'42.8%22E/@24.4847062,39.5930244,17z/data=!3m1!4b1!4m4!3m3!8m2!3d24.4847062!4d39.5952131?hl=en&entry=ttu" style="text-decoration: underline; font-style: italic; font-weight: bold">SEE ON MAP</a>
                                                                            </p>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                    <hr><br>
                                                                    <ul>
                                                                        <li>Stations Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+966 054 762 1259</li>
                                                                        <li>Stations Manager (Phone): <i class="la la-phone mr-1 ml-2"></i>+966 14 813 9946</li>
                                                                        
                                                                        <li>Email: <i class="la la-envelope mr-1 ml-2"></i>medkk@bdbiman.com</li>
                                                                        <li>
                                                                            <p>
                                                                                <b>Airport Office: </b>
                                                                            </p>
                                                                            <p>
                                                                                Room # 2505<br>
                                                                                Prince Mohammad bin Abdul Aziz international Airport ,<br>
                                                                                Medinah , K. S. A
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading18">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse18" aria-expanded="false" aria-controls="globalOfficeCollapse18">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/sa.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">RIYADH, SAUDI ARABIA </h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse18" class="collapse border-top" aria-labelledby="globalOfficeHeading18" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">

                                                                    <p>City Office
                                                                    </p>

                                                                    <p> Office Direct No:</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+966-11-5084065 ,+966-11-2910491</p>
                                                                    
                                                                    <p> Regional Manager - City Office Riyadh</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+966-59-266-3559</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>ruhuu@bdbiman.com</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p class="text-black ">
                                                                        Airport Office </p>
                                                                    <p> King Khaled lnt'I Airport Riyadh,Kingdom Of
                                                                        Saudi Arabia, Room No-1565</p>
                                                                    <p> Station Manager - Airport Riyadh</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+966-54-129-6266</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>ruhkk@bdbiman.com</p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->


                                        <!-- CARD 13 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading19">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse19" aria-expanded="false" aria-controls="globalOfficeCollapse19">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/sg.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">SINGAPORE </h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse19" class="collapse border-top" aria-labelledby="globalOfficeHeading19" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p class="text-black ">City Office </p>

                                                                    <p>320 Serangoon Road, Centrium Square,
                                                                        #12-11/12, Singapore 218108 </p>

                                                                    <p>Country Manager </p>
                                                                    <p>Office:<i class="la la-phone mr-1 ml-2"></i>+65-643-85220</p>
                                                                    <p><i class="la la-fax mr-1 ml-2"></i>+65-643-87998</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+65-911-19069</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>sinuu@bdbiman.com</p>

                                                                    <p>Secretary to Country Manager </p>
                                                                    <p>Office:<i class="la la-phone mr-1 ml-2"></i>+65-643-86640 </p>
                                                                    <p>Manager Finance </p>
                                                                    <p>Office:<i class="la la-phone mr-1 ml-2"></i>+65-643-85150</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>sinab@bdbiman.com</p>

                                                                    <p>Reservation/Ticketing</p>
                                                                    <p>Office: </p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+65-622-17155</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+65-643-84110</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+65-643-80570 </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p class="text-black ">
                                                                        Airport Office </p>
                                                                    <p> Passenger Terminal Building, 041-49,
                                                                        Singapore Changi Airport Terminal -1,P.O.Box
                                                                        No-23, Singapore 819642 </p>

                                                                    <p>Station Manager</p>
                                                                    <p>Office:<i class="la la-phone mr-1 ml-2"></i>+65-542-9380</p>
                                                                    <p><i class="la la-fax mr-1 ml-2"></i>+65-654-26787 </p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+65-963-23207</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>sinkk@bdbiman.com </p>

                                                                    <p>Traffic Assistant </p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+65-654-29380</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 14 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeadingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapseTwo" aria-expanded="false" aria-controls="globalOfficeCollapseTwo">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/th.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">BANGKOK, THAILAND</h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapseTwo" class="collapse  border-top" aria-labelledby="globalOfficeHeadingTwo" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p class="text-black ">Bangkok
                                                                        (BKK), (GMT+ 7)</p>
                                                                    <p>163, Ocean Insurance Building</p>
                                                                    <p>01/17 Floor Unit, 17A, Surawoogse Road</p>
                                                                    <p>Suriyawongse, Bangkok-10500</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+66-022-355556</p>
                                                                    <p><i class="la la-fax mr-1 ml-2"></i>+66-022-369973</p>
                                                                    <p class="text-black"><i class="la la-phone mr-1 ml-2"></i>+66-089-8960554</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>bkkuu@bdbiman.com</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px text-black normal-text">
                                                                    <p class="text-black ">
                                                                        Bangkok Airport</p>
                                                                    <p>Room no- Z-2 007,2nd floor</p>
                                                                    <p>AOB Building, Suvarnabhumi Airport</p>
                                                                    <p>Bangkok, Thailand</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+66-021-342940</p>
                                                                    <p><i class="la la-fax mr-1 ml-2"></i>+66-021-342944</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+66-081-9243379</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>bkkkk@bdbiman.com</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 15 -->

                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeadingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapseOne" aria-expanded="false" aria-controls="globalOfficeCollapseOne">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/ae.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">ABU DHABI, UAE</h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapseOne" class="collapse border-top " aria-labelledby="globalOfficeHeadingOne" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p>SK. Zayed 2nd Street / Electra street</p>
                                                                    <p>Bldg. No. 5213, PO Box-4356</p>
                                                                    <p>Abu Dhabi, UAE</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+97-102-6342597</p>
                                                                    <p><i class="la la-fax mr-1 ml-2"></i>+97-102-6344664</p>
                                                                    <p class="text-black"><i class="la la-phone mr-1 ml-2"></i>+97-150-1090583</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>auhuu@bdbiman.com</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px text-black normal-text">
                                                                    <p class="text-black ">
                                                                        Abu Dhabi International Airport</p>
                                                                    <p>Room No. 2250, Abu dhabi, UAE</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+97-102-5757053</p>
                                                                    <p><i class="la la-tty mr-1 ml-2"></i>+97-102-5757500/2673</p>
                                                                    <p><i class="la la-fax mr-1 ml-2"></i>+97-102-6344664</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+97-150-1090533</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>auhkk@bdbiman.com
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->


                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeadingSix">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapseSix" aria-expanded="false" aria-controls="globalOfficeCollapseSix">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/ae.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">DUBAI, UAE</h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapseSix" class="collapse border-top" aria-labelledby="globalOfficeHeadingSix" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <!--<p>Al Masraf Tower, 16th Floor, Office #-->
                                                                    <!--    1605</p>-->
                                                                    <!--<p>Al Baniyas Road, P.O. Box. 1515</p>-->
                                                                    <!--<p>Deira, Dubai, UAE</p>-->
                                                                    <!--<p><i class="la la-phone mr-1 ml-2"></i>+97-142-220942/205</p>-->
                                                                    <!--<p>Office:</p><p><i class="la la-phone mr-1 ml-2"></i>+97-142-283767/205</p>-->
                                                                    <!--<p><i class="la la-phone mr-1 ml-2"></i>+97-150-5539045</p>-->
                                                                    <!--<p>Residence:<i class="la la-phone mr-1 ml-2"></i>+97-142-576185</p>-->
                                                                    <!--<p><i class="la la-envelope mr-1 ml-2"></i>dxbuu@bdbiman.com</p>-->
                                                                    <p>City Office:</p>
                                                                    <p>EGTC, Ground Floor, Near Clock Tower, </p>
                                                                    <p>Al Ittihad Road, P.O. Box No-1515, Deira, Dubai, UAE</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i> +971-4-2220942</p>
                                                                    <p><i class="la la-mobile mr-1 ml-2"></i> +971-505539045</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i> dxbuu@bdbiman.com</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p class="text-black">Dubai
                                                                        International Airport</p>
                                                                    <p>Terminal-1, Departure Building</p>
                                                                    <p>Room # 1017,1049 & 1050</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+97-142-162895</p>
                                                                    <p><i class="la la-fax mr-1 ml-2"></i>+97-150-5525936</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>dxbkk@bdbiman.com</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!--CARD 20 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading20">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse20" aria-expanded="false" aria-controls="globalOfficeCollapse20">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/ae.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">SHARJAH, UAE</h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse20" class="collapse border-top" aria-labelledby="globalOfficeHeading20" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p>Office # 04 & 05.</p>
                                                                    <p>Al Shuwaiheyen Building, Al Shuwaiheyen Area</p>
                                                                    <p>Arabian Gulf Street, Rolla, Sharjah, UAE</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <ul>
                                                                        <li>
                                                                            <i class="la la-phone mr-1 ml-2"></i>06 5690388<i class="la la-phone mr-1 ml-2"></i>06 5690423
                                                                        </li>
                                                                        <li><i class="la la-fax mr-1 ml-2"></i>06 5691781<i class="la la-phone mr-1 ml-2"></i>050 8755330 </li>
                                                                        <li><i class="la la-envelope mr-1 ml-2"></i>royson@tatravel.ae </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->


                                        <!-- CARD 16 -->

                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading14">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse14" aria-expanded="false" aria-controls="globalOfficeCollapse14">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/gb.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">LONDON, UK </h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse14" class="collapse border-top" aria-labelledby="globalOfficeHeading14" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p><b>City Office: </b></p>
                                                                    <p>406-410 Eastern Avenue(3rd floor)</p>
                                                                    <p>Gants Hill, ILFORD, IG2 6NQ, London, UK</p>

                                                                    <p><b>For Reservation & Ticketing: </b></p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+ (44) 0207 629 0252</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>lonrs@bdbiman.com</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>lonrsbg@gmail.com</p>

                                                                    <p><b>Country Manager: </b></p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+ (44) 0207 629 0161 </p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+ (44) 0790 811 7126 </p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>lonuu@bdbiman.com</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>adminlondon@bdbiman.com</p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p class="text-black "><b>Airport Office</b></p>
                                                                    <p> Room No. 5900D (5th floor)</p>
                                                                    <p>North East Extension, Terminal -4</p>
                                                                    <p>Hounslow, Middlesex </p>
                                                                    <p>Heathrow Airport TW6 3F8</p>

                                                                    <p class="text-black "><b>For Lost Baggage Inquiry/Complaint:</b></p>
                                                                    <p>dnata Baggage Services</p>
                                                                    <p>T3 – 078-13146226</p>
                                                                    <p>T3 – 079-64119236</p>

                                                                    <p class="text-black "><b>Station Manager:</b></p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+ (44) 0208 745 7550</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+ (44) 0208 573 8127 </p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+ (44) 0794 968 6823 </p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>lhrkk@bdbiman.com</p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-sm-12 col-md-4">
                                                            <div class="text">
                                                                <div class="whiteBlack padding-top-50px normal-text">
                                                                    <p class="text-black "><b>Cargo And Stores & Purchase:</b></p>
                                                                    <p>C/O Dnata UK Ltd. Cargo Point </p>
                                                                    <p>Bedfont Road, Stanwell, Staines,
                                                                        Middlesex, TW19 7LU
                                                                    </p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+88 01784 425 044</p>
                                                                    <p><i class="la la-phone mr-1 ml-2"></i>+88 01784 247 212</p>

                                                                    <p class="text-black "><b>E-mail to Cargo:</b></p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>lhrfw@bdbiman.com</p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>bimancargouk@yahoo.com</p>

                                                                    <p class="text-black "><b>E-mail to Store & Purchase:</b></p>
                                                                    <p><i class="la la-envelope mr-1 ml-2"></i>biman_purchaseuk@yahoo.com</p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->


                                        <!-- CARD 17 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading16">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse16" aria-expanded="false" aria-controls="globalOfficeCollapse16">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/gb.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">MANCHESTER, UK </h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse16" class="collapse border-top" aria-labelledby="globalOfficeHeading16" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row padding-top-10px">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">City Office</div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li>St. James Building, Block FB, 4th Floor</li>
                                                                        <li>61-95 Oxford Street, Manchester, M1 6EG</li>
                                                                        <li>-----</li>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-4 col-md-4 criteria-head">Regional Manager:
                                                                            </span>
                                                                            <span class="col-sm-8 col-md-8 criteria-body">
                                                                                <ul>
                                                                                    <!--<li>MD Mahmudur Rahman</li>-->
                                                                                    <li>Office: <i class="la la-fax mr-1 ml-2"></i> +44 (0)161 228 6605/2636</li>
                                                                                    <li>Mobile: <i class="la la-phone mr-1 ml-2"></i> +44 (0) 7538626645</li>
                                                                                    <li>E-mail: <i class="la la-envelope mr-1 ml-2"></i> manuu@bdbiman.com</li>
                                                                                </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header custom-header">Airport Office</div>
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li>Voyager House, Suite-1006 A, Chicago Avenue</li>
                                                                        <li>Manchester Airport, M90 3DP</li>
                                                                        <li>-----</li>
                                                                        <li class="row criteria-list">
                                                                            <span class="col-sm-4 col-md-4 criteria-head">Station Manager:
                                                                            </span>
                                                                            <span class="col-sm-8 col-md-8 criteria-body">
                                                                                <ul>
                                                                                    <!--<li>AKM Anisuzzaman Talukder</li>-->
                                                                                    <li>Office: <i class="la la-fax mr-1 ml-2"></i> +44 (0)161 489 0561</li>
                                                                                    <li>Mobile: <i class="la la-phone mr-1 ml-2"></i> +44 (0) 7903753039</li>
                                                                                    <li>E-mail: <i class="la la-envelope mr-1 ml-2"></i> mankk@bdbiman.com</li>
                                                                                </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div class="col-sm-12 col-md-6">-->
                                                        <!--    <ul>-->
                                                        <!--        <li>Stations Manager (Mobile): <i class="la la-phone mr-1 ml-2"></i>+44(0)7903753039</li>-->
                                                        <!--        <li>Stations Manager (Phone): <i class="la la-phone mr-1 ml-2"></i>+44(0)1614890561</li>-->
                                                        <!--        <li><i class="la la-envelope mr-1 ml-2"></i>mankk@bdbiman.com</li>-->

                                                        <!--        <li>St. James Building,</i>-->
                                                        <!--        <li>Suite - Block FB, 4th Floor,</li>-->
                                                        <!--        <li>61-95 Oxford Street, M1 6EG</li>-->
                                                        <!--    </ul>-->
                                                        <!--</div>-->
                                                        <!-- <div class="col-sm-12 col-md-6">
                                                                <ul>
                                                                    <li>
                                                                        <i class="la la-phone mr-1 ml-2"></i>+44-016-12282636<i class="la la-phone mr-1 ml-2"></i>+44-016-12286605
                                                                    </li>
                                                                    <li><i class="la la-fax mr-1 ml-2"></i>+44-016-12287070 </li>
                                                                    <li><i class="la la-envelope mr-1 ml-2"></i>manuu@bdbiman.com<i class="la la-envelope mr-1 ml-2"></i>manuubg@btconnect.com </li>
                                                                </ul>
                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <!-- CARD 22 -->
                                        <div class="card">
                                            <div class="card-header" id="globalOfficeHeading22">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#globalOfficeCollapse22" aria-expanded="false" aria-controls="globalOfficeCollapse22">
                                                        <img class="ml-auto" src="{{ asset('assets/flags/4x3/ca.svg') }}" style="height: auto; width: 40px">
                                                        <h5 class="ml-3">Canada <span class="badge badge-success">Updated</span></h5>
                                                        <i class="la la-minus minus-icon"></i>
                                                        <i class="la la-plus plus-icon"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="globalOfficeCollapse22" class="collapse border-top" aria-labelledby="globalOfficeHeading22" data-parent="#globalOffice">
                                                <div class="card-body padding-12">
                                                    <div class="row padding-top-10px">
                                                        <div class="col-sm-12 col-md-6">
                                                            <ul>
                                                                <li><b>City office:</b></li>
                                                                <li>Suite 203, 1st Floor, 3154 Kingston Road, Scarborough, ON, M1M 1P4, Canada</li>
                                                                <li><i class="la la-phone mr-1 ml-2"></i>6474059523 (Country Manager)</li>
                                                            </ul>
                                                            <br>
                                                            <ul>
                                                                <li><b>Sales/Reservation:</b></li>
                                                                <li><i class="la la-phone mr-1 ml-2"></i>+1 416 546 2121</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <ul>
                                                                <li><b>Airport office:</b></li>
                                                                <li>ROOM NO. G308A, AT Level, Terminal-3, Pearson Airport ,<br>
Toronto, ON L5P 1B2
</li>
<li><i class="la la-phone mr-1 ml-2"></i>437 425 2874 (Station Manager)</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div><!-- end tab-pane -->

                    </div><!-- end tab-content -->

                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->

    </div>
    <!-- end container -->
</section>
<!-- end contact-area -->
<!-- ================================
        END CONTACT AREA
    ================================= -->
@endsection

@section('page-specific-footer')

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $('input[name="daterange_single"]').daterangepicker({
        singleDatePicker: true,
        autoApply: true
        // minDate: new Date(),
    });
</script>

@endsection