
@extends('adminlte::page')

@section('title','Editar donante')

@section('content_header')
    <h1>Editar donante</h1>
@stop

@section('content')
<form method="POST" action="{{ route('donantes.update', $donante) }}">
    @csrf
    @method('PUT')
    @include('donantes.partials.form')
    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('donantes.index') }}" class="btn btn-light">Cancelar</a>
</form>
@stop