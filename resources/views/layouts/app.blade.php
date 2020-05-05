<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" style="background-color:black !important;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/cropped-orogold-logo-dgold.png') }}" alt="" style="height:60px; width:200px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="color:#D4AF37 !important">orogoldspan@orogold.com</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="color:#D4AF37 !important">
                                <button type="button" class="btn btn-outline-warning">Reserve Ahora</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="margin-bottom:100px !important;padding-top: 0px !important;">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer style="background-color:black !important; color:#D4AF37 !important; position: fixed; bottom: 0; width: 100%;">

            <!-- Footer Elements -->
            <div class="container" style="margin-top:20px">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 text-left">
                        <img src="{{ asset('img/cropped-orogold-logo-dgold.png') }}" alt="" style="height:60px; width:200px;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 text-rigth">
                                <img src="{{ asset('icon/mail.png') }}" style="height: 15px !important; width: 15px !important">
                                orogoldspan@orogold.com
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 text-rigth">
                                <img src="{{ asset('icon/telephone.png') }}" style="height: 15px !important; width: 15px !important">
                                +52 55022630032
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Elements -->

        </footer>
        <!-- Footer -->
    </div>
</body>
</html>
