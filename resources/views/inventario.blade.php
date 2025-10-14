@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Inventario</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center my-4">
            <h2>Inventario</h2>
            <p class="text-muted">Resumen rápido del inventario</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Artículos Totales</h5>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Cajas/Paquetes</h5>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Solicitudes</h5>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Almacenes</h5>
                    <h3 class="float-right">0</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Artículos en Inventario</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Cantidad</th>
                                <th>Ubicación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Camisa</td>
                                <td>Ropa</td>
                                <td>0</td>
                                <td>Almacén Central</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Paquete de Alimentos</td>
                                <td>Comida</td>
                                <td>0</td>
                                <td>Almacén Norte</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
