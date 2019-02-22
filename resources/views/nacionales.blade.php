@extends('layouts.app')

@section('noticias')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-8">
          <div class="header-nacional">
              <h4 class="titulo-nacional" >Nacionales</h4>
        </div>
              @for($i = 0; $i < count($destacada); $i++)
                  @if($destacada[$i]['nombre'] = 'Nacionales')
                     @for($x = 0; $x < count($destacada[$i]['noticias']); $x++)
                          <div class="titulo-noticia"> {{$destacada[$i]['noticias'][$x]['titulo']}}</div>
                          <p class="subtitulo-noticia mt-3">{{$destacada[$i]['noticias'][$x]['subtitulo']}}</p>
                          <img width="100%" src="{{ $destacada[$i]['noticias'][$x]['img']}}" />
                  @endfor
                  @endif
              @endfor

            <div class="row mt-3">
                <div class="col-md-6">
                <div class="header-social">
                    <h4 class="titulo-social" >Sociales</h4>
                </div>
                @for($i = 0; $i < count($agro); $i++)
                    @if($agro[$i]['nombre'] = 'Agro')
                       @for($x = 0; $x < count($agro[$i]['noticias']); $x++)
                         @if($x == count($agro[$i]['noticias'])-1)
                            <img width="100%" class="mt-2" src="img/bolsa.jpg" />
                            <p class="titulo-noticia-bloque"> {{$agro[$i]['noticias'][$x]['titulo']}}</p>
                            <p class="subtitulo-noticia-bloque">{{$agro[$i]['noticias'][$x]['subtitulo']}}</p>

                          @endif
                    @endfor
                    @endif
                @endfor

                </div>
                <div class="col-md-6">
                <div class="header-agro">
                    <h4 class="titulo-agro" >Agro</h4>
                </div>
                @for($i = 0; $i < count($social); $i++)
                    @if($social[$i]['nombre'] = 'Agro')
                       @for($x = 0; $x < count($social[$i]['noticias']); $x++)
                         @if($x == count($social[$i]['noticias'])-1)
                             <img width="100%" class="mt-2" src="img/bolsa.jpg" />
                            <p class="titulo-noticia-bloque"> {{$social[$i]['noticias'][$x]['titulo']}}</p>
                            <p class="subtitulo-noticia-bloque">{{$social[$i]['noticias'][$x]['subtitulo']}}</p>
                          @endif
                      @endfor
                    @endif
                @endfor
                </div>
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
                    <p class="titulo-noticia-bloque"> {{$nacional[$i]['noticias'][$x]['titulo']}}</p>
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
                        <p class="titulo-noticia-bloque"> {{$provincial[$i]['noticias'][$x]['titulo']}}</p>
                        <p class="subtitulo-noticia-bloque">{{$provincial[$i]['noticias'][$x]['subtitulo']}}</p>
                        <img width="100%" src="{{ $provincial[$i]['noticias'][$x]['img']}}" />
                      @endif
                @endfor
                @endif
            @endfor
        </div>

    </div>
    <div class="row">

      <div class="col-md-4">

      </div>

      <div class="col-md-4">
      </div>
      <div class="col-md-4">
      </div>

    </div>
</div>

@endsection
