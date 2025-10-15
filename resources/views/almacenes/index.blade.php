@extends('adminlte::page')

@section('title', 'Almacenes')

@section('content_header')
    <h1>Almacenes</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Almacenes</h3>
        </div>
        <div class="card-body">
            <p>Este es un stub de la vista de almacenes. Reemplazar con contenido real cuando sea necesario.</p>
            <a href="{{ route('almacenes.create') }}" class="btn btn-primary">Crear Almacén</a>
        </div>
    </div>
</div>
@stop
