<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/new-logo.png') }}" type="image/x-icon"/>

    <!-- Title -->
    <title>Web game dashboard</title>

    <!---Fontawesome css-->
    <link href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!---Ionicons css-->
    <link href="{{ asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!---Typicons css-->
    <link href="{{ asset('assets/plugins/typicons.font/typicons.css') }}" rel="stylesheet">

    <!---Feather css-->
    <link href="{{ asset('assets/plugins/feather/feather.css') }}" rel="stylesheet">

    <!---Falg-icons css-->
    <link href="{{ asset('assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!---Style css-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-dark-style.css') }}" rel="stylesheet">


    <!---DataTables css-->
    <link href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')  }}" rel="stylesheet" />
    <!---Select2 css-->
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!--Mutipleselect css-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}">

    <!---Sidebar css-->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!---Jquery.mCustomScrollbar css-->
    <link href="{{ asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet">

    <!---Sidemenu css-->
    <link href="{{ asset('assets/plugins/sidemenu/closed-sidemenu.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
    <style>

        .page-header{
            min-height: 0!important;
        }
        .main-logo img{
            height: 35px;
        }
    </style>
    @yield('css')
</head>
<body class="dark-theme">

<!-- Loader -->
<div id="global-loader">
    <img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page">

    @include('navigation.admin_navigation')

    <!-- Main Content-->
    <div class="main-content side-content pt-0">

        <!-- Main Header-->
        <div class="main-header side-header sticky">
            <div class="container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon d-lg-none" href="" id="mainNavShow"><span></span></a>
                    <a class="main-logo d-lg-none" href="index.html">
                        <img src="{{ asset('assets/img/brand/new-logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{ asset('assets/img/brand/new-logo.png') }}" class="header-brand-img icon-logo" alt="logo">
                        <img src="{{ asset('assets/img/brand/new-logo.png') }}" class="header-brand-img desktop-logo theme-logo" alt="logo">
                        <img src="{{ asset('assets/img/brand/new-logo.png') }}" class="header-brand-img icon-logo theme-logo" alt="logo">
                    </a>
                    <a class="main-header-menu-icon" href="" id="mainSidebarToggle"><span></span></a>
                </div>
                <div class="main-header-right">
                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link">
                            <i class="fe fe-maximize-2"></i>
                        </a>
                    </div>
                    <div class="dropdown main-profile-menu">
                        <a class="main-img-user" href=""><img alt="avatar" src="{{ asset('assets/img/users/1.jpg') }}"></a>
                        @guest

                        @else
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <h6 class="main-notification-title">
                                        {{ Auth::user()->name }}
                                    </h6>
                                </div>
                                <a class="dropdown-item border-top" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fe fe-power"></i> {{ __('Logout') }}
                                </a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest

                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Header-->
        @yield('content')
    </div>
    <!-- End Main Content-->

    <!-- Main Footer-->
    <div class="main-footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>2021 Game dashboard.</span>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->

</div>


<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

<!-- Jquery js-->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Ionicons js-->
<script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>

<!-- Rating js-->
<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!-- Flot js-->
<script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>

<!-- Chart.Bundle js-->
<script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

<!-- Peity js-->
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>

<!-- Jquery-Ui js-->
<script src="{{ asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>



<!-- Select2 js-->
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

<!--MutipleSelect js-->
<script src="{{ asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
<script src="{{ asset('assets/plugins/multipleselect/multi-select.js') }}"></script>

<!-- Jquery.mCustomScrollbar js-->
<script src="{{ asset('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!-- Perfect-scrollbar js-->
<script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<!-- Sidemenu js-->
<script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- Sidebar js-->
<script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- Sticky js-->
<script src="{{ asset('assets/js/sticky.js') }}"></script>

{{--<!-- Dashboard js-->--}}
{{--<script src="{{ asset('assets/js/index.js') }}"></script>--}}

<!-- Custom js-->
<script src="{{ asset('assets/js/custom.js') }}"></script>

@yield('js')
</body>
</html>
