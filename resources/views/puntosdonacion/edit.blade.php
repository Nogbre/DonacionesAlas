@extends('adminlte::page')

@section('title','Editar punto de donación')

@section('content_header')
    <h1>Editar punto de donación</h1>
@stop

@section('content')
<form method="POST" action="{{ route('puntosdonacion.update', $puntosdonacion) }}">
    @csrf
    @method('PUT')
    @include('puntosdonacion.partials.form')
    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('puntosdonacion.index') }}" class="btn btn-light">Cancelar</a>
</form>
@stop