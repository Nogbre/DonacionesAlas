@extends('adminlte::page')

@section('title', 'Donaciones')

@section('content_header')
    <h1>Donaciones</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 text-center my-4">
            <h2>¡Bienvenido!</h2>
            <p class="text-muted">Gestiona las donaciones y el inventario de manera eficiente</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">DONACIONES</h5>
                    <p class="card-text text-muted">Total de donaciones recibidas:</p>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">INVENTARIO</h5>
                    <p class="card-text text-muted">Artículos en inventario:</p>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">DONANTES</h5>
                    <p class="card-text text-muted">Donantes registrados:</p>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="font-weight-bold">TOTAL DONACIONES</h4>
                    <p class="text-muted">Total de donaciones registradas:</p>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="font-weight-bold">DONANTES ACTIVOS</h4>
                    <p class="text-muted">Donantes activos en el sistema:</p>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h3 class="text-center">Análisis de Donaciones</h3>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted">Donaciones por Mes (2025)</p>
                    <!-- Placeholder for chart -->
                    <div style="height:200px;background:#f8fafc;border-radius:8px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted">Tipos de Donaciones</p>
                    <div style="height:200px;background:#f8fafc;border-radius:8px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
