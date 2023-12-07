@extends('header-footer')

@section('content')

<section class="breadcrumb-area bread-bg-9">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">News Details</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li>News</li>
                            <li>News Details</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card-item blog-card blog-card-layout-2 blog-single-card mb-5">
                    {{-- <div class="card-img before-none">
                        <img src="{{ route('image.displayImage', $news[0]->news_image) }}" alt="" title="">
                    </div> --}}
                    <h4 class="card-title font-size-24" style="font-family: 'AdorshoLipi', sans-serif;">{{$news[0]->news_title}}</h4>
                    <div class="card-rating">
                        <span
                            class="badge text-white">{{ \Carbon\Carbon::parse($news[0]->created_at)->format('j F Y') }}</span>
                    </div>
                    <div class="section-block"></div>
                    <h5 class="card-text" style="color:black ;text-align: justify; font-family: 'AdorshoLipi', sans-serif;  line-height:1cm; font-size: 1.2rem !important;">{!!$news[0]->news_description!!}</h5>
                    
                </div><!-- end card-item -->
                
                
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="card-item blog-card blog-card-layout-2 blog-single-card mb-5">
                    <div class="card-img before-none">
                        <img src="{{ route('image.displayImage', $news[0]->news_image) }}" alt="" title="">
                    </div>
                    
                </div><!-- end card-item -->
                
                
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->


@endsection