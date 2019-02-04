<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-dark navbar-laravel">
        <div class="container">
          <div class="navbar-nav mr-auto">
            <p class="text-white">General Villegas, Viernes 01 de febrero de 2019   <strong>|</strong>  <img height="20" src="img/clima.png" /> T 20° H 61%</p>
          </div>
          <div class="navbar-nav ml-auto">
            <p class="text-white">Compra: U$D 38,50 | Venta: U$D 38,50</p>
          </div>
        </div>
      </nav>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
              <div id="logo" class="mx-auto"><img height="150" src="img/logo.png" /></div>
            </div>
        </nav>
        <nav class="navbar navbar-laravel">
          <div class="container">
            <div class="row text-center" style="width:100%; font-family: 'Open Sans', sans-serif;font-size: 18px;font-weight: bold">
              <div class="col-md-2" style="background: #112f41;
      -webkit-transform: skew(-20deg);-moz-transform: skew(-20deg);
     -ms-transform: skew(-20deg);
     -o-transform: skew(-20deg);
     transform: skew(-20deg);">

                    <a  style="color: white;display: block;-webkit-transform: skew(20deg);-moz-transform: skew(20deg);
                     -ms-transform: skew(20deg);
                     -o-transform: skew(20deg);
                     transform: skew(20deg);" href="#">Destacados</a>
              </div>
              <div class="col-md-2" style="background: #0894A1;  -webkit-transform: skew(-20deg);-moz-transform: skew(-20deg);
               -ms-transform: skew(-20deg);
               -o-transform: skew(-20deg);
               transform: skew(-20deg);">
                    <a href="#" style="color: white;display: block;-webkit-transform: skew(20deg);-moz-transform: skew(20deg);
                     -ms-transform: skew(20deg);
                     -o-transform: skew(20deg);
                     transform: skew(20deg);">Nacionales</a>
              </div>
              <div class="col-md-2" style="background: #b51808;  -webkit-transform: skew(-20deg);-moz-transform: skew(-20deg);
               -ms-transform: skew(-20deg);
               -o-transform: skew(-20deg);
               transform: skew(-20deg);">
                    <a style="color: white;display: block;-webkit-transform: skew(20deg);-moz-transform: skew(20deg);
                     -ms-transform: skew(20deg);
                     -o-transform: skew(20deg);
                     transform: skew(20deg);" href="#">Provinciales</a>
              </div>
              <div class="col-md-2" style="background: #ED553B;   -webkit-transform: skew(-20deg);-moz-transform: skew(-20deg);
               -ms-transform: skew(-20deg);
               -o-transform: skew(-20deg);
               transform: skew(-20deg);">
                    <a style="color: white;display: block;-webkit-transform: skew(20deg);-moz-transform: skew(20deg);
                     -ms-transform: skew(20deg);
                     -o-transform: skew(20deg);
                     transform: skew(20deg);" href="#">Regionales</a>
              </div>
              <div class="col-md-2" style="background: #F2B134;   -webkit-transform: skew(-20deg);-moz-transform: skew(-20deg);
               -ms-transform: skew(-20deg);
               -o-transform: skew(-20deg);
               transform: skew(-20deg);">
                    <a style="color: white;display: block;-webkit-transform: skew(20deg);-moz-transform: skew(20deg);
                     -ms-transform: skew(20deg);
                     -o-transform: skew(20deg);
                     transform: skew(20deg);" href="#">Sociales</a>
              </div>
              <div class="col-md-2" style="background: #47AB6C;   -webkit-transform: skew(-20deg);-moz-transform: skew(-20deg);
               -ms-transform: skew(-20deg);
               -o-transform: skew(-20deg);
               transform: skew(-20deg);">
                    <a style="color: white;display: block;-webkit-transform: skew(20deg);-moz-transform: skew(20deg);
                     -ms-transform: skew(20deg);
                     -o-transform: skew(20deg);
                     transform: skew(20deg);" href="#">Agro</a>
              </div>
          </div>
        </div>
        </nav>
        <main class="py-4">
            @yield('desarrollo')
        </main>
    </div>
</body>
</html>
