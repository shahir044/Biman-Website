
@extends('header-footer')

@section('header-extension')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<style type="text/css">
    .daterangepicker {
        font-size: 9pt !important
    }

</style>

<style>
img[usemap] {
	border: none;
	height: auto;
  max-width: 100%;
	width: auto;
}  

p {
  margin: 0;  
  text-align: center;  
  font-weight: bold;
  font-size: 15pt;
}

</style>

@endsection

@section('content')

<section class="breadcrumb-area bread-bg-europe">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="section-heading text-left">
                            <h2 class="sec__title-terms">Europe</h2>
                            <p class="sec__desc-terms font-weight-regular pb-2">London, Manchester.</p>
                        </div>
                        <div class="btn-box bread-btns">
                            <a href="{{url('/#flight')}}" class="theme-btn theme-btn-gray" target="_blank"><i class="la la-external-link mr-1"></i>Book Flight</a>
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
    <div class="container" id="route">
        <div class="row pb-5">
            <div class="col-lg-12">
                <div class="filter-wrap margin-bottom-40px">
                    <div class="filter-top d-flex align-items-center justify-content-between">
                        <div class="section-tab section-tab-3">
                            <ul class="nav nav-tabs" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="Domestic-tab" href="{{route('destinations-domestic')}}">
                                        Domestic
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="asia-tab"  href="{{route('destinations-asia')}}">
                                        Asia
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="europe-tab" href="{{route('destinations-europe')}}">
                                        Europe
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="middle-east-tab" href="{{route('destinations-middle-east')}}">
                                        Middle East
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="subcontinent-tab" href="{{route('destinations-subcontinent')}}">
                                        Subcontinent
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="europe-map">
                    <img id="map-image" src="{{asset('assets/images/map/europe-map.png')}}" usemap="#Map" />

                    <map name="Map" id="Map"> 
                        <area title="London" href="#route" onclick="changeImg('assets/images/map/london-map.png'); showImg1('assets/images/destinations/london-grid-1.jpg'); showImg2('assets/images/destinations/london-grid-2.jpg'); showImg3('assets/images/destinations/london-grid-3.jpg');" shape="poly" class="London" coords="1201,526,1201,543,1210,552,1217,558,1226,565,1232,559,1239,563,1245,550,1246,543,1257,536,1251,522,1240,528,1234,519,1227,512,1216,520" />
                        <area title="Manchester" href="#route" onclick="changeImg('assets/images/map/manchester-map.png'); showImg1('assets/images/destinations/manchester-grid-1.jpg'); showImg2('assets/images/destinations/manchester-grid-2.jpg'); showImg3('assets/images/destinations/manchester-grid-3.jpg');" shape="poly" class="Manchester" coords="1044,209,1044,222,1041,231,1038,239,1032,245,1030,262,1038,267,1029,279,1025,293,1028,307,1018,313,1028,327,1035,337,1037,346,1042,358,1060,359,1073,356,1089,334,1100,337,1096,310,1104,293,1094,276,1085,273,1096,257,1085,238,1073,233,1061,225,1061,212,1073,209,1073,197,1078,189,1090,180,1076,161,1077,144,1067,133,1061,144,1054,132,1061,113,1049,97,1025,118,1007,132,999,150,989,178,1001,195,1008,213,1017,228,1028,209,1035,216" />
                        <area title="England" href="#route" onclick="changeImg('assets/images/map/europe-map.png'); showImg1('assets/images/destinations/london-grid-1.jpg'); showImg2('assets/images/destinations/london-grid-2.jpg'); showImg3('assets/images/destinations/manchester-grid-1.jpg');" shape="poly" class="England" coords="100,195,117,185,127,192,121,204,134,200,129,226,136,237,148,264,161,288,149,305,157,310,109,332,133,305,115,298,121,288,127,275,127,255,112,254,109,260,98,260,103,243,111,233,99,212" />
                    </map>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12 pb-5">
                        <div class="selection">
                            <p>Europe Route Map</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-1" src="{{asset('assets/images/destinations/london-grid-1.jpg')}}" />
                            </div>              
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-2" src="{{asset('assets/images/destinations/london-grid-2.jpg')}}" />
                            </div>              
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-3" src="{{asset('assets/images/destinations/manchester-grid-1.jpg')}}" />
                            </div>              
                        </div>
                    </div> --}}
                </div>
            </div>
            
        </div>
    </div>
      
</section>


@endsection



@section('page-specific-footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-rwdImageMaps/1.6/jquery.rwdImageMaps.min.js"></script>
<script>
$(document).ready(function(e) {
    $('img[usemap]').rwdImageMaps();

    $('area').on('focus', function(e) {
      e.preventDefault();
      $('.selection p').html($(this).attr('class'));      
    });
});
</script>
<script type="text/javascript">
    function changeImg(image){
      var imghol = document.getElementById("map-image");
      imghol.src = image;
    }

    function showImg1(image){
      var imghol = document.getElementById("show-image-1");
      imghol.src = image;
    }
    function showImg2(image){
      var imghol = document.getElementById("show-image-2");
      imghol.src = image;
    }
    function showImg3(image){
      var imghol = document.getElementById("show-image-3");
      imghol.src = image;
    }
</script>

@endsection
