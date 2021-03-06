<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>xAca - Portal de noticias</title>

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-noticias.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/hlw7wjt.css">

</head>
<body>
    <div id="app">
          <div class="barra-clima bg-dark">
              <div class="container">

                  <div class="text-white"></div>
          </div>
          </div>

          <div class="pos-f-t navbar-responsive" >
            <div class="collapse" id="navbarToggleExternalContent">
              <div class="bg-light p-4">
                <h4 class="text-dark text-center">Categorías en xAcá</h4>
                <h6 class="text-dark text-center">Destacados </h6>
                <h6 class="text-dark text-center">Nacionales </h6>
                <h6 class="text-dark text-center">Provinciales </h6>
                <h6 class="text-dark text-center">Regionales </h6>
                <h6 class="text-dark text-center">Sociales </h6>
                <h6 class="text-dark text-center">Agro </h6>
              </div>
            </div>
            <nav class="navbar navbar-dark bg-secondary">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <img class="logo-img-responsive" src="img/logo.png" />
            </nav>
          </div>

          <div class="container">
              <div id="logo"><img class="logo-img" src="img/logo.png" /></div>
          </div>

        <nav id="desktop-menu" class="navbar">
          <div class="container">
            <div class="row text-center" style="width:100%; font-family: 'Open Sans', sans-serif;font-size: 18px;font-weight: bold">
              <div class="col-md-2 fondo-menu" style="background: #112f41;">
                    <a class="link-menu" href="{{ route('Noticia.show', ['id' => 'destacadas'])}}">Destacadas</a>
              </div>
              <div class="col-md-2 fondo-menu" style="background: #0894A1;">
                    <a href="{{ route('Noticia.show', ['id' => 'nacionales'])}}" class="link-menu">Nacionales</a>
              </div>
              <div class="col-md-2 fondo-menu" style="background: #b51808;">
                    <a class="link-menu" href="{{ route('Noticia.show', ['id' => 'provinciales'])}}">Provinciales</a>
              </div>
              <div class="col-md-2 fondo-menu" style="background: #ED553B;">
                    <a class="link-menu" href="{{ route('Noticia.show', ['id' => 'regionales'])}}">Regionales</a>
              </div>
              <div class="col-md-2 fondo-menu" style="background: #F2B134;">
                    <a class="link-menu" href="{{ route('Noticia.show', ['id' => 'sociales'])}}">Sociales</a>
              </div>
              <div class="col-md-2 fondo-menu" style="background: #47AB6C;">
                    <a class="link-menu" href="{{ route('Noticia.show', ['id' => 'agros'])}}">Agro</a>
              </div>
          </div>
        </div>
        </nav>
        <main class="py-4">
            @yield('noticias')
            @yield('agregar')
            @yield('modificar')
            @yield('editando')
            @yield('content')
        </main>
    </div>

    <div id="footer">
      <div class="row">

        <div class="col-md-12" style="border-width: 2px;border-color: #d0d0d0;border-style: solid;">
    <div class="container">
          <div class="row">
            <div class="col-md-4">
              <img src="img/logo.png" style="margin-top: 15px;margin-bottom: 15px;" />
            </div>
            <div class="col-md-4" style="margin-top: 15px;margin-bottom: 15px;">
              <div class="row justify-content-center">
              <ul style="list-style: none;">
                <li><a href="{{ route('Noticia.show', ['id' => 'destacadas'])}}">Destacadas</a></li>
                <li><a href="{{ route('Noticia.show', ['id' => 'nacionales'])}}">Nacionales</a></li>
                <li><a href="{{ route('Noticia.show', ['id' => 'provinciales'])}}">Provinciales</a></li>
                <li><a href="{{ route('Noticia.show', ['id' => 'regionales'])}}">Regionales</a></li>
                <li><a href="{{ route('Noticia.show', ['id' => 'sociales'])}}">Sociales</a></li>
                <li><a href="{{ route('Noticia.show', ['id' => 'agros'])}}">Agro</a></li>
              </ul>
            </div>
            </div>
            <div class="col-md-4">
              <div class="row justify-content-center mt-5">
                <img height="70" src="img/facebook.png" class="mr-2">
                <img height="70" src="img/twitter.png" class="mr-2">
                <img height="70" src="img/youtube.png">
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
</body>
</html>
