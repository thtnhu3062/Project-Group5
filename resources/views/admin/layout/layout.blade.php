<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fendi - Group 5</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/images/favicon1.ico') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
    <!--datatable CSS -->
    <link rel="stylesheet" href="{{ asset('/css/dataTables.bootstrap4.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('/css/typography.css') }}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}" />
</head>

<body>
    <!-- Wrapper Start -->
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.layout.partials.top')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.layout.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('contents')
        <!-- /.content-wrapper -->

        @include('admin.layout.partials.footer')
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ asset('/js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('/js/countdown.min.js') }}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ asset('/js/select2.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('/js/wow.min.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('/js/slick.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('/js/smooth-scrollbar.js') }}"></script>
    <!-- apex Custom JavaScript -->
    <script src="{{ asset('/js/apexcharts.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('/js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('/js/custom.js') }}"></script>
</body>