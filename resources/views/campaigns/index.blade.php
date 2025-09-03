@extends('adminlte::page')

@section('title', 'Campañas')

@section('content_header')
  <h1>Campañas</h1>
@stop

@section('content')
@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('campaigns.create') }}" class="btn btn-primary mb-3">+ Nueva campaña</a>

<div class="card">
  <div class="card-body p-0">
    <table class="table table-striped mb-0">
      <thead>
        <tr>
          <th style="width:120px">Imagen</th>
          <th>Título</th>
          <th>Descripción</th>
          <th class="text-end">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @forelse($campaigns as $c)
          <tr>
            <td>
              @if($c->image_path)
                <img src="{{ asset('storage/'.$c->image_path) }}" style="height:60px;object-fit:cover;">
              @else
                <span class="text-muted">Sin imagen</span>
              @endif
            </td>
            <td>{{ $c->title }}</td>
            <td class="text-truncate" style="max-width:400px">{{ $c->description }}</td>
            <td class="text-end">
              <a class="btn btn-sm btn-outline-secondary" href="{{ route('campaigns.show',$c) }}">Ver</a>
              <a class="btn btn-sm btn-outline-primary" href="{{ route('campaigns.edit',$c) }}">Editar</a>
              <form action="{{ route('campaigns.destroy',$c) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('¿Eliminar esta campaña?')">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-outline-danger">Borrar</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="4" class="text-center p-4">Aún no hay campañas.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

<div class="mt-3">
  {{ $campaigns->links() }}
</div>
@stop
