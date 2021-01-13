<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HashZo </title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('vendor/website/css/bootstrap.min.css')}}"/>

    <!-- Slick -->
    {{-- <link type="text/css" rel="stylesheet" href="{{asset('vendor/website/css/slick.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('vendor/website/css/slick-theme.css')}}"/> --}}
    
    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('vendor/website/css/nouislider.min.css')}}"/>
    
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('vendor/website/css/font-awesome.min.css')}}">
    
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('vendor/website/css/style.css')}}"/>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> --}}
</head>
<body>
<div id="app">
    @yield('content')
</div>

    <script src="{{asset('vendor/website/js/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/website/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('vendor/website/js/slick.min.js')}}"></script>
    <script src="{{asset('vendor/website/js/nouislider.min.js')}}"></script> --}}
    {{-- <script src="{{asset('vendor/website/js/jquery.zoom.min.js')}}"></script> --}}
    <script src="{{asset('vendor/website/js/main.js')}}"></script>
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script> --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script>
        $('.alert').alert()
    </script>
</body>
</html>
