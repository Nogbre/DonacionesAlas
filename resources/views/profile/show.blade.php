@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
    <h1>Mi Perfil</h1>
@stop

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

{{-- Datos de cuenta --}}
<div class="card mb-3">
    <div class="card-header">Datos de cuenta</div>
    <div class="card-body">
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}"
                       class="form-control @error('name') is-invalid @enderror">
                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}"
                       class="form-control @error('email') is-invalid @enderror">
                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <button class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>

{{-- Cambiar contraseña --}}
<div class="card mb-3">
    <div class="card-header">Cambiar contraseña</div>
    <div class="card-body">
        <form method="POST" action="{{ route('profile.password.update') }}">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Contraseña actual</label>
                <input type="password" name="current_password"
                       class="form-control @error('current_password') is-invalid @enderror">
                @error('current_password') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label>Nueva contraseña</label>
                <input type="password" name="password"
                       class="form-control @error('password') is-invalid @enderror">
                @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label>Confirmar nueva contraseña</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>
            <button class="btn btn-primary">Cambiar contraseña</button>
        </form>
    </div>
</div>

{{-- Eliminar cuenta --}}
<div class="card mb-3">
    <div class="card-header">Eliminar cuenta</div>
    <div class="card-body">
        <form method="POST" action="{{ route('profile.destroy') }}">
            @csrf @method('DELETE')
            <div class="mb-3">
                <label>Confirma tu contraseña</label>
                <input type="password" name="current_password"
                       class="form-control @error('current_password') is-invalid @enderror">
                @error('current_password') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <button class="btn btn-danger"
                    onclick="return confirm('¿Seguro que quieres eliminar tu cuenta?')">
                Eliminar cuenta
            </button>
        </form>
    </div>
</div>
@stop