<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialize.min.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <!-- Styles end -->
</head>
<body>
    
@include('vendor.header.admin')

<div class="row">
    <div class="col s12 m3">
        @include('layouts.admin.sidebar')
    </div>
    <div class="col s12 m9">
        @yield('content')
    </div>
</div>

    <!-- Scripts -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/Chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Scripts end -->
</html>
