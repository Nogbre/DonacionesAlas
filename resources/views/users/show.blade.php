@extends('adminlte::page')

@section('title','Detalle usuario')

@section('content_header')
    <h1>Detalle usuario</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $user->id }}</p>
        <p><strong>Nombre:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Creado:</strong> {{ $user->created_at }}</p>
        <a href="{{ route('users.index') }}" class="btn btn-light">Volver</a>
    </div>
</div>
@stop