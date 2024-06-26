@extends('header-footer')

@section('header-extension')
    {!! htmlScriptTagJsApi() !!}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <style>
        h1, h2, h3, h4, h5, h6, p, span, li{
            font-family: 'SolaimanLipi','Inter';
        }
    </style>
@endsection

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-hajj">
        <div class="breadcrumb-wrap">
            <div class="container hajj-container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content" style="padding: 40px;">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">হজ - ২০২২ </h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="{{ route('index') }}">হোম</a></li>
                                <li>হজ</li>
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

    <audio controls autoplay hidden>
        <source src="/assets/audio/Labbaik_allahuma.mp3" type="audio/mpeg">
    </audio>
    
    <!-- ================================
                            START CONTACT AREA
                        ================================= -->
    <section class="contact-area section--padding custom-padding">
        <div class="container hajj-container">
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="flight-filter-tab">
                        <div class="section-tab section-tab-3">
                            <ul class="nav nav-tabs justify-content-around" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="biman-flights-tab" data-toggle="tab"
                                        href="#biman-flights" role="tab" aria-controls="biman-flights"
                                        aria-selected="false">
                                        হজ ফ্লাইট সূচী
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hajj-regulation-tab" data-toggle="tab"
                                        href="#hajj-regulation" role="tab" aria-controls="hajj-regulation"
                                        aria-selected="false">
                                        হজের নিয়মকানুন
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="important-links-tab" data-toggle="tab"
                                        href="#important-links" role="tab" aria-controls="important-links"
                                        aria-selected="false">
                                        গুরুত্বপূর্ণ লিংকসমূহ
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                    </div><!-- end flight-filter-tab -->
                    <div class="popular-round-trip-wrap padding-top-40px">
                        <div class="tab-content" id="contactusTab">
                            <div class="tab-pane fade show active" id="biman-flights" role="tabpanel"
                                aria-labelledby="biman-flights-tab">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-box">
                                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                                <li class="nav-item" style="width: 50%;">
                                                    <a class="nav-link custom-link active"
                                                        id="pre-hajj-departure-flights-tab" data-toggle="tab"
                                                        href="#pre-hajj-departure-flights" role="tab"
                                                        aria-selected="true">হজ পূর্ববর্তী ফ্লাইট সূচী</a>
                                                </li>
                                                <li class="nav-item" style="width: 50%;">
                                                    <a class="nav-link custom-link" id="post-hajj-arrival-flights-tab"
                                                        data-toggle="tab" href="#post-hajj-arrival-flights" role="tab"
                                                        aria-selected="false">হজ পরবর্তি ফ্লাইট সূচী</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content tab-bordered" id="myTab3Content">
                                                <div class="tab-pane fade show active" id="pre-hajj-departure-flights"
                                                    role="tabpanel" aria-labelledby="pre-hajj-departure-flights-tab">
                                                    <div class="form-content multi-person-wrap">
                                                        <div class="contact-form-action">
                                                            <div class="table-form table-responsive pb-4">
                                                                <iframe src="{{asset('assets/pdf/hajj/BIMAN-pre-hajj-flight-schedule.pdf')}}" width="100%" height="700px">
                                                                </iframe>
                                                            </div>
                                                        </div><!-- end contact-form-action -->
                                                    </div><!-- end form-content -->
                                                </div>
                                                <div class="tab-pane fade " id="post-hajj-arrival-flights"
                                                    role="tabpanel" aria-labelledby="post-hajj-arrival-flights-tab">
                                                    <div class="form-content">
                                                        <div class="contact-form-action">
                                                            <!-- post hajj schedule table will be here -->
                                                            <div class="table-form table-responsive pb-4">
                                                                <iframe src="{{asset('assets/pdf/hajj/BIMAN-post-hajj-flight-schedule-2022.pdf')}}" width="100%" height="700px">
                                                                </iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end form-box -->
                                    </div><!-- end col-lg-8 -->
                                </div><!-- end row -->
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card" style="margin-top: 2rem;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-7">
                                                        <img src="{{ asset('assets/images/hajj/HAJJ_INS_22.png') }}" alt="instruction img" style="width: 100%;">
                                                        {{-- <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.0899460333135!2d90.40947571449767!3d23.85093958453999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7fa508dfd75%3A0xc8732a4145c1dcce!2zSGFqaiBDYW1wIOCmueCmnOCnjeCmrCDgppXgp43gpq_gpq7gp43gpqo!5e0!3m2!1sen!2sbd!4v1654056841393!5m2!1sen!2sbd"
                                                            style="border:0; width:100%;height:40vh;" allowfullscreen=""
                                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                                        </iframe> --}}
                                                    </div>
                                                    <div class="col-12 col-md-5">
                                                        
                                                        {{-- hajj instruction --}}
                                                        <div class="card">
                                                            <div class="card-header custom-header">
                                                                হজ ফ্লাইটে সামনের কেবিনের আসন
                                                            </div>
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li class="row criteria-list">
                                                                        <span
                                                                            class="col-12 text-justify" style="font-size: .75rem;">
                                                                            <p>
                                                                            বিমান বাংলাদেশ এয়ারলাইন্স-এর বিশেষ হজ ফ্লাইটসমূহের সম্মুখ কেবিনের সীমিত সংখ্যক আসন প্রাপ্তির বিষয়ে সম্মানিত হজযাত্রীদের মধ্যে আগ্রহ ও চাহিদা পরিলক্ষিত হওয়ায় বিমান বাংলাদেশ এয়ারলাইন্স আগে আসলে আগে পাবেন ভিত্তিতে সম্মানিত হজযাত্রীগণকে সম্মুখ কেবিনের আসন পূর্ব থেকে নিশ্চিতকরার অনুরোধ জানাচ্ছে। 
সম্মুখ কেবিনের আসন নিশ্চিকতকরণের জন্য বিমান নিম্নলিখিত চার্জ/ফি ধার্য করেছে। বাংলাদেশ থেকে শুধু যাওয়ার ক্ষেত্রে জনপ্রতি ১৫০.০০ ইউএসডি অথবা সমপরিমাণ টাকা এবং যাওয়া ও আসার ক্ষেত্রে (একসঙ্গে) ২৫০.০০ ইউএসডি অথবা সমপরিমাণ টাকা। সৌদি আরব থেকে শুধু আসার জন্য ৭০০.০০ সৌদি রিয়াল।     </p>
<p style="padding-top:.5rem;padding-bottom:.5rem;">শর্তসমূহ:
	সম্মানিত যাত্রীগণ শুধু সম্মুখ কেবিনে আসন পাবেন। সেবার ক্ষেত্রে কোন পার্থক্য থাকবে না।   
	এই সুযোগ শুধু বিশেষ হজ ফ্লাইটসমূহের জন্য প্রযোজ্য। </p>
বলাকাস্থ বিমানের প্রধান কার্যালয়ের সেলস অফিস, মতিঝিল ডিস্ট্রিক্ট সেলস অফিস, আশকোনা হজ ক্যাম্পের বিমান সেলস অফিস, বিমান কলসেন্টার এবং সৌদি আরবের জেদ্দা, মদিনা ও মক্কায় অবস্থিত বিমান অফিস থেকে এই সেবা গ্রহণ করা যাবে।     

                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header custom-header">
                                                                Hajj Office
                                                            </div>
                                                            <div class="card-body">
                                                                <ul id="hajj">
                                                                    <li class="row criteria-list">
                                                                        <span
                                                                            class="col-sm-7 col-md-7 criteria-head">Hotline,
                                                                            Hajj Office
                                                                        </span>
                                                                        <span class="col-sm-5 col-md-5 criteria-body">
                                                                            <ul>
                                                                                <li><i
                                                                                        class="la la-phone mr-1 ml-2"></i>+88-09-602666707
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                                                    </li>
                                                                    <li class="row criteria-list">
                                                                        <span
                                                                            class="col-sm-7 col-md-7 criteria-head">Director,
                                                                            Hajj Office, Dhaka
                                                                        </span>
                                                                        <span class="col-sm-5 col-md-5 criteria-body">
                                                                            <ul>
                                                                                <li><i
                                                                                        class="la la-phone mr-1 ml-2"></i>+88-02-48958462
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                                                    </li>
                                                                    <li class="row criteria-list">
                                                                        <span
                                                                            class="col-sm-7 col-md-7 criteria-head">Assistant
                                                                            Hajj Officer
                                                                        </span>
                                                                        <span class="col-sm-5 col-md-5 criteria-body">
                                                                            <ul>
                                                                                <li><i
                                                                                        class="la la-phone mr-1 ml-2"></i>+88-02-48962391
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                                                    </li>
                                                                    <li class="row criteria-list">
                                                                        <span
                                                                            class="col-sm-7 col-md-7 criteria-head">Health
                                                                            Section, Hajj office
                                                                        </span>
                                                                        <span class="col-sm-5 col-md-5 criteria-body">
                                                                            <ul>
                                                                                <li><i
                                                                                        class="la la-phone mr-1 ml-2"></i>+88-02-7912132
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                                                    </li>
                                                                    <li class="row">
                                                                        <span class="col-sm-7 col-md-7 criteria-head">হজ ক্যাম্পের বিমান সেলস অফিস
                                                                            <iframe
                                                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.0899460333135!2d90.40947571449767!3d23.85093958453999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7fa508dfd75%3A0xc8732a4145c1dcce!2zSGFqaiBDYW1wIOCmueCmnOCnjeCmrCDgppXgp43gpq_gpq7gp43gpqo!5e0!3m2!1sen!2sbd!4v1654056841393!5m2!1sen!2sbd"
                                                                                style="border:0; width:100%;height:20vh;padding-top:1rem;" allowfullscreen=""
                                                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                                                            </iframe>
                                                                        </span>
                                                                        <span class="col-sm-5 col-md-5 criteria-body">
                                                                            <ul>
                                                                                <li><i class="la la-phone mr-1 ml-2"></i>+88-02-48963715
                                                                                </li>
                                                                                <li><i class="la la-phone mr-1 ml-2"></i>+88-02-48963725
                                                                                </li>
                                                                                <li><i class="la la-mobile-phone mr-1 ml-2"></i>+88-01777760370
                                                                                </li>
                                                                                <li><i class="la la-mobile-phone mr-1 ml-2"></i>+88-01777715740
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="important-links" role="tabpanel"
                                aria-labelledby="important-links-tab">
                                <div class="row">
                                    <div class="col-12 with-border">

                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <p><span class="img-vertical-helper"></span><a
                                                                href="https://hajj.gov.bd">
                                                                <img src="{{ asset('assets/images/hajj/govt-hajj-portal.png') }}"
                                                                    class="hajj-image"></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-12 col-md-6 pt-2">
                                                        <p><i class="la la-map-marked mr-1 ml-2"></i>
                                                            <a href="https://goo.gl/maps/MhWqJeTG4VppmdMW9">
                                                                হজ ক্যাম্প, ঢাকা ১২৩০, বাংলাদেশ</a>
                                                        </p>
                                                        <p><i class="la la-link mr-1 ml-2"></i> <a
                                                                href="https://hajj.gov.bd">হজ ম্যানেজমেন্ট
                                                                পোর্টাল(www.hajj.gov.bd)</a>
                                                        </p>
                                                        <p><i class="la la-phone mr-1 ml-2"></i>+৮৮-০৯-৬০২৬৬৬৭০৭</p>
                                                        <p><i class="la la-tty mr-1 ml-2"></i><a
                                                                href="https://hajj.gov.bd/contact-us/">অন্যান্য যোগাযোগ
                                                                নাম্বারসমূহ</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <p><span class="img-vertical-helper"></span><a
                                                                href="http://www.mora.gov.bd/">
                                                                <img src="{{ asset('assets/images/hajj/mora2.jpg') }}"
                                                                    class="hajj-image"></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-12 col-md-6 pt-2">
                                                        <p><i class="la la-map-marked mr-1 ml-2"></i>
                                                            <a href="https://goo.gl/maps/DsHeDcTssz6cuEyt5">
                                                                বাংলাদেশ সচিবালয়, ভবন নং 6</a>
                                                        </p>
                                                        <p><i class="la la-link mr-1 ml-2"></i> <a
                                                                href="http://www.mora.gov.bd/">ধর্ম বিষয়ক
                                                                মন্ত্রণালয়(www.mora.gov.bd)</a>
                                                        </p>
                                                        <p><i class="la la-phone mr-1 ml-2"></i>+৮৮-০২-৯৫১৪৫৩৩</p>
                                                        <p><i class="la la-tty mr-1 ml-2"></i><a
                                                                href="http://www.mora.gov.bd/site/view/officer_list_category/%E0%A6%AE%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%80%E0%A6%B0%20%E0%A6%A6%E0%A6%AA%E0%A7%8D%E0%A6%A4%E0%A6%B0/%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%B0%E0%A6%A4-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%97%E0%A6%A3">অন্যান্য
                                                                যোগাযোগ
                                                                নাম্বারসমূহ</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <p><span class="img-vertical-helper"></span>
                                                            <a href="http://haabbd.com/">
                                                                <div class="hajj-image">
                                                                    <img src="{{ asset('assets/images/hajj/haab.png') }}"
                                                                        style="width: 25%">
                                                                    <img src="{{ asset('assets/images/hajj/haab2.png') }}"
                                                                        style="width: 72%">
                                                                </div>
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <p><i class="la la-map-marked mr-1 ml-2"></i>
                                                            <a href="https://goo.gl/maps/6RyH4YxZq3TZS6Wu5">
                                                                সাত্তারা সেন্টার, ৩০/এ, নয়াপল্টন, ভিআইপি রোড, ঢাকা-১০০০</a>
                                                        </p>
                                                        <p><i class="la la-link mr-1 ml-2"></i> <a
                                                                href="http://haabbd.com/">হজ এজেন্সীজ এসোসিয়েশন অব
                                                                বাংলাদেশ(www.haabbd.com)</a>
                                                        </p>
                                                        <p><i class="la la-phone mr-1 ml-2"></i>+৮৮-০২-৫৮৩১৭০৩০</p>
                                                        <p><i class="la la-tty mr-1 ml-2"></i><a
                                                                href="http://haabbd.com/site/contact">অন্যান্য
                                                                যোগাযোগ
                                                                নাম্বারসমূহ</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="card mt-3 mb-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <p><span class="img-vertical-helper"></span><a
                                                                href="https://www.haj.gov.sa">
                                                                <img src="{{ asset('assets/images/hajj/govt_hajj_ksa.jpg') }}"
                                                                    class="hajj-image"></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <p><i class="la la-map-marked mr-1 ml-2"></i>
                                                            <a href="https://goo.gl/maps/j9vHhxrtdTGHnzyZ9">
                                                                মক্কা-জেদ্দা হাইওয়ে, আল হামরা উম্ম আল জুদ, মক্কা-২৪৩২১</a>
                                                        </p>
                                                        <p><i class="la la-link mr-1 ml-2"></i> <a
                                                                href="https://www.haj.gov.sa">হজ ও ওমরা মন্ত্রণালয়, সৌদি
                                                                আরব(www.haj.gov.sa)</a>
                                                        </p>
                                                        <p><i class="la la-phone mr-1 ml-2"></i>+966920002814</p>
                                                        <p><i class="la la-tty mr-1 ml-2"></i><a
                                                                href="https://www.haj.gov.sa/en/Home/Contact#">অন্যান্য
                                                                যোগাযোগ
                                                                নাম্বারসমূহ</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="hajj-regulation" role="tabpanel"
                                aria-labelledby="hajj-regulation-tab">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="accordion accordion-item padding-top-30px" id="hajjRegulation">

                                            <!-- CARD 0 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading0">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse0" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse0">
                                                            <h5 class="ml-3">হজ ও ওমরাহর করনীয়</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse0" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading0" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <h4>১ম দিন ৮ই জিলহজ্জ</h4>
                                                                        <p>ইহরাম অবস্থায় (ফরজ) মক্কা থেকেহজের নিয়্যাতে
                                                                            মিনায় রওয়ানা হোন।</p>
                                                                        <p class="padding-top-10px">এ দিনের কাজ দু’টি</p>
                                                                        <p>(১) ইহরাম (ফরজ)</p>
                                                                        <p>(২) ৫ ওয়াক্ত নামাজ মিনায় আদায় করা (সুন্নাত)।</p>
                                                                        <p class="padding-top-10px">যোহর, আছর, মাগরিব, এশা
                                                                            ও ৯ তারিখ ফজর সর্বমোট ৫ ওয়াক্ত</p>
                                                                    </div>
                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>২য় দিন ৯ই জিলহজ্জ</h4>
                                                                        <p>এ দিনের কাজ দু’টি</p>
                                                                        <p>(১) আরাফাতে অবস্থান (ফরজ)।</p>
                                                                        <p>(২) অকুফে মুযদালিফায় (ওয়াজিব)।</p>
                                                                        <h5 class="padding-top-20px">আরাফাতে অবস্থান (ফরজ)
                                                                        </h5>
                                                                        <p>– ফজরের নামাজ মিনায় পড়ে আরাফাতের ময়দানের দিকে
                                                                            রওয়ানা হোন।</p>
                                                                        <p>– আরাফাতে সূর্য হেলার পর অর্থাৎ ১২টার পর থেকে
                                                                            সূর্যাস্ত পর্যন্ত অবস্থান করাহজের
                                                                            গুরুত্বপূর্ণ ফরজ।</p>
                                                                        <p>– ওয়াক্ত মত তাবুতে (মসজিদে নামেরায় না গেলে) বা
                                                                            আরাফার ময়দানে যে কোন স্থানে জোহরের সময় জোহর
                                                                            নামাজ আদায় করুন।</p>
                                                                        <p>– আসরের নামাজ আসরের সময় আদায় করুন, নির্দিষ্ট সময়
                                                                            বা আগে পরে, পৃথক পৃথক ভাবে।</p>
                                                                        <p>– উল্লেখ্য: ‘মসজিদে নামেরায়’ জোহর ও আসরের জামাত
                                                                            এক আযান দুই ইকামাতে একত্রে আদায় করলে একত্রে দুই
                                                                            ওয়াক্ত আদায় করতে হয়, ওটার নাম ‘জমে তাক্বদীম’।
                                                                            কিন্তু তাবুতে বা অন্য কোন স্থানে একত্রে নয়।
                                                                            ভিন্ন সময় ভিন্ন ভাবে ওয়াক্ত মত আদায় করতে হবে।)
                                                                        </p>
                                                                        <h5 class="padding-top-20px">অকুফে মুযদালিফায়
                                                                            (ওয়াজিব)</h5>
                                                                        <p>– সূর্যাস্তের পর সাথে সাথে মাগরিব না পড়ে
                                                                            মুযদালিফায় রওয়ানা হোন।</p>
                                                                        <p>– মুযদালিফায় মাগরিব ও এশার নামাজ এক আযান দুই
                                                                            এক্বামাতে একত্রে আদায় করুন। এটা ওয়াজিব এটার নাম
                                                                            ‘জামে তাখীর জামাতে পড়া উত্তম।</p>
                                                                        <p class="padding-top-10px">মুযদালিফায় অবস্থান
                                                                            (ওয়াজিব)</p>
                                                                        <p>মুযদালিফায় থাকাকালীন পাহাড়ে অথবা তার পাদদেশে যে
                                                                            কোন ঘাস দুবলা থেকে খুঁজে খুঁজে পাথর মারার জন্য
                                                                            ৭২টি (চানাবুটের ন্যায় কঙ্কর) ছোট ছোট পাথর সংগ্রহ
                                                                            করে ইহরামের কাপড়ে বেঁধে নিন।</p>
                                                                        <p class="padding-top-10px">১০/১১/১২ তিন দিনে (৪৯টি
                                                                            পাথর) তিন শয়তানকে মারতে হবে।</p>
                                                                        <p>– ১ম দিন ৭টি</p>
                                                                        <p>– ২য় দিন ২১টি</p>
                                                                        <p>– ৩য় দিন ২১টি</p>
                                                                        <p class="padding-top-10px">(সর্বমোট তিন দিনে
                                                                            ৭+২১+২১=৪৯টি )। তবে মিসিং হতে পারে বলে বেশী (৭২)
                                                                            নেওয়া সুন্নাত।</p>
                                                                    </div>
                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>৩য় দিন ১০ই জিলহজ্জ</h4>
                                                                        <p>এ দিনের মোট কাজ ৪টি</p>
                                                                        <p>(১) বড় শয়তানকে পাথর মারা।</p>
                                                                        <p>(২) কুরবানী।</p>
                                                                        <p>(৩) মাথা মুন্ডানো।</p>
                                                                        <p>(৪) তাওয়াফে যিয়ারাত করা।</p>
                                                                        <p class="padding-top-10px">– মুযদালিফায় ফজরের
                                                                            নামাজ পড়ে সূর্য উদয়ের আগ পর্যন্ত অবস্থান করুন
                                                                            (ওয়াজিব)।</p>
                                                                        <p>– মিনায় পৌছে বড় শয়তানকে ৭টি পাথর সূর্য হেলার আগে
                                                                            (১২টার পূর্বেই) মারুন। (সুন্নাত)।</p>
                                                                        <p>– তারপর তামাত্তু ও কি্বরান হজকারীগণ কুরবানী
                                                                            করুন (ওয়াজিব)।</p>
                                                                        <p>– এরপর ইহরাম খুলে হালাল হয়ে স্বাভাবিক পোষাক
                                                                            পরিধান করুন। কিন্তু কোরবানী পূর্বে নয়। (তবে
                                                                            ইফরাদ হজকারী কুরবানী না করলেও চলবে)।</p>
                                                                        <p>– চুল ছাড়া বা মুন্ডানোর পর মক্কায় গিয়ে (সম্ভব হলে
                                                                            উত্তম) আজই তাওয়াফে যিয়ারত করুন। আজ করা
                                                                            সর্বোত্তম। (এটা ফরজ)।</p>
                                                                        <p>– তাওয়াফ শেষে মিনায় এসে রাত্রি যাপন করুন সুন্নাত।
                                                                        </p>
                                                                    </div>
                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>৪র্থ দিন ১১ই জিলহজ্জ</h4>
                                                                        <p>– ১০ তারিখে কুরবানী, চুল ছাটা ও তাওয়াফে যিয়ারত না
                                                                            করে থাকলে আজ করুন।</p>
                                                                        <p>– সূর্য হেলার পর থেকে (১২টার পর) মিনায় তিন
                                                                            শয়তানকে সূর্যাস্তের পূর্বে (প্রথম ছোট, তারপর মেজ
                                                                            অতঃপর বড়) ৭+৭+৭=২১টি পাথর মারুন (ওয়াজিব)।</p>
                                                                        <p>– মিনায় রাত্রি যাপন করুন (সুন্নাত)।</p>
                                                                    </div>
                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>৫ম দিন ১২ই জিলহজ্জ</h4>
                                                                        <p>– তাওয়াফে যিয়ারত ১০/১১ তারিখে না করে থাকলে আজ
                                                                            সূর্যাস্তের পূর্বে অবশ্যই করুন।</p>
                                                                        <p>– মিনায় সূর্য হেলার পর থেকে (সুন্নাত সময় হল)
                                                                            সূর্যাস্তের পূর্বে ৭+৭+৭=২১টি পাথর (ছোট, মেজ ও
                                                                            বড় ) শয়তানকে মেরে সূর্যাস্তের পূর্বে) মক্কায়
                                                                            রওয়ানার চেষ্টা করুন।</p>
                                                                    </div>
                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>জরুরী কথা</h4>
                                                                        <p>(১) তবে ১১/১২ তারিখ সূর্য হেলার পূর্বে পাথর মারলে
                                                                            আদায় হবে না। পূণরায় মারতে হবে। নতুবা দম দিতে
                                                                            হবে।</p>
                                                                        <p>(২) যদি ১২ তারিখ সূর্যাস্তের পূর্বে মীনা ত্যাগ
                                                                            করে মক্কায় রওয়ানা না হন তবে ১৩ তারিখ পূনরায় তিন
                                                                            শয়তানকে ৭+৭+৭=২১টি পাথর (ছোট, মেজ ও বড় ) মেরে
                                                                            (পূর্বের নিয়মে) তারপর মক্কায় আসতে হবে।</p>
                                                                        <p>(৩) তাওয়াফে যিয়ারতের উত্তম সময় ১০ই জিলহজ্জ (তবে ৩
                                                                            দিন, এর সব মোট সময়) শেষ সময় ১২ই জিলহজ্জ
                                                                            সূর্যাস্ত পর্যন্ত।</p>
                                                                        <p>(৪) মক্কা থেকে মিনায় রওয়ানার পূর্বে যদি নফল
                                                                            তাওয়াফ করে হজের নিয়্যাত সায়ী না করে থাকেন (বা
                                                                            মিনায় আসেন) তাহলে হজের পরে তাওয়াফে যিয়ারতের পর
                                                                            অবশ্যই হজের সায়ী করুন। (ওয়াজিব)।</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <!-- CARD 1 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading1">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse1" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse1">
                                                            <h5 class="ml-3">হজ্জের ফরজ ও ওয়াজিব</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse1" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading1" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <h4>হজ্জের ফরজ ৩টি</h4>
                                                                        <p>(১) ইহরাম বাধা।</p>
                                                                        <p>(২) উ’কুফে আ’রাফা (আরাফাতের ময়দানে অবস্থান)।</p>
                                                                        <p>(৩) তাওয়াফুয্ যিয়ারাত।</p>
                                                                    </div>

                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>হজ্জের ওয়াজিব ৬টি</h4>
                                                                        <p>(১) ‘সাফা ও মারওয়া’ পাহাড় দ্বয়ের মাঝে ৭ বার সায়ী
                                                                            করা।</p>
                                                                        <p>(২) অকুফে মুযদালিফায় (৯ই জিলহজ্জ) অর্থাৎ সুবহে
                                                                            সাদিক থেকে সুর্যদয় পর্যন্ত একমুহুর্তের জন্য
                                                                            হলেও অবস্থান করা।</p>
                                                                        <p>(৩) মিনায় তিন শয়তান (জামারাত) সমূহকে পাথর নিপে
                                                                            করা।</p>
                                                                        <p>(৪) ‘হজ্জে তামাত্তু’ ও ‘কি্বরান’ কারীগণ ‘হজ্জ’
                                                                            সমাপনের জন্য দমে শোকর করা।</p>
                                                                        <p>(৫) এহরাম খোলার পূর্বে মাথার চুল মুন্ডানো বা
                                                                            ছাটা।</p>
                                                                        <p>(৬) মক্কার বাইরের লোকদের জন্য তাওয়াফে বিদা অর্থাৎ
                                                                            মক্কা থেকে বিদায়কালীন তাওয়াফ করা।
                                                                            এছাড়া আর যে সমস্ত আমল রয়েছে সব সুন্নাত অথবা
                                                                            মুস্তাহাব।</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <!-- CARD 2 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading2">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse2" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse2">
                                                            <h5 class="ml-3">ওমরাহর ফরজ ও ওয়াজিব</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse2" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading2" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <h4>ওমরাহর ফরজ ২টি।</h4>
                                                                        <p>(১) ইহরাম পরিধান করা।</p>
                                                                        <p>(২) তাওয়াফ।</p>
                                                                    </div>
                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>ওমরাহর ওয়াজিব ২টি</h4>
                                                                        <p>(১) সাফা ও মারওয়া মধ্যবর্তী (সবুজ বাতি) স্থানে
                                                                            সাতবার সায়ী করা।</p>
                                                                        <p>(২) মাথার চুল মুন্ডানো বা ছাটা।</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <!-- CARD 3 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading3">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse3" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse3">
                                                            <h5 class="ml-3">হজ্জের প্রকার ও নিয়তসমূহ</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse3" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading3" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <h4>প্রথম প্রকার: হজে ইফরাদ</h4>
                                                                        <p>বর্ণনা: ওমরাহ্ ব্যতিত শুধু হজের জন্য ইহরাম
                                                                            বাঁধা এবং হজের সাথে ওমরাহকে না মিলানো। (বদলী
                                                                            হজের জন্যও এই হজ)।</p>
                                                                        <p class="padding-top-10px">নিয়্যাত: আল্লাহুমা
                                                                            ইন্নী উরীদুল হাজ্জা ফায়াসছির হুলিওয়াতা
                                                                            কাব্বালহুমিনি্ন। (বাংলা নিয়ত- আল্লাহ আমি ইফরাদ
                                                                            হজের উদ্দেশ্যে আপনার সন্তুষ্টির জন্য ইহরাম
                                                                            বাধলাম। তা সহজ করে দিন ও কবুল করে নিন)।</p>
                                                                    </div>

                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>দ্বিতীয় প্রকার: হজে কি্বরান</h4>
                                                                        <p>বর্ণনা: একত্রে একই স্থান থেকে হজ ও ওমরার
                                                                            নিয়্যাত করে হজের সাথে ওমরাহকে মিলানো এবং একই
                                                                            ইহ্রামে উভয়টি আদায় করা।</p>
                                                                        <p class="padding-top-10px">নিয়্যাত: আল্লাহুমা
                                                                            ইন্নী উরীদুল উ’মরাতা ফায়াচ্ছির লী-ওয়াতাক্াব্বাল
                                                                            মিন্নী। বাংলা নিয়ত- হে আল্লাহ আমি আপনার
                                                                            উদ্দেশ্যে হজে কি্বরানের জন্য ইহরাম বাধলাম তা
                                                                            সহজ করে দিন ও কবুল করে নিন।</p>
                                                                    </div>

                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>তৃতীয় প্রকার: হজে তামাত্তু</h4>
                                                                        <p>বর্ণনা: একই সফরে পৃথক পৃথক ভাবে ‘ইহরাম’ পরিধান
                                                                            করে ‘হজ্জ ও ওমরাহ’ আদায় করা। প্রথম ইহ্রামে
                                                                            ওমরাহর নিয়্যাত করে তা পালন শেষে চুল কেটে ‘ইহরাম’
                                                                            খুলে হালাল হয়ে দ্বিতীয় বার নতুন করে হজের
                                                                            নিয়্যাতে ৮ই জিলহজ্জ ‘মক্ক শরীফ’ থেকে হজের জন্য
                                                                            ইহরাম বাধা। তামাত্তু করার ইচ্ছা থাকলে প্রথমে
                                                                            ওমরার নিয়্যাত করে এহরাম বাঁধুন।</p>
                                                                    </div>

                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>শুধু ওমরাহর নিয়্যাত</h4>
                                                                        <p>আল্লাহুমা ইন্নী উরীদুল উম’রাতা ফায়াচ্ছির
                                                                            লী-ওয়াতাক্াব্বাল মিন্নী। বাংলা নিয়ত- হে আল্লাহ
                                                                            আমি ওমরাহ্ পালনের জন্য ইহরাম বাধলাম তা সহজ করে
                                                                            দিন এবং কবুল করে নিন।</p>
                                                                    </div>

                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>শুধু হজের নিয়্যাত</h4>
                                                                        <p>আল্লাহুম্মা ইন্নী উরীদুল হাজ্জা ফায়াচ্ছিরহু-লী
                                                                            অ-তাকাব্বালহু মিন্নী। বাংলা নিয়ত- হে আল্লাহ আমি
                                                                            পবিত্র হজ পালনের জন্য ইহরাম বেধে নিয়ত করলাম তা
                                                                            সহজ করে দিন এবং কবুল করে নিন।</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <!-- CARD 4 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading4">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse4" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse4">
                                                            <h5 class="ml-3">তালবিয়া</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse4" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading4" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <p>লাব্বাঈক আল্লাহুম্মা লাব্বাঈক, লাব্বাঈক,
                                                                            লা-শারীকা-লাকা লাব্বাঈক, ইন্নাল হামদা ওয়ান্
                                                                            নি’মাতা লাকা ওয়াল-মুল্ক, লা শারীকালাক।</p>
                                                                        <p class="padding-top-10px">অর্থ: আমি হাজির হে
                                                                            আল্লাহ! আমি উপস্থিত! আপনার ডাকে সাড়া দিতে আমি
                                                                            হাজির। আপনার কোন অংশীদার নেই। নিঃসন্দেহে সমস্ত
                                                                            প্রশংসা ও সম্পদরাজি আপনার এবং একচ্ছত্র আধিপত্য
                                                                            আপনার। আপনার কোন অংশীদার নেই।</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <!-- CARD 5 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading5">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse5" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse5">
                                                            <h5 class="ml-3">ইহরাম অবস্থায় নিষিদ্ধ কাজ</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse5" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading5" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <p>(১) সেলাইযুক্ত যে কোন কাপড় বা জুতা ব্যবহার,
                                                                            এক্ষেত্রে স্পঞ্জ সেন্ডেলের ব্যবহার করা।</p>
                                                                        <p>(২) মস্তক ও মুখমন্ডল (ইহরামের কাপড়সহ যে কোন কাপড়
                                                                            দ্বারা) ঢাকা।</p>
                                                                        <p>(৩) পায়ের পিঠ ঢেকে যায় এমন জুতা পরা।</p>
                                                                        <p>(৪) চুলকাটা বা ছিড়ে ফেলা।</p>
                                                                        <p>(৫) নখকাটা।</p>
                                                                        <p>(৬) ঘ্রানযুক্ত তৈল বা আতর লাগানো।</p>
                                                                        <p>(৭) স্ত্রীর সঙ্গে সংগম করা।</p>
                                                                        <p>(৮) যৌন উত্তেজনামূলক কোন আচরণ বা কোন কথা বলা।
                                                                        </p>
                                                                        <p>(৯) শিকার করা।</p>
                                                                        <p>(১০) ঝগড়া বিবাদ বা যুদ্ধ করা।</p>
                                                                        <p>(১১) চুল দাড়িতে চিরুনী বা আঙ্গুলী চালনা করা, যাতে
                                                                            ছিড়ার আশংকা থাকে।</p>
                                                                        <p>(১২) শরীরে সাবান লাগানো।</p>
                                                                        <p>(১৩) উকুন, ছারপোকা, মশা ও মাছিসহ কোন জীবজন্তু
                                                                            হত্যা করা বা মারা।</p>
                                                                        <p>(১৪) কোন গুনাহের কাজ করা, ইত্যাদি।</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <!-- CARD 6 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading6">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse6" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse6">
                                                            <h5 class="ml-3">তাওয়াফের বিবরণ, নিয়্যাত, ওয়াজিব ও
                                                                সুন্নত কার্যাবলী</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse6" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading6" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <h4>তাওয়াফের বিবরণ</h4>
                                                                        <p>হাজীদের সর্বপ্রথম কাজই হলো (তামাত্তু ও ক্বেরান
                                                                            কারীগণ) নিজের মালছামানগুছিয়ে রেখে পাকপবিত্র হয়ে
                                                                            মোটেই দেরী না করে ‘হারাম শরীফে’ হাজিরা দেওয়া এবং
                                                                            ‘তাওয়াফ’ করা। ওমরাহ এবং হজের তাওয়াফ ব্যাতিত
                                                                            নফল তাওয়াফ ও করা যায়। যেমন: রাসূল (দঃ),
                                                                            সাহাবা-আওলিয়া, আহ্লে বাইত, মা-বাবা, পীর-উস্তাদ ও
                                                                            অন্যান্য মুরুব্বী বা সন্তানদের স্মরনে বা তাঁদের
                                                                            নামে তাওয়াফ করা।</p>
                                                                    </div>

                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>তাওয়াফের নিয়্যাত</h4>
                                                                        <p>আল্লাহুম্মা ইন্নী উরীদু তাওয়াফা বাইতিকাল হারাম
                                                                            ফায়াচ্ছিরহু-লী, ওয়া তাক্বাব্বাল-হু-মিন্নী,
                                                                            সাবাআ’তা আশ্ওয়াতি্বন লিল্লাহি তায়া’লা।</p>
                                                                        <p class="padding-top-10px">বাংলায় নিয়ত- হে আল্লাহ
                                                                            আমি তাওয়াফ পালনের জন্য নিয়ত করলাম।</p>
                                                                    </div>

                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>তাওয়াফের ওয়াজিব সমূহ</h4>
                                                                        <p>(১) শরীর পাক-সাফ রাখা, ওজু করা। মহিলাদের হায়েজ
                                                                            নেফাছ অবস্থায় তাওয়াফ করা জায়েজ নাই।</p>
                                                                        <p>(২) ছতর ঢাকা। অর্থাৎ যেটুকু ঢাকা প্রত্যেক
                                                                            পুরুষ-নারীর জন্য ফরজ।</p>
                                                                        <p>(৩) ‘হাতীমে কা’বার’ বাইরে থেকে ‘তাওয়াফ’ করা।</p>
                                                                        <p>(৪) পায়ে হেঁটে ‘তাওয়াফ’ করা। অম ব্যক্তি খাটিয়ার
                                                                            মাধ্যমে ‘তাওয়াফ’ করতে পারেন।</p>
                                                                        <p>(৫) ‘হাজ্রে আস্ওয়াদ’ থেকে শুরু করে ডানদিক দিয়ে
                                                                            ‘তাওয়াফ’ শুরু করা।</p>
                                                                        <p>(৬) এক নাগাড়ে বিরতিহীন ভাবে ‘সাতবার চক্কর’ দিয়ে
                                                                            ‘তাওয়াফ’ পূর্ণ করা।</p>
                                                                        <p>(৭) ‘সাত চক্করে’ এক ‘তাওয়াফ’, এটা পূর্ণ হলেই
                                                                            ‘তাওয়াফের’ নামাজ পড়া।</p>
                                                                    </div>

                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>তাওয়াফের সুন্নত কার্যাবলী</h4>
                                                                        <p>(১) ‘তাওয়াফে’র শুরুতে ‘হাজারে আসওয়াদ’ এর দিকে মুখ
                                                                            করা।</p>
                                                                        <p>(২) সম্ভব হলে ‘হাজ্রে আস্ওয়াদ’ চুম্বন করা। নতুবা
                                                                            হাত দ্বারা দূর থেকে ইশারা করা, এবং মুখে
                                                                            ‘বিসমিল্লাহি আল্লাহু আক্বার ওয়ালিল্লাহিল হ্ামদ’
                                                                            বলা।</p>
                                                                        <p>(৩) ‘হা্জ্রে অস্ওয়াদ’ বরাবর দাঁড়িয়ে তাকবীরে
                                                                            তাহরিমা’র ন্যায় উভয় হাত সিনা পর্যন্ত উঠান।</p>
                                                                        <p>(৪) যে ‘তাওয়াফে’র পরে ‘সাঈ’ আছে তাতে ‘এযতেবা’
                                                                            করা। অর্থাৎ ইহরামের চাদরের (উপরের অংশের) দুই
                                                                            মাথা ডান বগলের নিচ দিয়ে বাম কাঁধের উপর ফেলে
                                                                            দেওয়া।</p>
                                                                        <p>(৫) ‘সাঈ’ যুক্ত ‘তাওয়াফে’র প্রথম তিন চক্করে ‘রমল’
                                                                            করা। অথর্াৎ বীরের মত হেলে দুলে জোর ক্বদমে (একের
                                                                            পর এক পা ফেলে) চলা।</p>
                                                                        <p>(৬) বাকী চার চক্কর সাধারণ গতিতে (ধীরে ধীরে)
                                                                            সম্পন্ন করা।</p>
                                                                        <p>(৭) প্রত্যেক চক্কর তাওয়াফ শেষ করে এবং শেষ
                                                                            চক্করেরও পরে ‘হাজ্রে অস্ওয়াদ’কে চুম্বন করা।</p>
                                                                        <p class="padding-top-10px">সম্ভব না হলে দূর থেকে
                                                                            ইশারা করে বিসমিল্লাহে আল্লাহ আকবর ওয়ালিল্লাহিল
                                                                            হামদ্”দোয়াটি পাঠ করা এবং ৩ নং নিয়মের ন্যায়
                                                                            দাড়িয়ে ইশারা করে ‘তাওয়াফ’ শেষ করা।</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <!-- CARD 7 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading7">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse7" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse7">
                                                            <h5 class="ml-3">সায়ীর নিয়ম ও দোয়া</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse7" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading7" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <h4>সায়ীর নিয়ম</h4>
                                                                        <p>‘হজ্জ ও ওমরাহ’ ছাড়া নফল ‘তাওয়াফে’র কোন সায়ী নাই।
                                                                            কারো নামে ওমরাহ করতে হলেও সায়ী করতে হবে। সায়ী
                                                                            অর্থ দৌড়ানো। এটা ‘ছাফা’ পাহাড় থেকে প্রথমে শুরু
                                                                            করতে হবে। ছাফা থেকে মারওয়া।মারওয়া থেকে ছাফায়।
                                                                            এভাবে সাতবার সায়ীর সময় প্রথম তিন চক্কর সবুজ
                                                                            বাতির মাঝের অংশটুকু দৌড়ে দৌড়ে হেলে দুলে যাওয়া
                                                                            সুন্নাত (পুরুষদের জন্য)। পরের চার চক্কর সাধারণ
                                                                            গতিতে সম্পন্ন করতে হবে।</p>
                                                                    </div>

                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>সায়ীর সহজ দোয়া</h4>
                                                                        <p>সুবহানাল্লাহি ওয়াল হামদু লিল্লাহি ওয়া লা ইলাহা
                                                                            ইল্লাল্লাহু ওয়াল্লাহু আকবার ওয়া লা-হাওলা, ওয়ালা
                                                                            কুওয়াতা ইল্লাবিল্লাহিল আ’লিয়্যিল আ’যীম,
                                                                            রাবি্বগফির ওয়ারহাম ওয়াআনতাল আ-আজ্জুল আকরাম।</p>
                                                                    </div>

                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>সায়ীর কুরআনী দোয়া</h4>
                                                                        <p>‘ইন্নাছ্ ছাফা ওয়াল মারওয়াতা মিন্ শাআ’ইরিল্লাহ্
                                                                            ফামান হাজ্জাল বাইতা আও-ই’ তামারা ফালা জুনাহা
                                                                            আ’লাইহি আইয়াত্ত্বাওয়াফা বিহিমা ওমান তাত্বাওয়াআ
                                                                            খাইরান ফা-ইন্নাল্লাহা শাকিরুণ আ’লীম।”</p>
                                                                        <p class="padding-top-10px">উপরোক্ত দুই দোয়া সাতবার
                                                                            চক্করের সময় হাটতে চলতে পড়তে হবে। পরেরটি না পারলে
                                                                            উপরেরটিই যথেষ্ট হবে।</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <!-- CARD 8 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading8">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse8" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse8">
                                                            <h5 class="ml-3">যিয়ারাতে মদীনাহ</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse8" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading8" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <p>হজ্জের পূর্বে অথবা পরে (সুবিধামত) সময়ে হাজীদল তথা
                                                                            প্রিয় নবী হযরত মুহাম্মদ মুস্তাফা (দঃ) এর
                                                                            পাগলপাড়া উম্মতগণ এক মূহুর্তে একদিন/তথা ৮ দিনের
                                                                            জন্য (সম্ভব হলে) নতুবা এক রাত হলেও মদীনা শরীফে
                                                                            যান এবং রাসূলে পাক (দঃ) এর রওজা মোবারক যিয়ারত,
                                                                            রিয়াদুল জান্নাতে বসা (নামাজ আদায় করা) জান্নাতুল
                                                                            বাকী যিয়ারত করা এবং বিশেষতঃ ৮ দিনে ৪০ ওয়াক্ত
                                                                            নামাজ জামাতে আদায় করাসহ বহু ঐতিহাসিক স্থান তথা
                                                                            উহুদ পাহাড় ও বদর প্রান্তর দেখার সৌভাগ্য অর্জন
                                                                            করে থাকেন। এছাড়া মদীনা শরীফে আর কোন কাজ নেই।
                                                                            মূলতঃ মদীনা শরীফে মাসজি দে নববীতে নামাজ ও
                                                                            রাসূলের পাক (দঃ) এর রওজা শরীফ যিয়ারতই হল প্রধান
                                                                            কাজ। যদি সম্ভব হয় বা সময় সূযোগ থাকে তাহলে ৪০
                                                                            ওয়াক্ত নামাজ (সুন্নাত) রয়েছে। কিন্তু তার অর্থ এই
                                                                            নয় যে, ৮দিন=৪০ ওয়াক্ত থাকতেই হবে। এটা ফরজ বা
                                                                            ওয়াজিব নয়। আসলে এটা সুন্নাত এবং হজের অংশ নয়।
                                                                            মূলতঃ আশেকে রাসূল (দঃ) দের জন্য রাসূলে পাক (দঃ)
                                                                            এর রওজা মোবারক যিয়ারতের নিয়্যাতে যাওয়াই হল মূল।
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <!-- CARD 9 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading9">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse9" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse9">
                                                            <h5 class="ml-3">বদলী হজ</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse9" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading9" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <p>যে সকল মুসলিম নর-নারীর উপর হজ ফরজ ছিল, তাঁদের
                                                                            মধ্যে যদি কেউ মৃতু্যবরণ করে অথবা জীবিত কিন্তু
                                                                            শারিরীক দুর্বলতা ও অসুস্থতা ও অমতার কারণে হজ
                                                                            করতে অপারগ হয়, তাহলে অন্য কাউকে দিয়ে বিশেষ করে
                                                                            বিজ্ঞ আলেম বা হজে পারদর্শী ব্যক্তি দ্বারা তাঁর
                                                                            বদলী হজ করাতে পারবে। অর্থাৎ যাঁর জন্য বদলী
                                                                            হজ করা হবে তাঁরই নামে ইহরাম পরিধান ও নিয়্যাত
                                                                            করে অন্য একজন হজ আদায় করতে পারবে।</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <!-- CARD 10 -->
                                            <div class="card">
                                                <div class="card-header" id="hajjRegulationHeading10">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#hajjRegulationCollapse10" aria-expanded="false"
                                                            aria-controls="hajjRegulationCollapse10">
                                                            <h5 class="ml-3">একনজরে তিন প্রকার হজের জরুরী কাজ,
                                                                হুকুম ও তারিখ সমূহ</h5>
                                                            <i class="la la-minus minus-icon"></i>
                                                            <i class="la la-plus plus-icon"></i>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="hajjRegulationCollapse10" class="collapse border-top"
                                                    aria-labelledby="hajjRegulationHeading10" data-parent="#hajjRegulation">
                                                    <div class="card-body padding-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text">
                                                                    <div class="whiteBlack padding-top-10px normal-text">
                                                                        <h4>১ম প্রকার হজে ইফরাদের ১১টি জরুরী কাজ</h4>
                                                                        <p>(১) ইহরাম (শুধু হজের জন্য)।</p>
                                                                        <p>(২) ৯ই জিলহজ্জ উ’কুফে আ’রাফা (সূর্য হেলার পর থেকে
                                                                            সুর্যাস্ত পর্যন্ত)।</p>
                                                                        <p>(৩) ১০ থেকে ১২ই জিলহজ্জ তাওয়াফে যিয়ারাত তবে ১০ই
                                                                            জি্বলহজ্ব তারিখই উত্তম।</p>
                                                                        <p>(৪) অকুফে মুযদালেফায় ১০ই জিলহজ্জ সুবহে সাদেক
                                                                            সূর্য উদয় পর্যন্ত।</p>
                                                                        <p>(৫) ১০ই জিলহজ্জ বড় শয়তানকে (জামারাতে আক্কাবায়)
                                                                            ৭টি কঙ্কর মারা। সুর্য হেলার পূর্বে দুপুর ১২টার
                                                                            আগে সুন্নত।</p>
                                                                        <p>(৬) মাথা মুন্ডানো তবে দম দিতে হবে।</p>
                                                                        <p>(৭) সায়ী ৯ তারিখের পূর্বে বা পরে) করে দিবেন।</p>
                                                                        <p>(৮) ১১ তারিখে তিন শয়তানকে (প্রথম ছোট/মেঝ ও পড়ে
                                                                            বড়) ৭ক্ম৩=২১টি পাথর মারা।</p>
                                                                        <p>(৯) ১২ তারিখে অনুরূপ তিন শয়তানকে ৭ক্ম৩= ২১টি পাথর
                                                                            মারা। সর্বমোট তিন দিনে ৭+২১+২১=৪৯টি কঙ্কর মারা।
                                                                        </p>
                                                                        <p>(১০) ‘বিদায়ী তাওয়াফে’ (মক্কার বাইরের লোকদের জন্য)
                                                                            বিদায়ের পূর্বে। এটি ওয়াজিব।</p>
                                                                        <p>(১১) তাওয়াফে কুদুম করা। (মক্কায় গিয়ে সর্বপ্রথম)
                                                                        </p>
                                                                    </div>
                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>২য় প্রকার হজে কেরানের ১৩টি জরুরী কাজ</h4>
                                                                        <p>(১) ইহরাম (হজ্জ ও ওমরাহর জন্য)</p>
                                                                        <p>(২) আরাফাতে অবস্থান।</p>
                                                                        <p>(৩) তাওয়াফুয যিয়ারাত।১০টি ওয়াজিব</p>
                                                                        <p>(৪) ওমরাহর তাওয়াফ</p>
                                                                        <p>(৫) ওমরাহর সায়ী</p>
                                                                        <p>(৬) হজের সায়ী</p>
                                                                        <p>(৭) অকুফে মুযদালিফায়</p>
                                                                        <p>(৮) ১০ই জিলহজ্ব তারিখে বড় শয়তানকে ৭টি পাথর মারা
                                                                            (দুপুর ১২টার পূর্বে) সুন্নত।</p>
                                                                        <p>(৯) দম দিতে হবে।</p>
                                                                        <p>(১০) মাথা মুন্ডানো।</p>
                                                                        <p>(১১) ১১ই জিলহজ্ব তারিখে তিন শয়তানকে পাথর মারা</p>
                                                                        <p>(১২) ১২ তারিখে তিন শয়তানকে পূর্বের ছকের নিয়মে
                                                                            পৃথক পৃথক ভাবে সূর্য হেলার পরে নিয়ম অনুযায়ী পাথর
                                                                            মারা।</p>
                                                                        <p>(১৩) বিদায়ী তাওয়াফ।</p>
                                                                    </div>
                                                                    <div class="whiteBlack padding-top-30px normal-text">
                                                                        <h4>৩য় প্রকার হজে তামাত্তুর ১৪টি জরুরী কাজ</h4>
                                                                        <p>(১) ওমরাহর ইহরাম (বাংলাদেশ)।</p>
                                                                        <p>(২) হজের ইহরাম (৮ তারিখ মক্কায়)</p>
                                                                        <p>(৩) উ,কুফে আরাফা (৯ই জিলহজ্জ সূর্য হেলার পর থেকে
                                                                            সুর্যস্তের পূর্ব মুহুর্ত পর্যন্ত)।</p>
                                                                        <p>(৪) তাওয়াফে জিয়ারত (১০ তারিখ অথবা ১১, ১২
                                                                            তারিখ)১১টি ওয়াজিব</p>
                                                                        <p>(৫) তাওয়াফে ওমরাহ (মক্কায় গিয়েই)</p>
                                                                        <p>(৬) ওমরাহর সায়ী (ওমরাহ তাওয়াফের পরই)</p>
                                                                        <p>(৭) মাথা মুন্ডানো (ওমরাহর পর)।</p>
                                                                        <p>(৮) হজের সায়ী</p>
                                                                        <p>(৯) বড় শয়তানকে ৭টি পাথর মারা ( ১০ই জিলহজ্ব তারিখ
                                                                            সুর্য হেলার বা ১২টা পূর্বে) সুন্নত।</p>
                                                                        <p>(১০) কুরবানী করা (পাথর মেরে ১০ তারিখ)।</p>
                                                                        <p>(১১) মাথা মুন্ডানো দম দিতে হবে।</p>
                                                                        <p>(১২) ১১ তারিখ তিন শয়তানকে ৭+৭+৭=২১টি পাথর মারা।
                                                                        </p>
                                                                        <p>(১৩) ১২ তারিখে তিন শয়তানকে ৭+৭+৭=২১টি পাথর মারা
                                                                            (সর্বমোট তিন দিনে ৭+২১+২১=৪৯টি পাথর মারতে হবে)।
                                                                        </p>
                                                                        <p>(১৪) বিদায়ী তাওয়াফ।</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <h5>সূত্র: www.hajj.gov.bd/ </h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div><!-- end tab-pane -->

                        </div><!-- end tab-content -->

                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->

        </div>
        <!-- end container -->
    </section>
    <!-- end contact-area -->
    <!-- ================================
            END CONTACT AREA
        ================================= -->
    <div class="discount-box hajj-container">
        <div class="discount-img">
            <img id="hajj_image" src="{{ asset('assets/images/offers/hero-bg4.jpg') }}"
                alt="discount img">
        </div><!-- end discount-img -->
        <div class="discount-content">
            <div class="section-heading">
                <!--<h2 class="sec__title mb-0 line-height-50 text-white" style="color:yellow !important">Celebrate</h2>-->
                {{-- <p class="sec__desc text-white">সবার আগে</p> --}}
                <p class="sec__desc text-white">হজ যাত্রীদের সেবায়</p>
                <h2 class="sec__title mb-0 line-height-50 text-white"
                    style="color:yellow !important">বিমান বাংলাদেশ এয়ারলাইন্স</h2>
                {{-- <p class="sec__desc text-white">on Web booking in all sectors</p> --}}
            </div><!-- end section-heading -->

        </div><!-- end discount-content -->
        <div class="company-logo">

            <p class="text-white font-size-14 text-right">*শুধুমাত্র হজ মৌসুমের জন্য
                প্রযোজ্য</p>
        </div><!-- end company-logo -->
    </div>
@endsection

@section('page-specific-footer')

    <script>
        $(document).ready(function () {
            $('#pre-flight').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#post-flight').DataTable();
        });
    </script>
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    
@endsection
