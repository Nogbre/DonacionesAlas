
@extends('adminlte::page')

@section('title','Crear donante')

@section('content_header')
    <h1>Crear donante</h1>
@stop

@section('content')
<form method="POST" action="{{ route('donantes.store') }}">
    @csrf
    @include('donantes.partials.form')
    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('donantes.index') }}" class="btn btn-light">Cancelar</a>
</form>
@stop