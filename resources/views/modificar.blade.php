@extends('layouts.app')

@section('modificar')

<div class="container">
  <div class="row">
@for($i = 0; $i < count($noticias); $i++)

<div class="col-md-4">
  <div class="card">
    <img class="card-img-top" src="{{$noticias[$i]['img']}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$noticias[$i]['titulo']}}</h5>
      <a href="{{route('Noticia.editar', ['id' => $noticias[$i]['id']])}}" class="btn btn-primary">Editar</a>
    </div>
  </div>
</div>

@endfor
</div>
{{$noticias->links()}}
</div>
@endsection
