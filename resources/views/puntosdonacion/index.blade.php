
@extends('adminlte::page')

@section('title','Puntos de Donación')

@section('content_header')
    <h1>Puntos de Donación</h1>
    <a href="{{ route('puntosdonacion.create') }}" class="btn btn-success">Nuevo Punto</a>
@stop

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Longitud</th>
            <th>Latitud</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($puntos as $puntosdonacion)
        <tr>
            <td>{{ $puntosdonacion->id_punto }}</td>
            <td>{{ $puntosdonacion->nombre_punto }}</td>
            <td>{{ $puntosdonacion->longitud }}</td>
            <td>{{ $puntosdonacion->latitud }}</td>
            <td>
                <a href="{{ route('puntosdonacion.edit', $puntosdonacion) }}" class="btn btn-warning btn-sm">Editar</a>
                <a href="{{ route('puntosdonacion.show', $puntosdonacion) }}" class="btn btn-info btn-sm">Ver</a>
                <form action="{{ route('puntosdonacion.destroy', $puntosdonacion) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar punto?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop