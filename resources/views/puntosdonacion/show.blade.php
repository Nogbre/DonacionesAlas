
@extends('adminlte::page')

@section('title','Detalle Punto de Donación')

@section('content_header')
    <h1>Detalle Punto de Donación</h1>
@stop

@section('content')
<div class="card mt-3 w-100">
    <div class="card-header bg-primary text-white">
        <strong>{{ $puntosdonacion->nombre_punto }}</strong>
    </div>
    <div class="card-body">
        <dl class="row mb-0">
            <dt class="col-sm-2">ID</dt>
            <dd class="col-sm-10">{{ $puntosdonacion->id_punto }}</dd>

            <dt class="col-sm-2">Longitud</dt>
            <dd class="col-sm-10">{{ $puntosdonacion->longitud }}</dd>

            <dt class="col-sm-2">Latitud</dt>
            <dd class="col-sm-10">{{ $puntosdonacion->latitud }}</dd>
        </dl>
        <div id="map" class="mt-4 rounded shadow-sm" style="height: 500px; width: 100%;"></div>
    </div>
    <div class="card-footer text-end">
        <a href="{{ route('puntosdonacion.index') }}" class="btn btn-light">Volver</a>
    </div>
</div>
@endsection

@section('js')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var lat = {{ $puntosdonacion->latitud }};
        var lng = {{ $puntosdonacion->longitud }};
        var map = L.map('map').setView([lat, lng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        L.marker([lat, lng]).addTo(map);
    });
</script>
@endsection