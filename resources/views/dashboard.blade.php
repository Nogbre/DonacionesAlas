@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- header intentionally left blank to match design --}}
@stop

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof Chart !== 'undefined') {
                var commonOptions = { responsive: true, maintainAspectRatio: true };

                var ctx1 = document.getElementById('chartDonacionesMes');
                if (ctx1) {
                    new Chart(ctx1.getContext('2d'), {
                        type: 'bar',
                        data: {
                            labels: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct'],
                            datasets: [{
                                label: 'Donaciones (por mes)',
                                backgroundColor: '#6f42c1',
                                data: [5,8,12,7,14,33,20,18,3,51]
                            }]
                        },
                        options: commonOptions
                    });
                }

                var ctx2 = document.getElementById('chartTiposDonaciones');
                if (ctx2) {
                    new Chart(ctx2.getContext('2d'), {
                        type: 'doughnut',
                        data: {
                            labels: ['Dinero','Especie','Ropa'],
                            datasets: [{
                                data: [37,51,12],
                                backgroundColor: ['#20c997','#ffc107','#6f42c1']
                            }]
                        },
                        options: commonOptions
                    });
                }

                var ctx3 = document.getElementById('chartDineroPorPunto');
                if (ctx3) {
                    new Chart(ctx3.getContext('2d'), {
                        type: 'bar',
                        data: {
                            labels: ['Punto A','Punto B','Punto C','Punto D'],
                            datasets: [{
                                label: 'Donaciones en Dinero',
                                backgroundColor: '#17a2b8',
                                data: [16,16,16,8]
                            }]
                        },
                        options: commonOptions
                    });
                }

                var ctx4 = document.getElementById('chartEspeciePorPunto');
                if (ctx4) {
                    new Chart(ctx4.getContext('2d'), {
                        type: 'bar',
                        data: {
                            labels: ['Punto A','Punto B','Punto C','Punto D'],
                            datasets: [{
                                label: 'Donaciones en Especie',
                                backgroundColor: '#007bff',
                                data: [33,12,5,20]
                            }]
                        },
                        options: commonOptions
                    });
                }
            }
        });
    </script>
@stop

@section('content')
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center my-4">
                <h2>¡Bienvenido!</h2>
                <p class="text-muted">Gestiona las donaciones y el inventario de manera eficiente</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>101</h3>
                        <p>Total Donaciones</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-donate"></i>
                    </div>
                    <a href="{{ route('donaciones') }}" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>240</h3>
                        <p>Artículos en Inventario</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <a href="{{ route('inventario') }}" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>58</h3>
                        <p>Donantes Registrados</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="{{ route('donantes.index') }}" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-8 col-12">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>$1,250</h3>
                        <p>Valor Total Donaciones (Q)</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <a href="#" class="small-box-footer">Detalle <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>45</h3>
                        <p>Donantes Activos</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <a href="#" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
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
                        <canvas id="chartDonacionesMes"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted">Tipos de Donaciones</p>
                        <canvas id="chartTiposDonaciones"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted">Donaciones en Dinero por Punto de Recolección</p>
                        <canvas id="chartDineroPorPunto"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p class="text-muted">Donaciones en Especie por Punto de Recolección</p>
                        <canvas id="chartEspeciePorPunto"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop