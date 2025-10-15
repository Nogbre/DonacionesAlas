@extends('adminlte::page')

@section('title', 'Campañas y Donaciones')

@section('css')
    <style>
      /* Campaign images: fixed height, cover and avoid distortion */
      .campaign-img-top { height: 180px; object-fit: cover; width: 100%; display: block; object-position: center; }
      /* Larger images on desktop */
      @media (min-width: 992px) {
        .campaign-img-top { height: 220px; }
        .campaign-grid-card .card-body { min-height: 220px; }
      }

      /* Force left alignment inside campaign cards to match AdminLTE conventions */
      .campaign-card .card-body { text-align: left; }
      /* ensure equal height only for grid cards */
      .campaign-card { display:block; }
      .campaign-grid-card { display:flex; flex-direction:column; }
      .campaign-grid-card .card-body { flex:1 1 auto; }
    </style>
@stop

@section('content_header')
    <h1 class="m-0 text-dark" style="font-size:2.2rem">Campañas y Donaciones</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-outline card-plain mt-4 mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" class="form-control" placeholder="Buscar campaña..." aria-label="Buscar campaña">
                        <div class="input-group-append">
                            <a href="#" class="btn btn-primary">+ Agregar Campaña</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- Card: ejemplo 1 (imagen arriba) --}}
        <div class="col-lg-6 col-md-12 mb-4">
          <div class="card campaign-card">
            <img src="https://picsum.photos/640/300?random=11" class="campaign-img-top card-img-top" alt="Imagen de campaña">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Campaña de Reciclaje</h5>
              <p class="text-muted mb-1 small">Organizador: Juan Pérez</p>
              <p class="text-muted small">Fecha: 27 de mayo de 2025 - 30 de julio de 2025</p>

              <div class="mt-3">
                <a href="#" class="btn btn-primary btn-block mb-2">Ver detalles</a>
                <a href="#" class="btn btn-outline-primary btn-block">Puntos de Recolección</a>
              </div>
            </div>
          </div>
        </div>

        {{-- Card: ejemplo 2 (imagen arriba) --}}
        <div class="col-lg-6 col-md-12 mb-4">
          <div class="card campaign-card">
            <img src="https://picsum.photos/640/300?random=12" class="campaign-img-top card-img-top" alt="Imagen campaña">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Campaña de Alimentos</h5>
              <p class="text-muted mb-1 small">Organizador: Ana Martínez</p>
              <p class="text-muted small">Fecha: 01 de junio de 2025 - 30 de junio de 2025</p>

              <div class="mt-3">
                <a href="#" class="btn btn-primary btn-block mb-2">Ver detalles</a>
                <a href="#" class="btn btn-outline-primary btn-block">Puntos de Recolección</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    {{-- Grid adicional de tarjetas --}}
  <div class="row">
    @for ($i = 0; $i < 4; $i++)
  <div class="col-lg-6 col-md-12 mb-4">
  <div class="card campaign-card campaign-grid-card h-100">
          <img src="https://picsum.photos/800/300?random={{ 20 + $i }}" class="campaign-img-top card-img-top" alt="Imagen de campaña">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Campaña ejemplo {{ $i + 1 }}</h5>
            <p class="text-muted small mb-2">Organizador: Equipo Local</p>
            <p class="text-muted small mb-3">Fecha: 15 de mayo de 2025 - 15 de agosto de 2025</p>

            <div class="mt-auto">
              <a href="#" class="btn btn-primary btn-sm btn-block mb-2">Ver detalles</a>
              <a href="#" class="btn btn-outline-primary btn-sm btn-block">Puntos de Recolección</a>
            </div>
          </div>
        </div>
      </div>
    @endfor
  </div>
</div>
@stop
