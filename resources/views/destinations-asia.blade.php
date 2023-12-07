
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

<section class="breadcrumb-area bread-bg-asia">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="section-heading text-left">
                            <h2 class="sec__title-terms">Asia</h2>
                            <p class="sec__desc-terms font-weight-regular pb-2">Bangkok, Guangzhou, Hong Kong, Kuala Lumpur, Singapore.</p>
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
                                    <a class="nav-link active" id="asia-tab"  href="{{route('destinations-asia')}}">
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
                <div class="asia-map">
                    <img id="map-image" src="{{asset('assets/images/map/asia-map.png')}}" usemap="#Map" />

                    <map name="Map" id="Map"> 
                        <area title="Bangkok" href="#route" onclick="changeImg('assets/images/map/bangkok-map.png'); showImg1('assets/images/destinations/bangkok-grid-1.jpg'); showImg2('assets/images/destinations/bangkok-grid-2.jpg'); showImg3('assets/images/destinations/bangkok-grid-3.jpg');" shape="poly" class="Bangkok" coords="294,396,327,383,340,392,337,397,350,404,349,413,343,433,356,433,363,423,375,430,386,421,401,427,411,434,414,443,412,453,427,465,423,478,420,487,396,487,382,493,368,504,376,517,372,528,359,518,346,517,349,499,337,503,331,526,327,539,320,569,322,576,333,589,336,601,346,613,352,614,369,628,360,633,350,633,333,619,324,609,310,593,303,591,311,556,319,547,325,524,319,515,317,501,306,488,299,478,306,469,310,454,304,446,293,431,286,413,292,408" />
                        <area title="Guangzhou" href="#route" onclick="changeImg('assets/images/map/guangzhou-map.png'); showImg1('assets/images/destinations/guangzhou-grid-1.jpg'); showImg2('assets/images/destinations/guangzhou-grid-2.jpg'); showImg3('assets/images/destinations/guangzhou-grid-3.jpg');" shape="poly" class="Guangzhou" coords="2,201,1,0,772,1,739,29,710,36,696,48,685,51,694,39,686,35,703,15,685,7,672,23,659,26,651,33,654,39,643,48,633,42,623,50,629,63,638,63,646,60,649,68,645,78,661,81,680,68,692,73,707,76,707,87,697,84,654,125,674,99,664,107,655,118,662,130,668,135,672,144,677,160,687,175,695,186,696,196,675,209,686,209,705,215,693,232,685,246,669,267,661,284,641,309,606,341,584,345,556,339,551,346,551,355,542,359,514,370,501,377,507,386,491,377,495,364,474,363,456,364,443,355,443,343,428,339,417,333,403,341,386,346,377,346,367,346,359,351,357,358,359,367,359,373,352,373,351,363,343,364,334,370,331,359,319,358,325,341,314,340,313,321,291,323,289,309,296,293,307,279,307,263,302,253,292,240,287,250,273,240,272,227,255,227,242,232,227,235,208,249,192,254,180,250,168,244,158,248,152,254,148,260,143,251,132,251,121,249,108,249,84,244,68,234,51,225,23,203,17,213" />
                        <area title="Hong Kong" href="#route" onclick="changeImg('assets/images/map/hongkong-map.png'); showImg1('assets/images/destinations/hongkong-grid-1.jpg'); showImg2('assets/images/destinations/hongkong-grid-2.jpg'); showImg3('assets/images/destinations/hongkong-grid-3.jpg');" shape="poly" class="Hong Kong" coords="554,352,559,339,573,341,575,356,570,364,561,361" />
                        <area title="Kuala Lumpur" href="#route" onclick="changeImg('assets/images/map/kualalumpur-map.png'); showImg1('assets/images/destinations/kualalumpur-grid-1.jpg'); showImg2('assets/images/destinations/kualalumpur-grid-2.jpg'); showImg3('assets/images/destinations/kualalumpur-grid-3.jpg');" shape="poly" class="Kuala Lumpur" coords="332,622,342,662,351,688,378,699,398,695,387,672,392,657,374,632,363,635,349,635" />
                        <area title="Kuala Lumpur" href="#route" onclick="changeImg('assets/images/map/kualalumpur-map.png'); showImg1('assets/images/destinations/kualalumpur-grid-1.jpg'); showImg2('assets/images/destinations/kualalumpur-grid-2.jpg'); showImg3('assets/images/destinations/kualalumpur-grid-3.jpg');" shape="poly" class="Kuala Lumpur" coords="495,699,515,705,520,681,546,676,562,655,571,661,577,650,581,655,585,648,586,637,595,632,599,624,612,610,621,618,627,625,629,636,656,638,646,645,636,642,631,649,641,656,625,660,608,655,593,657,595,670,586,683,574,697,567,707,556,707,537,703,530,714,515,714,508,715,496,706" />
                        <area title="Singapore" href="#route" onclick="changeImg('assets/images/map/singapore-map.png'); showImg1('assets/images/destinations/singapore-grid-1.jpg'); showImg2('assets/images/destinations/singapore-grid-2.jpg'); showImg3('assets/images/destinations/singapore-grid-3.jpg');" shape="poly" class="Singapore" coords="382,703,394,697,404,707,400,718,382,716" />
                    </map>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-12 pb-5">
                        <div class="selection">
                            <p>Asia Route Map</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-1" src="{{asset('assets/images/destinations/bangkok-grid-1.jpg')}}" />
                            </div>              
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img">
                                <img id="show-image-2" src="{{asset('assets/images/destinations/guangzhou-grid-1.jpg')}}" />
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
</script>

@endsection
