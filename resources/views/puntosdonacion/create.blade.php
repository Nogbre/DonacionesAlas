
@extends('adminlte::page')

@section('title','Crear punto de donación')

@section('content_header')
    <h1>Crear punto de donación</h1>
@stop

@section('content')
<form method="POST" action="{{ route('puntosdonacion.store') }}">
    @csrf
    @include('puntosdonacion.partials.form')
    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('puntosdonacion.index') }}" class="btn btn-light">Cancelar</a>
</form>
@stop