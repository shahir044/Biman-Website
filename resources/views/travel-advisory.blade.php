@extends('header-footer')



@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-5">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Travel Advisory</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li>Travel Info</li>
                                <li>Travel Advisory</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg travelAdvisory-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START TRAVEL ADVISORY AREA
    ================================= -->
    <section class="contact-area section-bg section--padding custom-padding">
        <div class="container">
            <div class="page-title">
            <span>
                <span class="page-header-title"> Travel Advisory </span>
                is an official statement issued by government agencies to
                assist travelers to make an informed decision about a particular travel destination and 
                to prepare adequately for what may be encountered (inclement weather, security matters, civil unrest or disease) on their trip. 
            </span>
            
            </div>
            <br>
            <div class="page-title">
           
                <span>
                    <span style="color:red;"><strong>Notice for UK passengers: </strong></span> Please be informed that from 4am Friday 18 March, all COVID-19 travel restrictions will be lifted by UK govt for arrival into UK, including the <a href="https://www.gov.uk/guidance/travel-to-england-from-another-country-during-coronavirus-covid-19">passenger locator form (PLF)</a>  for arrivals into UK, as well as all tests for passengers who do not qualify as vaccinated and  removes the need for unvaccinated passengers to take a <a href="https://www.gov.uk/guidance/travel-to-england-from-another-country-during-coronavirus-covid-19">pre-departure test</a>  and a day <a href="https://www.gov.uk/find-travel-test-provider">2 post arrival test</a> .
                </span>
            </div>
            <div class="row padding-top-50px">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="accordion accordion-item padding-top-30px" id="travelAdvisory">

                        {{-- initializing the country variables --}}
                        @php
                            $prev_country = null;
                            $current_country = null;
                            $country_iterator = 0; 
                            $advisory_iterator =0;
                        @endphp

                        @foreach ($advisories as $key=> $advisory)
                        @if ($advisory->status==1)
                            {{-- storing the prev & current country name --}}
                            @php
                                $prev_country = $current_country;
                                $current_country = $advisory->country_name;
                            @endphp
                            
                            @if ($current_country != $prev_country)
                                @php
                                    $country_iterator++;
                                    $advisory_iterator = 0;
                                @endphp
                                @if ($prev_country != null)
                                    {{-- closing the previous card's div --}}
                                                                        </tbody>
                                                                    </table>
                                                                </div> <!-- END TABLE DIV -->
                                                            </div> <!-- END WHITEBLACK DIV -->
                                                        </div> <!-- END TEXT DIV -->
                                                    </div> <!-- END COL-MD-12 DIV -->
                                                </div> <!-- END ROW DIV -->
                                            </div> <!-- END CARD BODY DIV -->
                                        </div> <!-- END CARD COLLAPSE DIV -->
                                    </div> <!-- END CARD DIV -->
                                    
                                @endif
                                    
                                
                                <div class="card">
                                    <div class="card-header" id="travelAdvisoryHeading{{$country_iterator}}">
                                        <h2 class="mb-0">
                                            <button
                                                class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                type="button" data-toggle="collapse" data-target="#travelAdvisoryCollapse{{$country_iterator}}"
                                                aria-expanded="false" aria-controls="travelAdvisoryCollapse{{$country_iterator}}">
                                                <img class="ml-auto" src="{{ asset('assets/flags/4x3/'.Str::lower($advisory->iso).'.svg') }}"
                                                    style="height: 40px; width: 40px">
                                                <h5 class="ml-3">{{$current_country}}</h5>
                                                <i class="la la-minus minus-icon"></i>
                                                <i class="la la-plus plus-icon"></i>
                                            </button>
                                        </h2>
                                    </div> <!-- END CARD HEADER DIV -->
                                    
                                    <div id="travelAdvisoryCollapse{{$country_iterator}}" class="collapse border-top"
                                    aria-labelledby="travelAdvisoryHeading{{$country_iterator}}" data-parent="#travelAdvisory">
                                        <div class="card-body padding-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text">
                                                        <div class="whiteBlack padding-top-30px">
                                                            <div class="table-form table-responsive">
                                                                <table class="table">
                                                                    <thead class="custom-thead">
                                                                    <tr>
                                                                        <th scope="col" class="nowrap-th custom-top-left-radius">No</th>
                                                                        <th scope="col" class="nowrap-th">Advisory Title</th>
                                                                        <th scope="col" class="nowrap-th middle-text">Uploaded on</th>
                                                                        <th class="nowrap-th custom-top-right-radius middle-text">Download</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>{{++$advisory_iterator}}</td>
                                                                            <td>{{$advisory->advisory_title}}</td>
                                                                            <td class="middle-text">{{ Carbon\Carbon::parse($advisory->created_at)->format('d-m-Y')}}</td>
                                                                            <td class="middle-align">
                                                                                <button class="theme-btn theme-btn-small icon-element advisory-btn flex-shrink-0 mr-0 ml-0">
                                                                                    <a target="_blank" href="{{ route('getDownloadAdvisory', $advisory->file_name) }}">
                                                                                        <i class="la la-download download-icon-color"></i>
                                                                                    </a>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                            @else
                                                                        <tr>
                                                                            <td>{{++$advisory_iterator}}</td>
                                                                            <td>{{$advisory->advisory_title}}</td>
                                                                            <td class="middle-text">{{ Carbon\Carbon::parse($advisory->created_at)->format('d-m-Y')}}</td>
                                                                            <td class="middle-align">
                                                                                <button class="theme-btn theme-btn-small icon-element advisory-btn flex-shrink-0 mr-0 ml-0">
                                                                                    <a target="_blank" href="{{ route('getDownloadAdvisory', $advisory->file_name) }}">
                                                                                        <i class="la la-download download-icon-color"></i>
                                                                                    </a>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                
                            @endif
                        @endif
                        @endforeach
                        
                         {{-- closing the last card's div --}}
                        @if ($current_country != null)
                                                                    </tbody>
                                                                </table>
                                                            </div> <!-- END TABLE DIV -->
                                                        </div> <!-- END WHITEBLACK DIV -->
                                                    </div> <!-- END TEXT DIV -->
                                                </div> <!-- END COL-MD-12 DIV -->
                                            </div> <!-- END ROW DIV -->
                                        </div> <!-- END CARD BODY DIV -->
                                    </div> <!-- END CARD COLLAPSE DIV -->
                                </div> <!-- END CARD DIV -->
                                                                            
                        @endif

                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end travel-advisory-area -->
    <!-- ================================
    END TRAVEL ADVISORY AREA
    ================================= -->

@endsection
