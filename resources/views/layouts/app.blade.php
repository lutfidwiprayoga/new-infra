<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Project New Infra</title>
    <link rel="icon" href="{{ asset('admin') }}/assets/images/logo/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.min.css"> -->
    <style>
        #map {
            height: 500px;
            width: 100%;
            min-height: 100%;
            z-index: 0;
            display: block;
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.maptiler.com/mapbox-gl-js/v1.5.1/mapbox-gl.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
    <script src="https://cdn.maptiler.com/mapbox-gl-js/v1.5.1/mapbox-gl.js"></script>
    <script src="https://cdn.maptiler.com/mapbox-gl-leaflet/latest/leaflet-mapbox-gl.js"></script>
    <link rel="stylesheet"
        href="{{ asset('admin') }}/assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <style>
        table.dataTable td {
            padding: 15px 8px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link href="{{ asset('admin') }}/calendar/css/mobiscroll.javascript.min.css" rel="stylesheet" />
    <script src="{{ asset('admin') }}/calendar/js/mobiscroll.javascript.min.js"></script>
    <style>
        .mbsc-datepicker .quarter-year-header-picker .mbsc-segmented {
            max-width: 50px;
            margin: 0 auto;
        }

        .quarter-year-header-picker {
            flex: 1 0 auto;
        }

        #demo-quarter-year-view {
            width: 260px;
            font-size: 100%;
            margin: 50px auto 0;
            perspective: 1000px;
            cursor: default;
            position: relative
        }

    </style>
</head>

<body>
    <div id="app">
        <!--=========== Side Bar Menu ============= -->
        @include('layouts.sidebar')
        <!--=========== End Side Bar Menu ============= -->
        <div id="main">
            @include('layouts.navbar')
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
            <!-- ==================== Main Content ================= -->
            @yield('content')
            <!-- ==================== End Main Content ================= -->
            <!--=========== Footer Menu ============= -->
            @include('layouts.footer')
            <!--=========== End Footer ============= -->
        </div>
    </div>
    <script src="{{ asset('admin') }}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="{{ asset('admin') }}/assets/vendors/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js">
    </script>
    <script src="{{ asset('admin') }}/assets/vendors/fontawesome/all.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    @include('layouts.datatable')
    <script src="{{ asset('admin') }}/assets/js/mazer.js"></script>
    @yield('javascript')
</body>

</html>
