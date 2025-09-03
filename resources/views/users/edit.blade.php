@extends('adminlte::page')

@section('title','Editar usuario')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')
<form method="POST" action="{{ route('users.update',$user) }}">
    @csrf @method('PUT')
    @include('users.partials.form')
    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('users.index') }}" class="btn btn-light">Cancelar</a>
</form>
@stop