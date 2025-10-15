@extends('adminlte::page')

@section('title','Gestión de Usuarios')

@section('css')
<style>
  /* Small helpers to mimic the design */
  .users-search-row .form-control { min-height: 46px; }
  .users-table .table thead th { background: linear-gradient(180deg,#eef6fb,#f8fbff); }
  .badge-estado { border-radius: 999px; padding: .35rem .6rem; font-weight:600; }
</style>
@stop

@section('content_header')
  <h1 class="m-0 text-dark">Gestión de Usuarios</h1>
@stop

@section('content')
  <div class="container-fluid">
    <div class="card card-outline card-plain">
      <div class="card-body">
        <div class="row align-items-center users-search-row">
          <div class="col-lg-6 col-md-12 mb-2">
            <div class="input-group input-group-lg">
              <input type="search" class="form-control" placeholder="Buscar usuario..." aria-label="Buscar usuario">
              <div class="input-group-append">
                <button class="btn btn-primary">Buscar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-2">
            <select class="form-control">
              <option>Todos los roles</option>
              <option>Administrador</option>
              <option>Almacenista</option>
              <option>Voluntario</option>
            </select>
          </div>

          <div class="col-lg-3 col-md-6 text-lg-right text-md-left">
            <a href="{{ route('users.create') }}" class="btn btn-success">+ Agregar Usuario</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card users-table">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Estado</th>
                <th class="text-right">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @isset($users)
                @forelse($users as $user)
                  <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username ?? preg_replace('/@.+$/','', $user->email) }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name ?? ($user->role ?? '—') }}</td>
                    <td>
                      @if(optional($user)->active)
                        <span class="badge badge-success badge-estado">ACTIVO</span>
                      @else
                        <span class="badge badge-secondary badge-estado">INACTIVO</span>
                      @endif
                    </td>
                    <td class="text-right">
                      <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary mr-1">Editar</a>
                      <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('¿Eliminar usuario?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="6" class="text-center text-muted">No hay usuarios para mostrar.</td>
                  </tr>
                @endforelse
              @else
                {{-- Sample rows (mirror screenshot) --}}
                <tr>
                  <td>Francoa Aguileraa Escobar</td>
                  <td>franc0123</td>
                  <td>franc0123@gmail.com</td>
                  <td>Administrador</td>
                  <td><span class="badge badge-success badge-estado">ACTIVO</span></td>
                  <td class="text-right">
                    <a href="#" class="btn btn-sm btn-primary mr-1">Editar</a>
                    <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                  </td>
                </tr>
                <tr>
                  <td>Brad Torrez</td>
                  <td>esobrad</td>
                  <td>esobrad@gmail.com</td>
                  <td>Administrador</td>
                  <td><span class="badge badge-success badge-estado">ACTIVO</span></td>
                  <td class="text-right">
                    <a href="#" class="btn btn-sm btn-primary mr-1">Editar</a>
                    <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                  </td>
                </tr>
                <tr>
                  <td>Mateo Gonzales Ortiz</td>
                  <td>mateo123</td>
                  <td>mateo123@gmail.com</td>
                  <td>Almacenista</td>
                  <td><span class="badge badge-success badge-estado">ACTIVO</span></td>
                  <td class="text-right">
                    <a href="#" class="btn btn-sm btn-primary mr-1">Editar</a>
                    <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                  </td>
                </tr>
                <tr>
                  <td>Helder Nobre Antelo</td>
                  <td>helder123</td>
                  <td>helder123@gmail.com</td>
                  <td>Voluntario</td>
                  <td><span class="badge badge-success badge-estado">ACTIVO</span></td>
                  <td class="text-right">
                    <a href="#" class="btn btn-sm btn-primary mr-1">Editar</a>
                    <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                  </td>
                </tr>
                <tr>
                  <td>Markus Joao Rojas</td>
                  <td>helderuniversidad</td>
                  <td>helderuniversidad@gmail.com</td>
                  <td>Administrador</td>
                  <td><span class="badge badge-success badge-estado">ACTIVO</span></td>
                  <td class="text-right">
                    <a href="#" class="btn btn-sm btn-primary mr-1">Editar</a>
                    <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                  </td>
                </tr>
              @endisset
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@stop