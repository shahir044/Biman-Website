<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>BimanWebsite Admin Panel</title>

    <meta name="description"
        content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
        content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href=" {{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/customAdmin.css')}}">


    @yield('page-specific-css')
</head>

<body>

    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Header -->
            <div class="content-header border-bottom">
                <!-- User Avatar -->
                <a class="img-link mr-1" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
                </a>
                <!-- END User Avatar -->

                <!-- User Info -->
                <div class="ml-2">
                    <a class="text-dark font-w600 font-size-sm" href="javascript:void(0)">Admin Panel</a>
                </div>
                <!-- END User Info -->

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ml-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout"
                    data-action="side_overlay_close">
                    <i class="fa fa-fw fa-times"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
            <!-- END Side Header -->


        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="font-w600 text-dual" href="index.html">
                    <span class="smini-visible">
                        <i class="fa fa-circle-notch text-primary"></i>
                    </span>
                    <span class="smini-hide font-size-h5 tracking-wider">
                        Biman<span class="font-w400">Website</span>
                    </span>
                </a>
                <!-- END Logo -->


            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">

                        @if (Auth::user()->hasAnyRole('FlightSchedule'))
                            <!--<li class="nav-main-item">-->
                            <!--    <a style="font-size: 16px; color: white;" class="nav-main-link"-->
                            <!--        href="{{ route('flightSchedule') }}">-->
                            <!--        <i style="color: white;" class="nav-main-link-icon fa fa-home"></i>-->
                            <!--        <span class="nav-main-link-name">Domestic Schedule</span>-->
                            <!--    </a>-->
                            <!--</li>-->


                            <!--<li class="nav-main-item">-->
                            <!--    <a style="font-size: 16px; color: white;" class="nav-main-link"-->
                            <!--        href="{{ route('internationalFlightSchedule') }}">-->
                            <!--        <i style="color: white;" class="nav-main-link-icon fa fa-globe"></i>-->
                            <!--        <span class="nav-main-link-name">International Schedule</span>-->
                            <!--    </a>-->
                            <!--</li>-->
                        @endif
                        <li class="nav-main-item">
                            <a style="font-size: 16px; color: white;" class="nav-main-link"
                                href="{{ route('feedback-controller') }}">
                                <i style="color: white;" class="nav-main-link-icon fa fa-book"></i>
                                <span class="nav-main-link-name">Passenger Feedback</span>
                            </a>
                        </li>
                        @if (Auth::user()->hasAnyRole('TravelAdvisory'))

                            <li class="nav-main-item">
                                <a style="font-size: 16px; color: white;" class="nav-main-link"
                                    href="{{ route('advisoryUpload') }}">
                                    <i style="color: white;" class="nav-main-link-icon fa fa-book"></i>
                                    <span class="nav-main-link-name">Travel Advisory</span>
                                </a>
                            </li>

                        @endif
                        @if (Auth::user()->hasAnyRole('Refund'))
                            <li class="nav-main-item">
                                <a style="font-size: 16px; color: white;" class="nav-main-link"
                                   href="{{route('admin-refund-portal')}}">
                                    <i style="color: white;" class="nav-main-link-icon fa fa-book"></i>
                                    <span class="nav-main-link-name">Refund Portal</span>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->hasAnyRole('News'))
                            <li class="nav-main-item">
                                <a style="font-size: 16px; color: white;" class="nav-main-link"
                                   href="{{route('newsUpload')}}">
                                    <i style="color: white;" class="nav-main-link-icon fa fa-book"></i>
                                    <span class="nav-main-link-name">News Upload</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Toggle Mini Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout"
                        data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>

                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual d-flex align-items-center"
                            id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                            <span class="d-none d-sm-inline-block ml-2"> {{ Auth::user()->name }} </span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-primary-dark rounded-top">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="{{ asset('assets/images/menu/biman_red_logo.jpg') }}" alt="">
                                <p class="mt-2 mb-0 text-white font-w500"> {{ Auth::user()->name }} </p>
                                <p class="mb-0 text-white-50 font-size-sm">Biman Bangladesh Airlines</p>
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="{{ route('changePassword') }}">
                                    <span class="font-size-sm font-w500">Change Password</span>
                                </a>

                                <div role="separator" class="dropdown-divider"></div>


                                <div>



                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->



                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout"
                        data-action="side_overlay_toggle">
                        <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                    </button>
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-white">
                <div class="content-header">
                    <form class="w-100" action="/dashboard" method="POST">
                        @csrf
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-alt-danger" data-toggle="layout"
                                    data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-white">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            @yield('main-content')
            <!-- Page Content -->
            <div class="content">
                <div class="block block-rounded">
                    <div class="block-content travelAdvisory-block-content">


                        @yield('content')

                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row font-size-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                        Crafted by <a class="font-w600" target="_blank">TEAM V</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                        <a class="font-w600" target="_blank">Biman Bangladesh Airlines IT Division</a> &copy; <span
                            data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->


    </div>
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{asset('assets/js/oneui.core.min.js')}}"></script>

    <script src="{{asset('assets/js/oneui.app.min.js')}}"></script>

    <script src="{{asset('assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <script>jQuery(function () { One.helpers('notify'); });</script>

    @yield('page-specific-javascript')


    @include('partials/notifications')

@stack('custom-script')
</body>

</html>
