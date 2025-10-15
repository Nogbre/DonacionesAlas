@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Inventario</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>560</h3>
                    <p>Artículos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-boxes"></i>
                </div>
                <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>24</h3>
                    <p>Cajas / Paquetes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-box-open"></i>
                </div>
                <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>12</h3>
                    <p>Solicitudes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>3</h3>
                    <p>Almacenes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-warehouse"></i>
                </div>
                <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab">General</a></li>
                <li class="nav-item"><a class="nav-link" id="pills-estante-tab" data-toggle="pill" href="#pills-estante" role="tab">Por Estante</a></li>
            </ul>
            <div class="card-tools pr-3">
                <select class="form-control form-control-sm d-inline-block" style="width:180px;">
                    <option>Todas las categorías</option>
                    <option>Ropa</option>
                </select>
                <select class="form-control form-control-sm d-inline-block ml-2" style="width:180px;">
                    <option>Todos los almacenes</option>
                    <option>Almacén Central</option>
                </select>
                <button class="btn btn-success btn-sm ml-2"><i class="fas fa-file-excel"></i> Descargar Excel</button>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-general" role="tabpanel">
                    <h5 class="mb-3">Donaciones en Especie</h5>
                    <div class="table-responsive">
                        <table id="table-general" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ARTÍCULO</th>
                                    <th>CATEGORÍA</th>
                                    <th>UNIDAD</th>
                                    <th>CANTIDAD TOTAL</th>
                                    <th>UBICACIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Abrigo</td>
                                    <td>Ropa</td>
                                    <td>Pieza</td>
                                    <td>161</td>
                                    <td>A2 – Estante A</td>
                                </tr>
                                <tr>
                                    <td>Agua</td>
                                    <td>Líquidos</td>
                                    <td>Litro</td>
                                    <td>31</td>
                                    <td>A2 – Estante A</td>
                                </tr>
                                <tr>
                                    <td>Arroz</td>
                                    <td>Alimentos Solidos</td>
                                    <td>Kilogramo</td>
                                    <td>63</td>
                                    <td>A1 – Estante A</td>
                                </tr>
                                <tr>
                                    <td>Jugo</td>
                                    <td>Líquidos</td>
                                    <td>Litro</td>
                                    <td>18</td>
                                    <td>A2 – Estante A</td>
                                </tr>
                                <tr>
                                    <td>Lentejas</td>
                                    <td>Legumbres</td>
                                    <td>Kilogramo</td>
                                    <td>280</td>
                                    <td>A1 – Estante A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr>
                    <h5 class="mb-3">Donaciones en Dinero (Cuenta)</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content text-center">
                                    <span class="info-box-text text-uppercase">Monto Total</span>
                                    <span class="info-box-number">3588.25 Bs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-estante" role="tabpanel">
                    <h5 class="mb-3">Donaciones por Estante</h5>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>Estante A</div>
                            <div>
                                <button class="btn btn-warning btn-sm">Marcar Lleno</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6>A1</h6>
                            <div class="table-responsive">
                                <table id="table-estante" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ARTÍCULO</th>
                                            <th>DONANTE</th>
                                            <th>CANTIDAD DONADA</th>
                                            <th>CANTIDAD RESTANTE</th>
                                            <th>FECHA DE VENCIMIENTO</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Arroz</td>
                                            <td>Carlos Gómez Vargas</td>
                                            <td>10</td>
                                            <td>10</td>
                                            <td>N/A</td>
                                            <td>
                                                <button class="btn btn-info btn-sm">Mover Ubicación</button>
                                                <button class="btn btn-success btn-sm">Editar</button>
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Arroz</td>
                                            <td>Omar Velasco Teran</td>
                                            <td>10</td>
                                            <td>2</td>
                                            <td>N/A</td>
                                            <td>
                                                <button class="btn btn-info btn-sm">Mover Ubicación</button>
                                                <button class="btn btn-success btn-sm">Editar</button>
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
        $(function () {
            // Initialize DataTables (requires Datatables plugin active in adminlte config)
            $('#table-general').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                'responsive': true,
            });

            $('#table-estante').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                'responsive': true,
            });
        });
    </script>
@stop
