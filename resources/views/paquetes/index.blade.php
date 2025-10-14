@extends('adminlte::page')

@section('title', 'Cajas / Paquetes')

@section('content_header')
    <h1>Cajas / Paquetes</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center my-4">
            <h2>Cajas y Paquetes</h2>
            <p class="text-muted">Gestiona empaques, contenido y entregas</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Cajas</h5>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>En Preparación</h5>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Enviadas</h5>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Paquetes</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Contenido</th>
                                <th>Peso</th>
                                <th>Estado</th>
                                <th>Destino</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ropa de Invierno</td>
                                <td>12kg</td>
                                <td><span class="badge badge-secondary">Preparación</span></td>
                                <td>Centro Comunitario</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
