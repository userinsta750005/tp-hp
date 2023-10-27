<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Hospital Management System - A Super Responsive Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="MartDevelopers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Plugins css -->
    <link href="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Loading button css -->
    <link href="{{ asset('admin/assets/libs/ladda/ladda-themeless.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Footable css -->
    <link href="{{ asset('admin/assets/libs/footable/footable.core.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrapper">
        <!-- Topbar Start -->
        @include('layouts.topbar') 
        <!-- end Topbar -->

        <!-- Left Sidebar Start -->
        @include('layouts.leftsidebar')
        <!-- Left Sidebar End -->

        <!-- Right Sidebar -->
        @include('layouts.rightbar')
        <!-- End Right Sidebar -->

        <!-- Page Content -->
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- End Page Content -->
    </div>
    <!-- App scripts -->
    <!-- Vendor js -->
    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>

    <!-- Dashboard 1 init js-->
    <script src="{{ asset('admin/assets/js/pages/dashboard-1.init.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
</body>
</html>
