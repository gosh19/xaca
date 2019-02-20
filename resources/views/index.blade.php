@extends('layouts.app')

@section('noticias')

  <div class="container mt-3">
      <div class="row">
          <div class="col-md-8">
          <div class="header-destacada">
              <h4 class="titulo-destacada">Destacadas</h4>
          </div>
                @for($i = 0; $i < count($destacada); $i++)
                    @if($destacada[$i]['nombre'] = 'Destacadas')
                       @for($x = 0; $x < count($destacada[$i]['noticias']); $x++)
                         @if($x == count($destacada[$i]['noticias'])-1)
                            <p class="text-secondary mt-2">{{$destacada[$i]['noticias'][$x]['created_at']}}</p>
                            <a style="color: black;" href="{{route('Noticia.showNew', ['id' => $destacada[$i]['noticias'][$x]['id']])}}"><div class="titulo-noticia"> {{$destacada[$i]['noticias'][$x]['titulo']}}</div></a>
                            <p class="subtitulo-noticia mt-3">{{$destacada[$i]['noticias'][$x]['subtitulo']}}</p>
                            <img width="100%" src="{{ $destacada[$i]['noticias'][$x]['img']}}" />
                          @endif
                    @endfor
                    @endif
                @endfor

              <div class="row mt-3">
                  <div class="col-md-6">
                  <div class="header-social">
                      <h4 class="titulo-social" >Sociales</h4>
                  </div>
                  @for($i = 0; $i < count($social); $i++)
                      @if($social[$i]['nombre'] = 'Agro')
                         @for($x = 0; $x < count($social[$i]['noticias']); $x++)
                           @if($x == count($social[$i]['noticias'])-1)
                               <p class="text-secondary mt-2">{{$social[$i]['noticias'][$x]['created_at']}}</p>
                               <img width="100%" class="mt-2" src="{{ $social[$i]['noticias'][$x]['img']}}" />
                              <a style="color: black;" href="{{route('Noticia.showNew', ['id' => $social[$i]['noticias'][$x]['id']])}}"><p class="titulo-noticia-bloque"> {{$social[$i]['noticias'][$x]['titulo']}}</p></a>
                              <p class="subtitulo-noticia-bloque">{{$social[$i]['noticias'][$x]['subtitulo']}}</p>
                            @endif
                        @endfor
                      @endif
                  @endfor

                  </div>
                  <div class="col-md-6">
                  <div class="header-agro">
                      <h4 class="titulo-agro" >Agro</h4>
                  </div>
                  @for($i = 0; $i < count($agro); $i++)
                      @if($agro[$i]['nombre'] = 'Agro')
                         @for($x = 0; $x < count($agro[$i]['noticias']); $x++)
                           @if($x == count($agro[$i]['noticias'])-1)
                              <p class="text-secondary mt-2">{{$agro[$i]['noticias'][$x]['created_at']}}</p>
                              <img width="100%" class="mt-2" src="{{ $agro[$i]['noticias'][$x]['img']}}" />
                              <a style="color: black;" href="{{route('Noticia.showNew', ['id' => $agro[$i]['noticias'][$x]['id']])}}"><p class="titulo-noticia-bloque"> {{$agro[$i]['noticias'][$x]['titulo']}}</p></a>
                              <p class="subtitulo-noticia-bloque">{{$agro[$i]['noticias'][$x]['subtitulo']}}</p>

                            @endif
                      @endfor
                      @endif
                  @endfor
                  </div>
                  @for($i = 0; $i < 2; $i++)

                      @if($variadas[$i]['nombre'] = 'Provincial')
                         @for($x = 0; $x < 2; $x++)
                           @if($x == count($variadas[$i]['noticias'])-1)
                             <div class="col-md-6">
                               <p class="text-secondary mt-2">{{$variadas[$i]['noticias'][$x]['created_at']}}</p>
                              <img width="100%" src="{{ $variadas[$i]['noticias'][$x]['img']}}" />
                              <a style="color: black;" href="{{route('Noticia.showNew', ['id' => $variadas[$i]['noticias'][$x]['id']])}}"><p class="titulo-noticia-bloque"> {{$variadas[$i]['noticias'][$x]['titulo']}}</p></a>
                              <p class="subtitulo-noticia-bloque">{{$variadas[$i]['noticias'][$x]['subtitulo']}}</p>
                            </div>
                            @endif
                      @endfor
                      @endif

                  @endfor
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
                     <p class="text-secondary mt-2">{{$nacional[$i]['noticias'][$x]['created_at']}}</p>
                      <a style="color: black;" href="{{route('Noticia.showNew', ['id' => $nacional[$i]['noticias'][$x]['id']])}}"><p class="titulo-noticia-bloque"> {{$nacional[$i]['noticias'][$x]['titulo']}}</p><a>
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
                         <p class="text-secondary mt-2">{{$provincial[$i]['noticias'][$x]['created_at']}}</p>
                          <a style="color: black;" href="{{route('Noticia.showNew', ['id' => $provincial[$i]['noticias'][$x]['id']])}}"><p class="titulo-noticia-bloque"> {{$provincial[$i]['noticias'][$x]['titulo']}}</p></a>
                          <p class="subtitulo-noticia-bloque">{{$provincial[$i]['noticias'][$x]['subtitulo']}}</p>
                          <img width="100%" src="{{ $provincial[$i]['noticias'][$x]['img']}}" />
                        @endif
                  @endfor
                  @endif
              @endfor

              <img width="100%" id="publi1" src="{{$publicidad[0]['publi1']}}" style="margin-top: 30px;" />
              <img width="100%" id="publi2"src="{{$publicidad[0]['publi2']}}" style="margin-top: 30px;" />
              <img width="100%" id="publi3" src="{{$publicidad[0]['publi3']}}" style="margin-top: 30px;" />
              <img width="100%" id="publi4" src="{{$publicidad[0]['publi4']}}" style="margin-top: 30px;" />
              <img width="100%" id="publi5" src="{{$publicidad[0]['publi5']}}" style="margin-top: 30px;" />
          </div>

      </div>

      </div>
  </div>

@endsection
