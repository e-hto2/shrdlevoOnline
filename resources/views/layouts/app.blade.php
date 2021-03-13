<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
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

        <!---Sweet-Alert css-->
        <link href="{{ asset('assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">

        <!---DataTables css-->
        <link href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet" />

        <!---Select2 css-->
        <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

        <!---Daterangepicker css-->
        <link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

        <!---Fileupload css-->
        <link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css"/>

        <!---Fancy uploader css-->
        <link href="{{ asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />

        <!--Sumoselect css-->
        <link rel="stylesheet" href="{{ asset('assets/plugins/sumoselect/sumoselect.css') }}">

        <!--TelephoneInput css-->
        <link rel="stylesheet" href="{{ asset('assets/plugins/telephoneinput/telephoneinput.css') }}">

        <!---Sidebar css-->
        <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        <!-- Loader -->
        <div id="global-loader">
            <img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
        </div>
        <div class="page">
            <!-- Main Header-->
            <div class="main-header hor-header hor-top-header">
                <div class="container">
                    <div class="main-header-left">
                    </div>
                    <a class="main-logo" href="index.html">
                        Social Media
                    </a>
                    <div class="main-header-right">
                    </div>
                </div>
            </div>
            @yield('menu')
            @yield('content')
            <!-- End Main Header-->
            <!-- Main Footer-->
            <div class="main-footer text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span>Copyright © 2020  <a href="#">Social Media</a> All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer-->
        </div>
        <!-- End Page -->


        <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

        <!-- Jquery js-->
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap js-->
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Ionicons js-->
        <script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>

        <!-- Rating js-->
        <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

        <!-- Jquery-Ui js-->
        <script src="{{ asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>

        <!-- Select2 js-->
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Daternagepicker js-->
        <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!--Fileuploads js-->
        <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>

        <!--Fancy uploader js-->
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

        <!-- Form-elements js-->
        <script src="{{ asset('assets/js/advanced-form-elements.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>

        <!--Sumoselect js-->
        <script src="{{ asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>

        <!-- Sweet-Alert js-->
        <script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>

        <!-- Perfect-scrollbar js-->
        <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

        <!-- Sidebar js-->
        <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

        <!-- Sticky js-->
        <script src="{{ asset('assets/js/sticky.js') }}"></script>

        <!-- Custom js-->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        @yield('js')
     </body>
</html>
