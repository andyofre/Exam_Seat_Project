<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Unical | Hostel Admin</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendors/images/custom/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendors/images/custom/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendors/images/custom/favicon.png') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">
    @yield('styles')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body>
    {{-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="{{ asset('vendors/images/custom/favicon.png') }}" alt="" width="70"></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div> --}}
    </div>

    @include('layouts.include.admin.header')

    @include('layouts.include.admin.sidebar')
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        @yield('content')


        <div class="mt-4">
            {{-- @include('layouts.include.admin.footer') --}}

           </div>
    </div>


    <!-- js -->

    @yield('scripts')
    <script src="{{ asset('vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/dashboard.js') }}"></script>

    <script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
	<script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script>

    <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
	<script src="{{ asset('src/plugins/jQuery-Knob-master/jquery.knob.min.js') }}"></script>
	<script src="{{ asset('src/plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>
	<script src="{{ asset('src/plugins/highcharts-6.0.7/code/highcharts-more.js') }}"></script>
	<script src="{{ asset('src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
	<script src="{{ asset('src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script></body>
</body>

</html>
