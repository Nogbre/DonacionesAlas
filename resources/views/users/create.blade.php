@extends('adminlte::page')

@section('title','Crear usuario')

@section('content_header')
    <h1>Crear usuario</h1>
@stop

@section('content')
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    @include('users.partials.form')
    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('users.index') }}" class="btn btn-light">Cancelar</a>
</form>
@stop