@extends('header-footer')

@section('header-extension')
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" /> --}}
@endsection

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-3">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Latest News</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li>News </li>
                                <li>Latest News</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
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
                <div class="col-lg-12">
                    <div class="filter-wrap margin-bottom-30px">
                        <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                            <div>
                                <h3 class="title font-size-24">Latest News</h3>
                                
                            </div>
                        </div><!-- end filter-top -->
                        
                        <!-- end filter-bar -->
                    </div><!-- end filter-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-wrap margin-bottom-10px">
                        <div class="filter-top d-flex align-items-right justify-content-between pb-4">
                            <div>
                                {{ $news->links() }}
                            </div>
                        </div><!-- end filter-top -->

                        <!-- end filter-bar -->
                    </div><!-- end filter-wrap -->
                </div><!-- end col-lg-12 -->
            </div>
            <div class="row" style="align-items: center">
                
                <div class="col-lg-10 " >
                   

                    @foreach ($news as $item)
                        @if ($item->status == 0)
                            @continue
                        @endif
                        <div class="card-item News--card card-item-list">
                            <div class="card-img">
                                <a  class="d-block">
                                    <img src="{{ route('image.displayImage', $item->news_image) }}" alt="" title="">
                                    <!--<img src="{{ asset('admin/storage/News_Photos/'.$item->news_image) }}" alt="" title="">-->
                                    <span class="badge">{{ $item->news_category }}</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <img src="assets/images/logo/biman_red_logo_100x30.jpg" alt="" class="News-logo">

                                <h3 class="card-title" style="font-family: 'AdorshoLipi', sans-serif;"><a
                                    href="{{route('news-details',['id' => $item->id])}}">{{ $item->news_title }}</a></h3>
                                
                                <div class="card-rating">
                                    <span
                                        class="badge text-white">{{ \Carbon\Carbon::parse($item->created_at)->format('j F Y') }}</span>
                                </div>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    
                                    <a href="{{route('news-details',['id' => $item->id])}}" class="btn-text">Read details<i
                                            class="la la-angle-right"></i></a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    @endforeach


                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
            {{ $news->links() }}
        </div><!-- end container -->
    </section><!-- end card-area -->

@endsection


@section('page-specific-footer')
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> --}}

    <script>
        // $(document).ready(function() {
        //     $('#newsTable').DataTable();
        // } );
    </script>
@endsection
