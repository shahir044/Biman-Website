@extends('header-footer')

@section('header-extension')
    {!! htmlScriptTagJsApi() !!}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <style>
        h1, h2, h3, h4, h5, h6, p, span, li{
            font-family: 'Inter','Arial';
        }
        .hajj-bg{
            /* background-image: url("/assets/images/hero/hero-bg2.jpg"); */
            background-image: url("/assets/images/hajj/hajj (3).png");
        }
        .table.hajj-flight-table th {
            padding: 20px 10px;
            border-bottom: none;
            background-color: rgba(201, 232, 200, 0.30);
        }
        table.hajj-flight-table tr th, table.hajj-flight-table tr td {
            border: 1px solid rgba(201, 232, 200, 0.30);
            padding: 15px 10px;
            font-size: 15px;
            line-height: 1.5;
            text-align: center;
            vertical-align: middle;
            font-weight: normal;
        }
        tfoot {
            display: table-header-group;
        }
    </style>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')

<!-- ================================
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper hero-wrapper5">
    <div class="hero-box pb-0 hajj-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content padding-bottom-150px text-center">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-70">Hajj Journey<br>2024</h2>
                            <p class="sec__desc pt-3">Find your hajj flight schedule and information</p>
                        </div>
                    </div><!-- end hero-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="hero-svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"></path></svg>
    </div>
</section><!-- end hero-wrapper -->
<!-- ================================
    END HERO-WRAPPER AREA
================================= -->


<!-- Hajj Schedule Search -->
<section class="schedule-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="font-size-24 pb-4 text-black font-weight-bolder">Seach Your Hajj Flight</h2>
            </div><!-- end col-lg-12 -->
            <div class="col-lg-12">
                <div class="search-fields-container search-fields-container-shape">
                    <div class="search-fields-container-inner">
                        <div class="contact-form-action">
                            <form id="hajjSearchForm" class="row">
                                <div class="col-lg-4 col-sm-6 pr-0">
                                    <div class="input-box">
                                        <label class="label-text">Departure From</label>
                                        <div class="form-group">
                                            <div class="select-contain select-contain-shadow w-auto">
                                                <select class="select-contain-select" id="depart" name="depart">
                                                    <option value="">--Selecte Departure--</option>
                                                    <option value="DAC">Dhaka</option>
                                                    <option value="JED">Jeddah</option>
                                                    <option value="MED">Madinah</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-4 col-sm-6 pr-0">
                                    <div class="input-box">
                                        <label class="label-text">Arrival</label>
                                        <div class="form-group">
                                            <div class="select-contain select-contain-shadow w-auto">
                                                <select class="select-contain-select" id="arriv" name="arriv">
                                                    <option value="">--Selecte Arrival--</option>
                                                    <option value="JED">Jeddah</option>
                                                    <option value="MED">Madinah</option>
                                                    <option value="DAC">Dhaka</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="input-box">
                                        <label class="label-text">Date</label>
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="date-picker-single form-control" type="text" id="daterange-single" name="daterange-single" readonly>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-4 col-sm-6">
                                    <button class="theme-btn theme-btn-small" id="searchButton" type="submit">Search <i class="la la-paper-plane-o ml-1"></i></button>
                                </div>
                            </form>
                        </div>
                        
                    </div>

                    <div class="routes my-4 d-none" id="searchResult">
                        <hr>
                        <div class="col-md-12">
                            <h4 class="font-size-20 pb-4 text-black font-weight-bolder">Search Results</h4>
                        </div>
                        <div class="route-item">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="route-inner-item media align-items-center">
                                        <div class="route-icon mr-4 pl-3">
                                            <img src="{{asset('assets/images/logo/biman_red_logo.png')}}" alt="logo">
                                        </div><!-- end route-icon -->
                                        <div class="media-body">
                                            <div class="time-wrap font-size-18 font-weight-medium text-black">
                                                <span class="departure-time" id="depar-text">Dhaka</span>
                                                <i class="la la-arrow-right mx-1 text-color"></i>
                                                <span class="arrival-time" id="arriv-text">Madinah</span>
                                            </div>
                                        </div><!-- end media-body -->
                                    </div><!-- end media -->
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-2">
                                    <div class="route-inner-item media">
                                        <div class="media-body">
                                            <div class="price-wrap font-size-18 font-weight-medium text-black">
                                                <span class="value text-color">13/05/04</span>
                                                <span class="currency text-gray font-weight-regular">EUR</span>
                                            </div>
                                        </div><!-- end media-body -->
                                    </div><!-- end media -->
                                </div><!-- end col-lg-2 -->
                                <div class="col-lg-3">
                                    <div class="route-inner-item media">
                                        <div class="media-body">
                                            <span class="badge badge-success">Scheduled</span>
                                            
                                        </div><!-- end media-body -->
                                    </div><!-- end media -->
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-2">
                                    <div class="select-route-btn-box text-right">
                                        <a class="theme-btn theme-btn-small" type="submit" href="#">Find more <i class="la la-arrow-right ml-1"></i></a>
                                    </div><!-- end select-route-btn-box -->
                                </div><!-- end col-lg-2 -->
                            </div><!-- end row -->
                        </div>
                        <!-- end route-item -->
                    </div><!-- end routes -->
                </div><!-- end search-fields-container -->
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<!-- Hajj Schedule All -->
<section class=" section-padding padding-top-150px">
    <div class="dashboard-main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="font-size-24 pb-4 text-black font-weight-bolder">Hajj Flight Schedule</h2>
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="table-form table-responsive">
                        <table class="table hajj-flight-table" id="hajj-flight-table">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Flight Code</th>
                                    <th scope="col">Route</th>
                                    <th scope="col">Departure</th>
                                    <th scope="col">Arrival</th>
                                    <th scope="col">Aircraft</th>
                                    <th scope="col">Capacity</th>
                                    <th scope="col">Via</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Flight No</th>
                                    <th scope="col">Route</th>
                                    <th scope="col">Departure</th>
                                    <th scope="col">Arrival</th>
                                    <th scope="col">Aircraft</th>
                                    <th scope="col">Capacity</th>
                                    <th scope="col">Via</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($hajjSchedule as $index => $item)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$item->DATE}}</td>
                                        {{-- <td>{{ \Carbon\Carbon::parse($item->DATE)->format('d-M-Y') }}</td> --}}
                                        <td>{{$item->FLT_NO}}</td>
                                        <td class="title">{{$item->ROUTE}}</td>
                                        <td class="title">{{$item->DEP}}</td>
                                        <td class="title">{{$item->ARR}}</td>
                                        <td>{{$item->CAP}}</td>
                                        <td>{{$item->ACFT}}</td>
                                        <td><span class="badge badge-success py-1 px-2">{{$item->VIA}}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="border-top mt-5"></div>
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-main-content -->
</section>


@endsection


@section('page-specific-footer')
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // Setup - add a text input to each footer cell
         $('#hajj-flight-table tfoot th').each( function () {
             var title = $(this).text();
             $(this).html( '<input class="form-control" type="text" placeholder="Search '+title+'" />' );
         } );
    </script>

    <script>
        $(document).ready(function() {
            var otable = $('#hajj-flight-table').DataTable({
                // "paging": false, // Disable pagination
                // "scrollY": "500px", // Set the height of the scrolling area
                // "scrollCollapse": true // Enable collapsing the table if the content is smaller than the height
            });
            // Apply the search
            otable.columns().every( function () {

            var that = this;
            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
            } );
        });
    </script>

    {{-- Search Function --}}
    <script>
        $(document).ready(function(){
            $('#hajjSearchForm').submit(function(e){
                e.preventDefault();
                console.log('form submit');
                //check empty or null
                var depart = $('#depart').val();
                var arriv = $('#arriv').val();
                var daterange = $('#daterange-single').val();

                console.log("🚀 ~ $ ~ daterange:", daterange+" "+depart+" "+arriv);

                if (!arriv || !depart || !daterange) {
                    alert('Please fill all fields');
                    return;
                }

                // Disable the button and show loading state
                $('#searchButton').prop('disabled', true).html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Loading...');
                
                // AJAX request
                $.ajax({
                    url: "{{ route('search.hajj-sch') }}", // Replace with your Laravel route
                    type: "GET",
                    data: {
                        arriv: arriv,
                        depart: depart,
                        daterange: daterange
                    },
                    success: function(response) {
                        // Update search result div with response
                        // console.log(response);
                        $('#searchResult').html(response);
                        $('#searchResult').removeClass('d-none');
                        
                    },
                    error: function(xhr, status, error) {
                        // console.error(error);
                        iziToast.error({
                            title: 'Error',
                            position: 'topRight',
                            message: 'Sorry! Something went wrong!',
                        });
                    },
                    complete: function() {
                        // Re-enable button and reset its content
                        iziToast.info({
                            title: 'Search Complete',
                            position: 'topRight',
                            color: 'yellow',
                            message: 'See results for details!',
                        });
                        $('#searchButton').prop('disabled', false).html(' Search <i class="la la-paper-plane-o ml-1"></i>');
                        // Scroll the page to the search result section
                        // Get the searchResult section element
                        var searchResultSection = document.getElementById('searchResult');

                        // Calculate the offset position considering any header or navigation height
                        var offset = 50; // Adjust this value as needed
                        var offsetPosition = searchResultSection.offsetTop - offset;

                        // Scroll the page to the searchResult section with the specified offset
                        window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
                    }
                });
            })
            
        })
    </script>
@endsection