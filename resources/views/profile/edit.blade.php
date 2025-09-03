@extends('adminlte::page')

@section('title', 'Mi Perfil')

@section('content_header')
    <h1>Mi Perfil</h1>
@stop

@section('content')
    {{-- Mensajes de éxito/estado --}}
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        {{-- 1) Datos de cuenta --}}
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">Datos de cuenta</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
                                   class="form-control @error('name') is-invalid @enderror" autocomplete="name">
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                                   class="form-control @error('email') is-invalid @enderror" autocomplete="email">
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <button class="btn btn-primary">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- 2) Cambiar contraseña (Breeze espera current_password + password + password_confirmation) --}}
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">Cambiar contraseña</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <div class="mb-3">
                            <label>Contraseña actual</label>
                            <input type="password" name="current_password"
                                   class="form-control @error('current_password') is-invalid @enderror"
                                   autocomplete="current-password">
                            @error('current_password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Nueva contraseña</label>
                            <input type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   autocomplete="new-password">
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Confirmar nueva contraseña</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                   autocomplete="new-password">
                        </div>

                        <button class="btn btn-primary">Actualizar contraseña</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- 3) Eliminar cuenta (Breeze valida name="password" con la regla current_password) --}}
        <div class="col-md-6">
            <div class="card border-danger">
                <div class="card-header bg-danger text-white">Eliminar cuenta</div>
                <div class="card-body">
                    <p class="text-muted mb-3">
                        Esta acción es <strong>irreversible</strong>. Escribe tu contraseña para confirmar.
                    </p>
                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')

                        <div class="mb-3">
                            <label>Contraseña</label>
                            <input type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   autocomplete="current-password">
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <button class="btn btn-danger"
                                onclick="return confirm('¿Seguro que quieres eliminar tu cuenta?')">
                            Eliminar cuenta
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop