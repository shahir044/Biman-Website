@extends('admin.main')

@section('page-specific-css')

@endsection

@section('main-content')

    <!-- Hero Content -->
    <div class="bg-primary-dark">
        <div class="content content-full overflow-hidden">
            <div class="mt-7 mb-5 text-center">
                <h1 class="h2 text-white mb-2 invisible" data-toggle="appear" data-class="animated fadeInDown">Passenger Feedbacks are the only way to know about the performance of your system</h1>
                <h2 class="h4 font-w400 text-white-75 invisible" data-toggle="appear" data-class="animated fadeInDown">Whoever reading this please solve any issue you can.</h2>
            </div>
        </div>
    </div>
    <!-- END Hero Content -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <div class="row">
            <div class="col-xl-10">
                <!-- Story -->
                @foreach($passenger_feedback as $feedback)
                    <div class="block block-rounded">
                        <div class="block-content">
                            <div class="row items-push">

                                <div class="col-md-12 col-lg-12">
                                    <h4 class="mb-3">
                                        <a href="be_pages_generic_profile.html">
                                            {{$feedback->id}} · {{$feedback->name}}
                                        </a> on {{Carbon\Carbon::parse($feedback->created_at)->format('d-M-Y')}} · {{$feedback->suggestionType}}
                                    </h4>
                                    <div class="mb-3">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>{{$feedback->from}}-{{$feedback->to}}
                                    </div>
                                    <div class="mb-3">
                                        <i class="fa fa-envelope" aria-hidden="true"></i> {{$feedback->email}} <br/> <i class="fa fa-address-book" aria-hidden="true"></i> {{$feedback->contact}}
                                    </div>
                                    <h6 class="mb-1">
                                        <a class="text-primary-dark" href="be_pages_blog_story.html">{{$feedback->subject}}</a>
                                    </h6>
                                    <p class="font-size-sm">
                                        {{$feedback->description}}
                                    </p>
                                    <a class="btn btn-sm btn-light" href="be_pages_blog_story.html">Continue Reading..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- END Story -->










                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination push">
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END Pagination -->
            </div>
            <div class="col-xl-2">
           
            </div>
        </div>
    </div>
    <!-- END Page Content -->

    <!-- Get Started -->
    <div class="bg-body-dark">
        <div class="content content-full">
            <div class="my-5 text-center">
                <h3 class="h4 mb-4 invisible" data-toggle="appear">Do you like our stories? Sign up today and get access to over <strong>10.000</strong> travel stories!</h3>
                <a class="btn btn-rounded btn-success px-4 py-2 invisible" data-toggle="appear" data-class="animated bounceIn" href="javascript:void(0)">Get Started Today</a>
            </div>
        </div>
    </div>
    <!-- END Get Started -->

@endsection

@section('page-specific-javascript')


@endsection
