@extends('adminlte::page')

@section('title', 'Solicitudes')

@section('content_header')
    <h1>Enviar Donaciones</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center my-4">
            <h2>Solicitudes de ayuda Externas</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="accordion">
                        {{-- Card 1 --}}
                        <div class="card mb-3">
                            <div class="card-header p-2" id="headingOne">
                                <h5 class="mb-0 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-link text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Solicitud Externa - <small class="text-muted">CSC-201</small>
                                    </button>
                                    <div>
                                        <span class="badge badge-pill badge-primary">SOL#CSC-201</span>
                                        <span class="ml-2 text-muted">10/12/2025</span>
                                    </div>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <h6 class="text-uppercase">Información de solicitud</h6>
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            CI del Solicitante
                                            <span class="badge badge-primary">87849394</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Código de Solicitud
                                            <span class="badge badge-primary">CSC-201</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            ID Almacén
                                            <span class="badge badge-primary">1</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Almacén Asignado
                                            <span class="badge badge-primary">Almacén Central</span>
                                        </li>
                                    </ul>

                                    <h6 class="text-uppercase">Artículos del paquete</h6>
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Agua
                                            <span class="badge badge-primary">9 L</span>
                                        </li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary btn-lg">Crear Cargamento</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Card 2 (collapsed) --}}
                        <div class="card mb-3">
                            <div class="card-header p-2" id="headingTwo">
                                <h5 class="mb-0 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-link collapsed text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Solicitud Externa - <small class="text-muted">SSC-203</small>
                                    </button>
                                    <div>
                                        <span class="badge badge-pill badge-secondary">SOL#SSC-203</span>
                                        <span class="ml-2 text-muted">11/12/2025</span>
                                    </div>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <h6 class="text-uppercase">Información de solicitud</h6>
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            CI del Solicitante
                                            <span class="badge badge-primary">12345678</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Código de Solicitud
                                            <span class="badge badge-primary">SSC-203</span>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary btn-lg">Empezar armado de paquete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Additional sample cards --}}
                        <div class="card mb-3">
                            <div class="card-header p-2" id="headingThree">
                                <h5 class="mb-0 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-link collapsed text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Solicitud Externa - <small class="text-muted">SSC-204</small>
                                    </button>
                                    <div>
                                        <span class="badge badge-pill badge-secondary">SOL#SSC-204</span>
                                        <span class="ml-2 text-muted">12/12/2025</span>
                                    </div>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">Detalles de la solicitud SSC-204 (ejemplo).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Mis Tareas section (ejemplo) --}}
    <div class="row mt-4">
        <div class="col-12">
            <h3>Mis Tareas - Almacen Central</h3>
            <div class="card">
                <div class="card-body">
                    <div id="accordionTasks">
                        <div class="card mb-3">
                            <div class="card-header p-2" id="taskOne">
                                <h5 class="mb-0 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-link text-left" data-toggle="collapse" data-target="#taskCollapseOne" aria-expanded="true" aria-controls="taskCollapseOne">CSC-201</button>
                                    <div><span class="badge badge-primary">SOL#CSC-201</span></div>
                                </h5>
                            </div>
                            <div id="taskCollapseOne" class="collapse show" aria-labelledby="taskOne" data-parent="#accordionTasks">
                                <div class="card-body">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            CI del Solicitante
                                            <span class="badge badge-primary">87849394</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Código de Solicitud
                                            <span class="badge badge-primary">CSC-201</span>
                                        </li>
                                    </ul>
                                    <h6>Artículos del paquete</h6>
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">Agua <span class="badge badge-primary">9 L</span></li>
                                    </ul>
                                    <div class="text-center"><a href="#" class="btn btn-primary btn-lg">Crear Cargamento</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@stop

@section('js')
    <script>
        // No extra JS required — Bootstrap collapse is provided by AdminLTE's bundled scripts.
        // Keep this section in case later we need custom behavior for accordion actions.
        document.addEventListener('DOMContentLoaded', function () {
            // placeholder for future custom JS
        });
    </script>
@stop
