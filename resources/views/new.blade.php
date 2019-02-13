@extends('layouts.app')

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
      <p class="cuerpo-noticia">{{$noticia->cuerpo}}</p>



{{-- --}}



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
  </div>
  </div>
</div>


@endsection
