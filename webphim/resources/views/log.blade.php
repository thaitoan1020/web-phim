<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NioPhim') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/admin/images/logo.png') }}" />

     <!-- Fontfaces CSS-->
     <link href="{{ asset('public/admin/css/font-face.css')}}" rel="stylesheet" media="all">
     <link href="{{ asset('public/admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
     <link href="{{ asset('public/admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
     <link href="{{ asset('public/admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
 
     <!-- Bootstrap CSS-->
     <link href="{{ asset('public/admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
 
     <!-- Vendor CSS-->
     <link href="{{ asset('public/admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
     <link href="{{ asset('public/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
     <link href="{{ asset('public/admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
     <link href="{{ asset('public/admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
     <link href="{{ asset('public/admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
     <link href="{{ asset('public/admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
     <link href="{{ asset('public/admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
 
     <!-- Main CSS-->
     <link href="{{ asset('public/admin/css/theme.css')}}" rel="stylesheet" media="all">

     <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

     <!-- Jquery JS-->
    <script src="{{ asset('public/admin/vendor/jquery-3.2.1.min.js')}}" defer></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('public/admin/vendor/bootstrap-4.1/popper.min.js')}}" defer></script>
    <script src="{{ asset('public/admin/vendor/bootstrap-4.1/bootstrap.min.js')}}" defer></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('public/admin/vendor/slick/slick.min.js')}}" defer>
    </script>
    <script src="{{ asset('public/admin/vendor/wow/wow.min.js')}}" defer></script>
    <script src="{{ asset('public/admin/vendor/animsition/animsition.min.js')}}" defer></script>
    <script src="{{ asset('public/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}" defer>
    </script>
    <script src="{{ asset('public/admin/vendor/counter-up/jquery.waypoints.min.js')}}" defer></script>
    <script src="{{ asset('public/admin/vendor/counter-up/jquery.counterup.min.js')}}" defer>
    </script>
    <script src="{{ asset('public/admin/vendor/circle-progress/circle-progress.min.js')}}" defer></script>
    <script src="{{ asset('public/admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}" defer></script>
    <script src="{{ asset('public/admin/vendor/chartjs/Chart.bundle.min.js')}}" defer></script>
    <script src="{{ asset('public/admin/vendor/select2/select2.min.js')}}" defer>
    </script>

    <!-- Main JS-->
    <script src="{{ asset('public/admin/js/main.js')}}"defer></script>

</head>
<body class="animsition">
    <div class="page-wrapper">
        @yield('log')
    </div>
</body>
</html>
