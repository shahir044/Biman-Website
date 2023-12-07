
@extends('header-footer')

@section('header-extension')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<style type="text/css">
    .daterangepicker {
        font-size: 9pt !important
    }

</style>

@endsection

@section('content')

<section class="breadcrumb-area bread-bg-hazmat">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="section-heading text-left">
                            <h2 class="sec__title-terms">Hazardous-Prohibited Materials</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div>
</section>

<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="card-item room-card">
                    <div class="card-img">
                        <img id="show-image-1" src="{{asset('assets/images/checkin/Hazardous-Prohibited Materials.jpg')}}" />
                    </div>              
                </div>
            </div>
            
            <div class="col-lg-1">
            </div>

            <div class="col-lg-6">
                <div class="card-item room-card">
                    <div class="card-img">
                        <img id="show-image-2" src="{{asset('assets/images/checkin/Hazmats.jpg')}}" />
                    </div>              
                </div>
            </div>
        </div>
    </div>
</section>


@endsection



@section('page-specific-footer')

@endsection
