<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Comboni Short Courses System Managements</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    @include('website.includes._styles')

    @yield('styles')

</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h3 class="logo mr-auto">
                <a href="/">
                <img src="{{asset('assets/images/ab.jpg')}}">
                CCST
            </a>
            </h3>

            @include('website.includes._navbar')
        </div>

    </header>


    <main id="main" style="background: rgba(204, 204, 204, 0.651)">
        @yield('content')
    </main>

    <footer id="footer">

        @include('website.includes._footer')

    </footer>

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <div id="preloader"></div>

    @include('website.includes._scripts')

    @yield('scripts')

</body>

</html>
