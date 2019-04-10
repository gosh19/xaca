@extends('layouts.app')


<head>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://xaca.com.ar/New?id={{$noticia->id}}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="{{$noticia->titulo}}" />
  <meta property="og:description"   content="{{$noticia->subtitulo}}" />
  <meta property="og:image"         content="http://xaca.com.ar{{$noticia->img}}" />
</head>


@section('noticias')
<div class="container mt-3">
<div class="row">
  <div class="col-md-8">
  <div class="header-destacada">
      <h4 class="titulo-destacada">Noticia Completa xAcá!</h4>
    </div>
      <div class="titulo-noticia"> {{$noticia->titulo}}</div></a>
      <p class="subtitulo-noticia mt-3">{{$noticia->subtitulo}}</p>
      <img width="100%" src="{{ $noticia->img}}" />
      <p class="epigrafe-noticia">{{$noticia->epigrafe}}</p>
      @if($noticia->video)
        <p class="titulo-noticia text-center" style="font-size: 30px;">Video</p>

          <video id="my-video" class="video-js" controls preload="auto" width="100%" height="300" data-setup="{}">
              <source src="{{$noticia->video}}" type='video/mp4'>
          </video>

        <div class="row justify-content-center">

        </div>
      @endif
      <p class="cuerpo-noticia mt-3">{{$noticia->cuerpo}}</p>



{{-- COMPARTIR --}}

<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button"
    data-href="http://xaca.com.ar/New?id={{$noticia->id}}"
    data-layout="button_count">
  </div>

{{-- COMENTARIOS --}}

      <div class="comentarios">
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="{{url()->current(). $id}}" data-width="100%" data-numposts="1"></div>
      </div>

  </div>
  <div class="col-md-4">
  <div class="header-nacional">
      <h4 class="titulo-nacional" >Nacionales</h4>
  </div>
  @for($i = 0; $i < count($nacional); $i++)
      @if($nacional[$i]['nombre'] = 'Nacional')
         @for($x = 0; $x < count($nacional[$i]['noticias']); $x++)
           @if($x == count($nacional[$i]['noticias'])-1)
              <a style="color: black;" href="{{route('Noticia.showNew', ['id' => $nacional[$i]['noticias'][$x]['id']])}}"><p class="titulo-noticia-bloque"> {{$nacional[$i]['noticias'][$x]['titulo']}}</p></a>
              <p class="subtitulo-noticia-bloque">{{$nacional[$i]['noticias'][$x]['subtitulo']}}</p>
              <img width="100%" src="{{ $nacional[$i]['noticias'][$x]['img']}}" />
            @endif
      @endfor
      @endif
  @endfor

      <div class="header-provincial mt-4">
          <h4 class="titulo-provincial" >Provinciales</h4>
      </div>
      @for($i = 0; $i < count($provincial); $i++)
          @if($provincial[$i]['nombre'] = 'Provincial')
             @for($x = 0; $x < count($provincial[$i]['noticias']); $x++)
               @if($x == count($provincial[$i]['noticias'])-1)
                  <a style="color: black;" href="{{route('Noticia.showNew', ['id' => $provincial[$i]['noticias'][$x]['id']])}}"><p class="titulo-noticia-bloque"> {{$provincial[$i]['noticias'][$x]['titulo']}}</p></a>
                  <p class="subtitulo-noticia-bloque">{{$provincial[$i]['noticias'][$x]['subtitulo']}}</p>
                  <img width="100%" src="{{ $provincial[$i]['noticias'][$x]['img']}}" />
                @endif
          @endfor
          @endif
      @endfor

      @for ($i=0; $i < count($publicidad); $i++)
        <img width="100%" id="publi1" src="{{$publicidad[$i]['publi1']}}" style="margin-top: 30px;" />
        <img width="100%" id="publi2" src="{{$publicidad[$i]['publi2']}}" style="margin-top: 30px;" />
        <img width="100%" id="publi3" src="{{$publicidad[$i]['publi3']}}" style="margin-top: 30px;" />
        <img width="100%" id="publi4" src="{{$publicidad[$i]['publi4']}}" style="margin-top: 30px;" />
        <img width="100%" id="publi5" src="{{$publicidad[$i]['publi5']}}" style="margin-top: 30px;" />
      @endfor

  </div>
  </div>
</div>


@endsection
@extends('layouts.app')


<head>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://xaca.com.ar/New?id={{$noticia->id}}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="{{$noticia->titulo}}" />
  <meta property="og:description"   content="{{$noticia->subtitulo}}" />
  <meta property="og:image"         content="http://xaca.com.ar{{$noticia->img}}" />
</head>


@section('noticias')
<div class="container mt-3">
<div class="row">
  <div class="col-md-8">
  <div class="header-destacada">
      <h4 class="titulo-destacada">Noticia Completa xAcá!</h4>
    </div>
      <div class="titulo-noticia"> {{$noticia->titulo}}</div></a>
      <p class="subtitulo-noticia mt-3">{{$noticia->subtitulo}}</p>
      <img width="100%" src="{{ $noticia->img}}" />
      <p class="epigrafe-noticia">{{$noticia->epigrafe}}</p>
      @if($noticia->video)
        <p class="titulo-noticia text-center" style="font-size: 30px;">Video</p>

          <video id="my-video" class="video-js" controls preload="auto" width="100%" height="300" data-setup="{}">
              <source src="{{$noticia->video}}" type='video/mp4'>
          </video>

        <div class="row justify-content-center">

        </div>
      @endif
      <p class="cuerpo-noticia mt-3">{{$noticia->cuerpo}}</p>



{{-- COMPARTIR --}}

<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button"
    data-href="http://xaca.com.ar/New?id={{$noticia->id}}"
    data-layout="button_count">
  </div>

{{-- COMENTARIOS --}}

      <div class="comentarios">
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="{{url()->current(). $id}}" data-width="100%" data-numposts="1"></div>
      </div>

  </div>
  <div class="col-md-4">
  <div class="header-nacional">
      <h4 class="titulo-nacional" >Nacionales</h4>
  </div>
  @for($i = 0; $i < count($nacional); $i++)
      @if($nacional[$i]['nombre'] = 'Nacional')
         @for($x = 0; $x < count($nacional[$i]['noticias']); $x++)
           @if($x == count($nacional[$i]['noticias'])-1)
              <a style="color: black;" href="{{route('Noticia.showNew', ['id' => $nacional[$i]['noticias'][$x]['id']])}}"><p class="titulo-noticia-bloque"> {{$nacional[$i]['noticias'][$x]['titulo']}}</p></a>
              <p class="subtitulo-noticia-bloque">{{$nacional[$i]['noticias'][$x]['subtitulo']}}</p>
              <img width="100%" src="{{ $nacional[$i]['noticias'][$x]['img']}}" />
            @endif
      @endfor
      @endif
  @endfor

      <div class="header-provincial mt-4">
          <h4 class="titulo-provincial" >Provinciales</h4>
      </div>
      @for($i = 0; $i < count($provincial); $i++)
          @if($provincial[$i]['nombre'] = 'Provincial')
             @for($x = 0; $x < count($provincial[$i]['noticias']); $x++)
               @if($x == count($provincial[$i]['noticias'])-1)
                  <a style="color: black;" href="{{route('Noticia.showNew', ['id' => $provincial[$i]['noticias'][$x]['id']])}}"><p class="titulo-noticia-bloque"> {{$provincial[$i]['noticias'][$x]['titulo']}}</p></a>
                  <p class="subtitulo-noticia-bloque">{{$provincial[$i]['noticias'][$x]['subtitulo']}}</p>
                  <img width="100%" src="{{ $provincial[$i]['noticias'][$x]['img']}}" />
                @endif
          @endfor
          @endif
      @endfor

      @for ($i=0; $i < count($publicidad); $i++)
        <img width="100%" id="publi1" src="{{$publicidad[$i]['publi1']}}" style="margin-top: 30px;" />
        <img width="100%" id="publi2" src="{{$publicidad[$i]['publi2']}}" style="margin-top: 30px;" />
        <img width="100%" id="publi3" src="{{$publicidad[$i]['publi3']}}" style="margin-top: 30px;" />
        <img width="100%" id="publi4" src="{{$publicidad[$i]['publi4']}}" style="margin-top: 30px;" />
        <img width="100%" id="publi5" src="{{$publicidad[$i]['publi5']}}" style="margin-top: 30px;" />
      @endfor

  </div>
  </div>
</div>


@endsection
