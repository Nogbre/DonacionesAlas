@extends('adminlte::page')

@section('title', 'Pedidos de Ayuda')

@section('content_header')
    <h1>Pedidos de Ayuda</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center my-4">
            <h2>Solicitudes de Ayuda</h2>
            <p class="text-muted">Lista de solicitudes recibidas</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Solicitudes</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipo</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ropa</td>
                                <td>Necesitan ropa para niños</td>
                                <td><span class="badge badge-warning">Pendiente</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Ver</button>
                                    <button class="btn btn-sm btn-success">Asignar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
