
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

<section class="breadcrumb-area bread-bg-domestic">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="section-heading text-left">
                            <h2 class="sec__title-terms">Domestic Route</h2>
                            <p class="sec__desc-terms font-weight-regular pb-2">Dhaka, Barishal, Chattogram, Cox's Bazar, Jashore, Rajshahi, Sylhet, Saidpur.</p>
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
                                    <a class="nav-link active" id="Domestic-tab" href="{{route('destinations-domestic')}}">
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
            <div class="col-lg-5">
                <div class="bd-domestic-map">
                    <img id="map-image" src="{{asset('assets/images/map/bangladesh-map.png')}}" usemap="#Map" />

                    <map name="Map" id="Map"> 
                        <area title="Dhaka" href="#route" onclick="changeImg('assets/images/map/dhaka-map.png'); showImg1('assets/images/destinations/dhaka-grid-1.jpg'); showImg2('assets/images/destinations/dhaka-grid-2.jpg'); showImg3('assets/images/destinations/dhaka-grid-3.jpg'); showImg4('assets/images/destinations/dhaka-grid-4.jpg');" shape="poly" class="Dhaka" coords="255,371,266,371,262,375,267,380,269,387,278,396,286,399,282,404,285,411,272,410,264,411,260,419,272,424,272,433,281,437,282,430,287,433,289,429,293,418,303,423,303,430,309,429,310,421,315,425,316,418,311,412,323,409,317,393,318,385,314,383,310,387,306,384,302,384,302,374,291,374,296,369,291,365,287,370,287,367,280,371,267,364,262,367,258,366" />
                        <area title="Barishal" href="#route" onclick="changeImg('assets/images/map/barishal-map.png'); showImg1('assets/images/destinations/barishal-grid-1.jpg'); showImg2('assets/images/destinations/barishal-grid-2.jpg'); showImg3('assets/images/destinations/barishal-grid-3.jpg'); showImg4('assets/images/destinations/barishal-grid-4.jpg');" shape="poly" class="Barishal" coords="285,494,273,495,276,502,265,506,259,522,263,529,268,533,279,540,284,532,297,540,292,547,307,548,307,556,302,560,295,559,293,566,279,573,287,577,298,570,303,574,309,575,313,567,323,565,321,548,329,538,344,530,340,519,316,509,305,503,302,511,293,509,286,505" />
                        <area title="Chattogram" href="#route" onclick="changeImg('assets/images/map/chattogram-map.png'); showImg1('assets/images/destinations/chattogram-grid-1.jpg'); showImg2('assets/images/destinations/chattogram-grid-2.jpg'); showImg3('assets/images/destinations/chattogram-grid-3.jpg'); showImg4('assets/images/destinations/chattogram-grid-4.jpg');" shape="poly" class="Chattogram" coords="439,538,441,523,451,521,453,510,465,513,472,508,479,514,477,519,489,540,493,535,499,539,498,544,503,547,504,568,509,573,509,561,513,565,511,555,517,556,523,564,528,578,524,587,530,597,529,607,533,632,539,641,535,648,538,655,528,653,521,649,513,657,501,657,495,648,493,637,493,625,482,609,478,591,470,572,457,553" />
                        <area title="Cox's Bazar" href="#route" onclick="changeImg('assets/images/map/cox-map.png'); showImg1('assets/images/destinations/cox-grid-1.jpg'); showImg2('assets/images/destinations/cox-grid-2.jpg'); showImg3('assets/images/destinations/cox-grid-3.jpg'); showImg4('assets/images/destinations/cox-grid-4.jpg');" shape="poly" class="Cox's Bazar" coords="485,655,495,653,499,661,519,654,525,663,533,669,538,662,545,671,538,673,538,678,528,678,524,684,529,695,537,703,532,707,541,717,539,725,534,720,531,727,533,740,534,754,533,765,541,771,541,782,553,812,552,819,539,798,531,777,516,761,515,735,506,722,493,711,496,691,487,678,490,660" />
                        <area title="Jashore" href="#route" onclick="changeImg('assets/images/map/jashore-map.png'); showImg1('assets/images/destinations/jashore-grid-1.jpg'); showImg2('assets/images/destinations/jashore-grid-2.jpg'); showImg3('assets/images/destinations/jashore-grid-3.jpg'); showImg4('assets/images/destinations/jashore-grid-4.jpg');" shape="poly" class="Jashore" coords="120,475,124,468,119,464,129,467,135,467,127,461,131,458,136,460,141,456,141,463,146,463,147,469,158,466,157,458,163,460,163,454,169,460,176,466,182,467,186,473,186,479,187,486,183,492,189,491,190,497,197,499,201,503,200,509,201,511,195,512,190,503,186,505,184,511,177,515,178,520,178,529,172,527,166,528,158,532,150,527,147,521,149,516,145,514,137,517,131,512,130,520,121,517,114,513,115,504,121,503,115,495,118,490,124,486,134,481,127,475" />
                        <area title="Rajshahi" href="#route" onclick="changeImg('assets/images/map/rajshahi-map.png'); showImg1('assets/images/destinations/rajshahi-grid-1.jpg'); showImg2('assets/images/destinations/rajshahi-grid-2.jpg'); showImg3('assets/images/destinations/rajshahi-grid-3.jpg'); showImg4('assets/images/destinations/rajshahi-grid-4.jpg');" shape="poly" class="Rajshahi" coords="46,309,43,301,45,295,40,287,56,281,59,274,69,278,63,269,75,271,75,279,81,273,85,278,83,284,97,275,119,281,117,291,125,291,122,297,113,298,119,302,113,305,116,321,109,326,111,331,116,331,119,335,113,338,112,345,117,349,116,355,104,353,91,344,98,342,95,331,89,323,85,328,75,325,69,327,59,317" />
                        <area title="Sylhet" href="#route" onclick="changeImg('assets/images/map/sylhet-map.png'); showImg1('assets/images/destinations/sylhet-grid-1.jpg'); showImg2('assets/images/destinations/sylhet-grid-2.jpg'); showImg3('assets/images/destinations/sylhet-grid-3.jpg'); showImg4('assets/images/destinations/sylhet-grid-4.jpg');" shape="poly" class="Sylhet" coords="472,215,475,225,475,231,478,238,479,247,481,254,474,259,476,267,472,277,475,282,477,287,486,289,495,280,507,282,518,279,523,278,525,268,529,271,540,271,544,261,541,255,547,251,563,252,572,250,569,241,561,229,547,221,535,215,526,211,521,206,510,207,497,210,481,207" />
                        <area title="Saidpur" href="#route" onclick="changeImg('assets/images/map/saidpur-map.png'); showImg1('assets/images/destinations/saidpur-grid-1.jpg'); showImg2('assets/images/destinations/saidpur-grid-2.jpg'); showImg3('assets/images/destinations/saidpur-grid-3.jpg'); showImg4('assets/images/destinations/saidpur-grid-4.jpg');" shape="poly" class="Saidpur" coords="99,54,100,60,107,66,103,87,98,96,101,103,108,111,106,123,112,123,110,129,119,132,125,128,123,121,136,123,139,117,145,123,144,115,150,117,154,107,146,99,142,88,143,76,136,72,134,62,126,64,121,55,115,56,116,61,108,59,107,53" />
                    </map>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-12 pb-5">
                        <div class="selection">
                            <p>Domestic Route Map</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-1" src="{{asset('assets/images/destinations/dhaka-grid-1.jpg')}}" />
                            </div>              
                        </div>
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-2" src="{{asset('assets/images/destinations/sylhet-grid-1.jpg')}}" />
                            </div>              
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-3" src="{{asset('assets/images/destinations/barishal-grid-1.jpg')}}" />
                            </div>              
                        </div>
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-4" src="{{asset('assets/images/destinations/chattogram-grid-1.jpg')}}" />
                            </div>              
                        </div>
                    </div>
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
    function showImg4(image){
      var imghol = document.getElementById("show-image-4");
      imghol.src = image;
    }
</script>

@endsection
