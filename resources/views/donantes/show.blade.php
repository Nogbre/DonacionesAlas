@extends('adminlte::page')

@section('title','Detalle Donante')

@section('content_header')
    <h1>Detalle Donante</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>Nombres:</strong> {{ $donante->nombres }}</p>
        <p><strong>Apellidos:</strong> {{ $donante->apellidos }}</p>
        <p><strong>Correo:</strong> {{ $donante->correo }}</p>
        <p><strong>Teléfono:</strong> {{ $donante->telefono }}</p>
        <p><strong>Usuario:</strong> {{ $donante->usuario }}</p>
    </div>
</div>
<a href="{{ route('donantes.index') }}" class="btn btn-light">Volver</a>
@stop