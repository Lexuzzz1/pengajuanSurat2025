<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon"/>
    <title>PlainAdmin Demo | Bootstrap 5 Admin Template</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css')}} "/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}"/>
</head>
<body>

<!-- ======== Preloader =========== -->
@include('layout.preloader')

<!-- ======== sidebar-nav =========== -->
@include('layout.sidebar')

<!-- ======== main-wrapper start =========== -->
<main class="main-wrapper">

    <!-- ========== header start ========== -->
    @include('layout.header')

    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>

    <!-- ========== footer start =========== -->
    @include('layout.footer')

</main>

<!-- ========= All Javascript files linkup ======== -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/dynamic-pie-chart.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
<script src="{{ asset('assets/js/jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/js/world-merc.js') }}"></script>
<script src="{{ asset('assets/js/polyfill.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/add.js') }}"></script>

</body>
</html>
