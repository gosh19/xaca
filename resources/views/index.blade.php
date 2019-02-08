@extends('layouts.app')

@section('noticias')

  <div class="container mt-3">
      <div class="row">
          <div class="col-md-8">
          <div class="header-destacada">
              <h4 class="titulo-destacada">Destacadas</h4>
          </div>
              <div class="titulo-noticia">
                @for($i = 0; $i < count($noticias); $i++)
                    @if($noticias[$i]['nombre'] = 'Destacadas')
                       @for($x = 0; $x < count($noticias[$i]['noticias']); $x++)
                      {{$noticias[$i]['noticias'][$x]['titulo']}}
                    @endfor
                    @endif
                @endfor
                </div>
              <p class="subtitulo-noticia">La Coalición Cívica volvió a poner la lupa sobre una iniciativa de la Casa Rosada, en este caso del Ministerio de Justicia que conduce Germán Garavano.</p>
              <img width="100%" src="img/cristina.jpg" />

              <div class="row mt-3">
                  <div class="col-md-6">
                  <div class="header-social">
                      <h4 class="titulo-social" >Sociales</h4>
                  </div>
                      <p class="titulo-noticia-bloque">El Riesgo País resta otro 3% y retrocede a niveles de tres meses atrás</p>
                      <p class="subtitulo-noticia-bloque">El indicador de JP Morgan cae a 629 puntos básicos, el más bajo desde el pasado 12 de noviembre. Desde el 28 de diciembre retrocedió más de 200 unidades.</p>
                      <img width="100%" src="img/bolsa.jpg" />
                  </div>
                  <div class="col-md-6">
                  <div class="header-agro">
                      <h4 class="titulo-agro" >Agro</h4>
                  </div>
                      <p class="titulo-noticia-bloque">El Riesgo País resta otro 3% y retrocede a niveles de tres meses atrás</p>
                      <p class="subtitulo-noticia-bloque">El indicador de JP Morgan cae a 629 puntos básicos, el más bajo desde el pasado 12 de noviembre. Desde el 28 de diciembre retrocedió más de 200 unidades.</p>
                      <img width="100%" src="img/bolsa.jpg" />
                  </div>


              </div>
          </div>

          <div class="col-md-4">
          <div class="header-nacional">
              <h4 class="titulo-nacional" >Nacionales</h4>
          </div>
              <p class="titulo-noticia-bloque">El Riesgo País resta otro 3% y retrocede a niveles de tres meses atrás</p>
              <p class="subtitulo-noticia-bloque">El indicador de JP Morgan cae a 629 puntos básicos, el más bajo desde el pasado 12 de noviembre. Desde el 28 de diciembre retrocedió más de 200 unidades.</p>
              <img width="100%" src="img/bolsa.jpg" />

              <div class="header-provincial mt-4">
                  <h4 class="titulo-provincial" >Provinciales</h4>
              </div>
                  <p class="titulo-noticia-bloque">Nuevo registro de mujeres aspirantes a choferes de colectivo.</p>
                  <p class="subtitulo-noticia-bloque">A partir de la demanda de una chofer de colectivo a tres empresas que se negaron a contratarla por ser mujer, la Secretaría de Trabajo presentó oficialmente un listado que las registra y que obliga a esas empresas a tener un cupo de mujeres al volante.</p>
                  <img width="100%" src="img/conductoras.jpg" />

          </div>

      </div>
  </div>

@endsection
