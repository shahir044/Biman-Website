@extends('admin.main')
@section('page-specific-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endsection
@section('content')
    <!-- Main Container -->

    <!-- Page Content -->
    <!-- Basic -->
    <div class="block block-rounded">
        <div class="block-header travelAdvisory-header">
            <h5 class="block-title travelAdvisory-page-title">New Travel Advisory</h5>
            <h5 class=" travelAdvisory-date">Date: {{ date('d-m-Y') }}</h5>

        </div>
        <div class="block-content block-content-full travelAdvisory-block">

            <div class="form-row">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="form-group">
                        <form action="{{ route('submitAdvisory') }}" method="POST" enctype="multipart/form-data"
                            name="Form">
                            @csrf

                            

                            <div class="row travelAdvisory-info-div">
                                <div class="col-sm-12 col-md-8 travelAdvisory-input travelAdvisory-title">
                                    <label for="name">Advisory Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                
                                <div class="col-sm-12 col-md-4 travelAdvisory-input travelAdvisory-country">
                                    <label for="country_name" class="col-sm-12">Applicable Country<span class="text-danger">*</span></label>
                                    
                                    <select name="country_name" id="country_name" class="form-control select-contain-select">
                                        <option value="" disabled selected>Select country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-8 travelAdvisory-input travelAdvisory-file">
                                    <label for="name" class="col-sm-12">Upload Travel Advisory file (.doc/.docx/.pdf)<span
                                            class="text-danger">*</span></label>


                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                                    <input type="file" id="input_file" name="input_file" class="form-control travelAdvisory-file-input">
                                </div>
                            </div>
                            <div class=" travelAdvisory-input travelAdvisory-file-error">

                                @error('input_file')
                                    <span role="alert">
                                        <strong style="color: red; font-size: 16px; text-align:center;">
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class=" travelAdvisory-input travelAdvisory-upload-button">
                                <button type="submit" class="btn btn-primary mr-1 mb-3"
                                    id="uploadBtn">
                                    <i class="fa fa-upload mr-1"></i> Upload
                                </button>
                                <span class="input-group-addon d-none" id="loader">
                                    <img src="{{ asset('assets/images/loader/ajaxLoader.gif') }}" height="30"
                                        style="margin-bottom: 10px" />
                                </span>
                            </div>
                        </form>
                    </div>

                    <hr>

                    <!-- Page Content -->
                    <div class="content travelAdvisory-history">
                        <!-- Dynamic Table Full -->
                        <div class="block block-rounded">
                            <div class="block-header">
                                <h3 class="block-title">Uploaded Advisories</h3>
                            </div>
                            <div class="block-content block-content-full">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->


                                <table id="datatable" class="table table-bordered  table-vcenter table-responsive hover">
                                    <thead>
                                        <tr>
                                            {{-- <th class="text-center" style="width: 80px;">ID</th> --}}
                                            {{-- <th class="d-none d-sm-table-cell badge badge-success" style="width: 30%; text-align:center">Title</th> --}}
                                            <th class="d-none d-sm-table-cell badge badge-success"
                                            style="width: 50%; text-align:center">Applicable Country</th>
                                            <th class="d-none d-sm-table-cell badge badge-success"
                                                style="width: 50%; text-align:center">Advisory Title</th>
                                            <th class="d-none d-sm-table-cell badge badge-success"
                                                style="width: 15%; text-align:center">Udploaded at</th>
                                            <th class="d-none d-sm-table-cell badge badge-success"
                                                style="width: 15%; text-align:center">Uploaded by</th>
                                            <th class="d-none d-sm-table-cell badge badge-success"
                                                style="width: 10%; text-align:center">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($advisories as $file)
                                            <tr>
                                                <td class="font-w600 font-size-sm">
                                                    {{ $file->country_name }}
                                                    @if ($file->status == 0)
                                                        <span class="badge badge-danger"> File deleted </span>
                                                    @endif
                                                </td>
                                                <td class="font-w600 font-size-sm">
                                                    {{ $file->advisory_title }}
                                                    @if ($file->status == 0)
                                                        <span class="badge badge-danger"> File deleted </span>
                                                    @endif
                                                </td>
                                                <td class="font-w600 font-size-sm">
                                                    {{ $file->created_at }}
                                                    
                                                </td>
                                                <td class="font-w600 font-size-sm">
                                                    {{ $file->name }}
                                                    @if ($file->status == 0)
                                                        <span class="badge badge-danger"> File deleted </span>
                                                    @endif
                                                </td>
                                                <td class="d-none d-sm-table-cell font-w600 font-size-sm">
                                                    @if ($file->status == 0)
                                                        {{ $file->file_name }}
                                                        <span class="badge badge-danger"> File deleted </span>
                                                    @else
                                                        <a style="margin-right: 1rem"  class="btn btn-primary" href="{{ route('getDownloadAdvisory', $file->file_name) }}"><i class="fa fa-download" aria-hidden="true"></i></a>
                                                        <button class="btn btn-danger" onclick="deleteConfirmation({{ $file->id }})"><i class="fa fa-trash" aria-hidden="true"></i></button> 
                                                        <span class="badge badge-success">{{ $file->department }}</span>
                                                    @endif
                                                    {{-- <a href="/storage/files/{{$result->file_name}}" target="_blank">{{$result->file_name}}</a> --}}
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- END Dynamic Table Full -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Basic -->
    <!-- END Page Content -->



    <!-- Page Content -->
    <div class="content">
        <!-- CKEditor 5 Classic (js-ckeditor5-classic in Helpers.ckeditor5()) -->
        <!-- For more info and examples you can check out http://ckeditor.com -->
        <div class="block block-rounded">

            <div class="block-content">

            </div>
        </div>
        <!-- END CKEditor 5 Classic-->
    </div>
    <!-- END Page Content -->

    <!-- END Main Container -->


@endsection


@section('page-specific-javascript')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#datatable').DataTable({
                    order: [[2, 'desc']],
                    "pageLength": 50
                });
            } );
        </script>

    <script>
        $(document).ready(function() {

            var $loader = $('#loader');

            $loader.hide();



            $('#uploadBtn').click(function() {

                // var title = document.forms["Form"]["title"].value;
                var file = document.forms["Form"]["input_file"].value;
                // console.log(title);

                if (file == null || file == "") {
                    //alert("Please Fill All Required Field");
                    //return false;
                } else {
                    $loader.removeClass('d-none');
                    $loader.show();
                }


            });
        });
        
    </script>
        <script>
        function deleteConfirmation(id) {
                // alert(id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Be Careful! You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            type: 'POST',
                            url: "{{ url('/delete-advisory') }}/" + id,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                _token: "{{ csrf_token() }}",
                                data: id,
                            },
                            dataType: 'JSON',
                            success: function (results) {
                                // console.log(results);
                                if (results.success === true) {
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    ).then(function () {
                                        window.location.reload();
                                    });
                                } else {
                                    swal("Error!", results.message, "error");
                                }
                            }
                        });
                        // Swal.fire(
                        // 'Deleted!',
                        // 'Your file has been deleted.',
                        // 'success'
                        // )
                    }
                }, function (dismiss) {
                    return false;
                })
            }
    </script>
    

    
@endsection
