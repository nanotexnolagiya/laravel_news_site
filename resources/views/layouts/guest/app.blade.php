<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Newsletter</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialize.min.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <!-- Styles end -->
</head>
<body>
    
    @include('vendor.header.guest')


    <section id="app">
        <div class="container">
            <div class="row">
                @yield('content')
                <div class="col s12 m4">
                    @include('layouts.guest.sidebar')
                </div>
            </div>
        </div>
        
    </section>

    @include('vendor.footer.guest')
    <!-- Scripts -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/Chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Scripts end -->
</html>
