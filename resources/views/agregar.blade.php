
@extends('layouts.app')

@section('agregar')

  <div class="row justify-content-center">
    <a href="{{route('Noticia.modificar')}}" class="btn btn-danger btn-lg"> Editar / Modificar / Eliminar Noticias  </a>
  </div>

<div class="row justify-content-center">
  <a class="text-center btn btn-danger bg-danger mt-4" href="{{ route('logout') }}"
   onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
{{ __('Cerrar sesion') }}
</a>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>

<form action="{{ route('Noticia.store')}}" class="mt-3" method="POST" enctype="multipart/form-data">
@csrf
<div id="agregar"></div>
</form>
<div class="container mt-5">
  <div class="alert alert-dark text-center">
    Editar y administrar <strong>imágenes publicitarias</strong>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="container">
      <form class="form-group" action="{{route('Publicidad.update', ['id' => $publicidad[0]['id'], 'publi' => 1])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h4>Publicidad 1 Actual</h4>
        <img style="width:100%;" src="{{$publicidad[0]['publi1']}}" />
        <h6 class="text-secondary">Si desea reemplazar la imagen seleccione la imagen a continuación.</h6>
        <input class="btn btn-primary mt-2" name="fichero1" type="file"  />
        <input type="submit" class="btn btn-danger mt-4" value="Reemplazar publicidad">
      </form>
  </div>
</div>
</div>


<div class="col-md-4">
  <div class="card">
    <div class="container">
  <form class="form-group" action="{{route('Publicidad.update', ['id' => $publicidad[0]['id'], 'publi' => 2])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4>Publicidad 2 Actual</h4>
    <img style="width:100%;" src="{{$publicidad[0]['publi2']}}" />
    <h6 class="text-secondary">Si desea reemplazar la imagen seleccione la imagen a continuación.</h6>
    <input class="btn btn-primary mt-2" name="fichero2" type="file"  />
    <input type="submit" class="btn btn-danger mt-4" value="Reemplazar publicidad">
  </form>
</div>
</div>
</div>

<div class="col-md-4">
  <div class="card">
    <div class="container">
  <form class="form-group" action="{{route('Publicidad.update', ['id' => $publicidad[0]['id'], 'publi' => 3])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4>Publicidad 3 Actual</h4>
    <img style="width:100%;" src="{{$publicidad[0]['publi3']}}" />
    <h6 class="text-secondary">Si desea reemplazar la imagen seleccione la imagen a continuación.</h6>
    <input class="btn btn-primary mt-2" name="fichero3" type="file"  />
    <input type="submit" class="btn btn-danger mt-4" value="Reemplazar publicidad">
  </form>
</div>
</div>
</div>
<div class="row mt-5">
<div class="col-md-4">
  <div class="card">
    <div class="container">
  <form class="form-group" action="{{route('Publicidad.update', ['id' => $publicidad[0]['id'], 'publi' => 4])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4>Publicidad 4 Actual</h4>
    <img style="width:100%;" src="{{$publicidad[0]['publi4']}}" />
    <h6 class="text-secondary">Si desea reemplazar la imagen seleccione la imagen a continuación.</h6>
    <input class="btn btn-primary mt-2" name="fichero4" type="file"  />
    <input type="submit" class="btn btn-danger mt-4" value="Reemplazar publicidad">
  </form>
</div>
</div>
</div>

<div class="col-md-4">
  <div class="card">
    <div class="container">
  <form class="form-group" action="{{route('Publicidad.update', ['id' => $publicidad[0]['id'], 'publi' => 5])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4>Publicidad 5 Actual</h4>
    <img style="width:100%;" src="{{$publicidad[0]['publi5']}}" />
    <h6 class="text-secondary">Si desea reemplazar la imagen seleccione la imagen a continuación.</h6>
    <input class="btn btn-primary mt-2" name="fichero5" type="file"  />
    <input type="submit" class="btn btn-danger mt-4" value="Reemplazar publicidad">
  </form>
</div>
</div>
</div>

</div>




@endsection
