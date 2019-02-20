@extends('layouts.app')

@section('editando')

<div class="alert alert-danger text-center"><strong>Solo edite el campo que desea corregir!, si modifica algún otro campo deberá escribirlo nuevamente.</strong></div>
<form class="form-group" action="{{route('Noticia.update', ['id' => $noticia->id])}}" method="post" enctype="multipart/form-data">
  @csrf

<div class="container">
  <div class="alert alert-info"><strong>Título</strong></div>
   <input class="form-control" name="titulo" placeholder="{{$noticia->titulo}}" />
<br />
  <div class="alert alert-info"><strong>Subtitulo</strong></div>
    <input class="form-control" name="subtitulo" placeholder="{{$noticia->subtitulo}}" />
<br />
  <div class="alert alert-info mt-1"><strong>Cuerpo</strong></div>
    <textarea class="form-control" name="cuerpo" placeholder="{{$noticia->cuerpo}}"></textarea>

<br />
  <div class="alert alert-info mt-1"><strong>Imagen</strong></div>
  <div class="alert alert-danger">Actual </div>
  <img height="150" src="{{$noticia->img}}">
      <input class="btn btn-primary" name="fichero" type="file"  />
<br

<br />
  <div class="alert alert-info mt-1"><strong>Epigrafe</strong></div>
     <input name="epigrafe" class="form-control" placeholder="{{$noticia->epigrafe}}"/>
<br />
  <input class="btn btn-info mt-1" type="submit" name="boton" value="enviar correccion" />
  </div>
</form>
@endsection
