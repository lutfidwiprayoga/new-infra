<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Traffic New Infra
    </title>
    <!-- Favicon -->
    <link href="{{ asset('template') }}/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('template') }}/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="{{ asset('template') }}/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css"
        rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('template') }}/assets/css/argon-dashboard.min.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="bg-default">
    <div class="main-content">
        <!-- Navbar -->
        @include('auth.layouts.navbar')
        <!--======== Main Content =======-->
        <!-- Header -->
        @include('auth.layouts.header')
        <!-- Page content -->
        @yield('auth')
        <!--======== End Main Content =======-->
        <!--======== Footer =======-->
        @include('auth.layouts.footer')
        <!--======== End Footer =======-->
    </div>
    <!--   Core   -->
    <script src="{{ asset('template') }}/assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    <!--   Argon JS   -->
    <script src="{{ asset('template') }}/assets/js/argon-dashboard.min.js?v=1.1.2"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>
</body>

</html>
