
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

<section class="breadcrumb-area bread-bg-subcontinent">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="section-heading text-left">
                            <h2 class="sec__title-terms">Subcontinent</h2>
                            <p class="sec__desc-terms font-weight-regular pb-2">Chennai, Delhi, Kathmandu, Kolkata.</p>
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
                                    <a class="nav-link" id="europe-tab" href="{{route('destinations-europe')}}">
                                        Europe
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="middle-east-tab" href="{{route('destinations-middle-east')}}">
                                        Middle East
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="subcontinent-tab" href="{{route('destinations-subcontinent')}}">
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
                <div class="subcontinent-map">
                    <img id="map-image" src="{{asset('assets/images/map/subcontinent-map.png')}}" usemap="#Map" />

                    <map name="Map" id="Map"> 
                        <area title="Chennai" href="#route" onclick="changeImg('assets/images/map/chennai-map.png'); showImg1('assets/images/destinations/chennai-grid-1.jpg'); showImg2('assets/images/destinations/chennai-grid-2.jpg'); showImg3('assets/images/destinations/chennai-grid-3.jpg');" shape="poly" class="Chennai" coords="740,516,745,494,740,491,743,481,737,481,736,470,729,460,750,453,751,444,756,432,764,438,790,428,797,426,794,438,786,451,786,464,786,476,778,480,772,503,760,502,753,514,746,518" />
                        <area title="Delhi" href="#route" onclick="changeImg('assets/images/map/delhi-map.png'); showImg1('assets/images/destinations/delhi-grid-1.jpg'); showImg2('assets/images/destinations/delhi-grid-2.jpg'); showImg3('assets/images/destinations/delhi-grid-3.jpg');" shape="poly" class="Delhi" coords="720,143,727,150,732,160,746,166,753,170,762,171,758,158,758,145,764,132,765,126,757,118,753,114,752,126,742,135,732,133,721,129,716,133" />
                        <area title="Kathmandu" href="#route" onclick="changeImg('assets/images/map/kathmandu-map.png'); showImg1('assets/images/destinations/kathmandu-grid-1.jpg'); showImg2('assets/images/destinations/kathmandu-grid-2.jpg'); showImg3('assets/images/destinations/kathmandu-grid-3.jpg');" shape="poly" class="Kathmandu" coords="287,115,275,142,320,165,337,166,345,166,351,171,361,177,408,186,407,175,412,160,384,156,374,157,362,152,342,135,336,135,311,114,298,113" />
                        <area title="Kolkata" href="#route" onclick="changeImg('assets/images/map/kolkata-map.png'); showImg1('assets/images/destinations/kolkata-grid-1.jpg'); showImg2('assets/images/destinations/kolkata-grid-2.jpg'); showImg3('assets/images/destinations/kolkata-grid-3.jpg');" shape="poly" class="Kolkata" coords="892,254,921,235,921,223,927,212,924,204,930,193,929,185,935,182,946,189,957,197,948,204,939,199,933,199,935,214,941,216,931,224,926,230,937,238,937,249,945,264,949,279,934,281,921,283,911,273" />
                        <area title="India" href="#route" onclick="changeImg('assets/images/map/india-map.png'); showImg1('assets/images/destinations/chennai-grid-1.jpg'); showImg2('assets/images/destinations/delhi-grid-1.jpg'); showImg3('assets/images/destinations/kolkata-grid-1.jpg');" shape="poly" class="India" coords="150,256,154,288,160,334,168,377,187,405,188,425,204,463,211,479,233,498,255,480,262,462,275,464,270,437,277,431,280,407,277,382,287,371,295,359,312,357,312,348,330,337,347,324,362,306,380,301,398,281,389,277,404,266,419,270,418,243,415,235,417,226,407,215,421,206,411,197,415,185,436,191,438,204,476,203,484,212,469,223,458,233,471,242,473,231,481,236,484,258,495,255,495,241,495,229,512,227,517,208,524,194,526,184,536,171,559,172,555,160,562,154,546,144,547,131,525,132,511,132,506,140,486,152,471,162,476,176,447,177,437,180,424,170,421,157,406,155,407,179,397,183,374,179,349,167,326,166,290,150,275,138,287,112,259,98,246,71,253,71,264,69,259,58,252,48,260,36,243,30,243,19,225,17,214,34,203,34,178,30,171,38,179,54,188,68,198,77,185,88,184,96,168,116,152,137,139,156,124,157,117,154,101,175,109,181,112,195,119,200,121,215,110,225,87,221,78,230,94,247,117,240,108,252,90,254,114,282,125,283,138,277,143,270" />
                    </map>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12 pb-5">
                        <div class="selection">
                            <p>Subcontinent Route Map</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-1" src="{{asset('assets/images/destinations/kathmandu-grid-1.jpg')}}" />
                            </div>              
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-2" src="{{asset('assets/images/destinations/delhi-grid-2.jpg')}}" />
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
