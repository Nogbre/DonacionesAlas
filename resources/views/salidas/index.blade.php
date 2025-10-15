@extends('adminlte::page')

@section('title', 'Salidas')

@section('content_header')
    <h1>Salidas</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Salidas</h3>
        </div>
        <div class="card-body">
            <p>Este es un stub de la vista de salidas. Reemplazar con contenido real cuando sea necesario.</p>
            <a href="{{ route('salidas.create') }}" class="btn btn-primary">Crear Salida</a>
        </div>
    </div>
</div>
@stop
