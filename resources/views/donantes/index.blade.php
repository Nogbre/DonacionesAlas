@extends('adminlte::page')

@section('title','Donantes')

@section('content_header')
    <h1>Donantes</h1>
    <a href="{{ route('donantes.create') }}" class="btn btn-success">Nuevo Donante</a>
@stop

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($donantes as $donante)
        <tr>
            <td>{{ $donante->id }}</td>
            <td>{{ $donante->nombres }}</td>
            <td>{{ $donante->apellidos }}</td>
            <td>{{ $donante->correo }}</td>
            <td>{{ $donante->telefono }}</td>
            <td>{{ $donante->usuario }}</td>
            <td>
                <a href="{{ route('donantes.edit', $donante) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('donantes.destroy', $donante) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar donante?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop