
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

<section class="breadcrumb-area bread-bg-middle-east">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="section-heading text-left">
                            <h2 class="sec__title-terms">Middle East</h2>
                            <p class="sec__desc-terms font-weight-regular pb-2">Abu Dhabi, Dammam, Doha, Dubai, Jeddah, Kuwait City, Medina, Muscat, Riyadh, Sharjah.</p>
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
                                    <a class="nav-link active" id="middle-east-tab" href="{{route('destinations-middle-east')}}">
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
            <div class="col-lg-7">
                <div class="middle-east-map">
                    <img id="map-image" src="{{asset('assets/images/map/middle-east-map.png')}}" usemap="#Map" />

                    <map name="Map" id="Map"> 
                        <area title="Abu Dhabi" href="#route" onclick="changeImg('assets/images/map/abudhabi-map.png'); showImg1('assets/images/destinations/abudhabi-grid-1.jpg'); showImg2('assets/images/destinations/abudhabi-grid-2.jpg'); showImg3('assets/images/destinations/abudhabi-grid-3.jpg');" shape="poly" class="Abu Dhabi" coords="614,648,613,661,709,779,933,818,952,804,953,770,986,701,983,684,975,676,1006,673,1027,666,1022,649,1005,653,1009,633,1010,606,997,605,981,614,948,614,932,575,900,601,904,607,876,645,858,652,830,667,795,672,788,660,771,667,760,656,722,662,709,653,678,678,659,679,643,678,636,671,632,651,620,655" />
                        <area title="Dammam" href="#route" onclick="changeImg('assets/images/map/dammam-map.png'); showImg1('assets/images/destinations/dammam-grid-1.jpg'); showImg2('assets/images/destinations/dammam-grid-2.jpg'); showImg3('assets/images/destinations/dammam-grid-3.jpg');" shape="poly" class="Dammam" coords="245,549,234,529,248,518,258,528,266,515,262,508,303,510,309,525,324,524,353,566,365,572,365,586,386,623,422,666,479,673,491,689,475,739,406,767,407,755,303,755,320,715,309,679,315,625,304,580,270,568" />
                        <area title="Doha" href="#route" onclick="changeImg('assets/images/map/doha-map.png'); showImg1('assets/images/destinations/doha-grid-1.jpg'); showImg2('assets/images/destinations/doha-grid-2.jpg'); showImg3('assets/images/destinations/doha-grid-3.jpg');" shape="poly" class="Doha" coords="291,140,299,138,304,147,304,155,305,164,302,170,294,173,285,165,286,151" />
                        <area title="Dubai" href="#route" onclick="changeImg('assets/images/map/dubai-map.png'); showImg1('assets/images/destinations/dubai-grid-1.jpg'); showImg2('assets/images/destinations/dubai-grid-2.jpg'); showImg3('assets/images/destinations/dubai-grid-3.jpg');" shape="poly" class="Dubai" coords="935,575,964,540,988,553,991,568,984,575,993,581,995,603,979,614,945,613" />
                        <area title="Jeddah" href="#route" onclick="changeImg('assets/images/map/jeddah-map.png'); showImg1('assets/images/destinations/jeddah-grid-1.jpg'); showImg2('assets/images/destinations/jeddah-grid-2.jpg'); showImg3('assets/images/destinations/jeddah-grid-3.jpg');" shape="poly" class="Jeddah" coords="100,650,111,678,110,703,122,726,148,745,160,773,169,771,164,763,172,758,176,762,179,755,173,745,168,748,161,752,151,734,162,715,180,722,182,730,190,730,205,718,221,721,216,696,208,675,198,662,184,646,171,642,167,649,166,656,150,669,131,667,127,658,120,661,108,647" />
                        <area title="Kuwait City" href="#route" onclick="changeImg('assets/images/map/kuwait-map.png'); showImg1('assets/images/destinations/kuwait-grid-1.jpg'); showImg2('assets/images/destinations/kuwait-grid-2.jpg'); showImg3('assets/images/destinations/kuwait-grid-3.jpg');" shape="poly" class="Kuwait City" coords="208,84,216,73,220,63,237,63,250,70,239,77,243,82,249,96,232,94,225,84" />
                        <area title="Medina" href="#route" onclick="changeImg('assets/images/map/medina-map.png'); showImg1('assets/images/destinations/medina-grid-1.jpg'); showImg2('assets/images/destinations/medina-grid-2.jpg'); showImg3('assets/images/destinations/medina-grid-3.jpg');" shape="poly" class="Medina" coords="55,553,71,586,87,617,73,619,74,628,94,638,102,651,107,648,118,661,126,657,131,661,133,667,145,670,157,659,166,655,167,644,180,637,183,615,172,605,165,605,151,595,143,599,139,605,130,598,129,578,123,567,110,565,99,567,86,556,80,548,69,548" />
                        <area title="Muscat" href="#route" onclick="changeImg('assets/images/map/muscat-map.png'); showImg1('assets/images/destinations/muscat-grid-1.jpg'); showImg2('assets/images/destinations/muscat-grid-2.jpg'); showImg3('assets/images/destinations/muscat-grid-3.jpg');" shape="poly" class="Muscat" coords="307,273,359,254,372,220,365,206,381,163,391,165,402,182,430,188,443,205,450,210,426,253,418,247,411,264,414,276,395,282,387,297,373,298,365,301,370,306,360,313,348,311,331,316" />
                        <area title="Riyadh" href="#route" onclick="changeImg('assets/images/map/riyadh-map.png'); showImg1('assets/images/destinations/riyadh-grid-1.jpg'); showImg2('assets/images/destinations/riyadh-grid-2.jpg'); showImg3('assets/images/destinations/riyadh-grid-3.jpg');" shape="poly" class="Riyadh" coords="171,639,179,636,183,617,189,617,192,622,206,620,202,611,242,598,232,566,241,566,247,551,271,572,304,580,310,626,309,688,316,716,302,753,251,757,228,752,225,722,216,695,206,672,185,646" />
                        <area title="Sharjah" href="#route" onclick="changeImg('assets/images/map/sharjah-map.png'); showImg1('assets/images/destinations/sharjah-grid-1.jpg'); showImg2('assets/images/destinations/sharjah-grid-2.jpg'); showImg3('assets/images/destinations/sharjah-grid-3.jpg');" shape="poly" class="Sharjah" coords="965,544,978,525,1000,529,1007,543,1019,541,1028,543,1023,551,1019,558,1023,577,1010,586,1010,608,996,604,992,580,987,575,992,568,989,555" />
                        <area title="United Arab Emirates" href="#route" onclick="changeImg('assets/images/map/uae-map.png'); showImg1('assets/images/destinations/abudhabi-grid-1.jpg'); showImg2('assets/images/destinations/dubai-grid-1.jpg'); showImg3('assets/images/destinations/sharjah-grid-1.jpg');" shape="poly" class="United Arab Emirates" coords="299,176,300,182,317,202,367,207,380,163,390,163,390,133,371,148,359,164,345,177,323,173,313,178" />
                        <area title="Saudi Arabia" href="#route" onclick="changeImg('assets/images/map/saudi-map.png'); showImg1('assets/images/destinations/medina-grid-3.jpg'); showImg2('assets/images/destinations/riyadh-grid-1.jpg'); showImg3('assets/images/destinations/jeddah-grid-1.jpg');" shape="poly" class="Saudi Arabia" coords="8,76,1,103,10,103,50,176,66,181,79,211,77,231,92,250,145,321,156,301,215,309,225,312,243,289,260,278,310,278,360,254,374,217,365,208,318,201,298,176,279,154,271,144,273,134,282,129,252,110,248,97,232,97,225,82,176,78,101,28,81,25,44,37,64,55,54,67,40,63,25,81" />
                    
                    </map>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-8 pb-5">
                        <div class="selection">
                            <p>Middle East Route Map</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-1" src="{{asset('assets/images/destinations/abudhabi-grid-1.jpg')}}" />
                            </div>              
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-2" src="{{asset('assets/images/destinations/medina-grid-2.jpg')}}" />
                            </div>              
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-3" src="{{asset('assets/images/destinations/doha-grid-2.jpg')}}" />
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
