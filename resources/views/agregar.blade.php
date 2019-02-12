
@extends('layouts.app')

@section('agregar')

<form action="{{ route('Noticia.store')}}" method="POST" enctype="multipart/form-data">
@csrf

<div id="agregar"></div>

</form>

@endsection
