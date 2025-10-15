@extends('adminlte::page')

@section('title', 'Agregar Nueva Donación')

@section('content_header')
@stop

@section('content')
<div class="container-fluid">
    <!-- Título -->
    <div class="row justify-content-center mb-4">
        <div class="col-12 text-center">
            <h2 class="text-dark font-weight-bold">Agregar Nueva Donación</h2>
        </div>
    </div>

    <form id="formDonacion">
        <!-- Información general -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="text-dark font-weight-bold mb-1">Información General</h4>
                        <p class="text-muted mb-3">Completa los datos básicos de la donación</p>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Tipo de Donación</label>
                                <select id="tipo_donacion" class="form-control">
                                    <option value="">Seleccione el tipo</option>
                                    <option value="dinero">Dinero</option>
                                    <option value="especie">Especie</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Fecha de Donación</label>
                                <input type="text" class="form-control" value="{{ date('d/m/Y') }}" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Donante</label>
                                <input type="text" class="form-control" placeholder="Buscar donante por nombre">
                                <button type="button" class="btn btn-primary btn-sm mt-2">
                                    <i class="fas fa-plus"></i> Agregar Donante
                                </button>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Campaña</label>
                                <input type="text" class="form-control" placeholder="Buscar campaña por nombre">
                                <button type="button" class="btn btn-primary btn-sm mt-2">
                                    <i class="fas fa-plus"></i> Crear Campaña
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Donación en Dinero -->
        <div id="card-dinero" class="donacion-card" style="display: none;">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-dark font-weight-bold text-center mb-1">Detalles de Donación en Dinero</h4>
                    <p class="text-muted text-center mb-4">Completa la información específica de la donación monetaria</p>
                    <hr>

                    <div class="form-group mb-4">
                        <label class="font-weight-bold">Monto</label>
                        <input type="number" class="form-control" placeholder="Ingrese el monto" min="0">
                    </div>

                    <div class="form-group mb-4">
                        <label class="font-weight-bold">Nombre de la cuenta</label>
                        <input type="text" class="form-control" placeholder="Nombre de cuenta">
                    </div>

                    <div class="form-group mb-4">
                        <label class="font-weight-bold">Número de cuenta</label>
                        <input type="text" class="form-control" placeholder="Número de cuenta">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Imagen del comprobante</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="comprobante">
                            <label class="custom-file-label" for="comprobante">Seleccionar archivo</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Donación en Especie -->
        <div id="card-especie" class="donacion-card" style="display: none;">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-dark font-weight-bold text-center mb-1">Detalles de Donación en Especie</h4>
                    <p class="text-muted text-center mb-4">
                        Completa la información específica de la donación en especie
                    </p>
                    <hr>

                    <!-- Artículo -->
                    <div class="form-group">
                        <label class="font-weight-bold">Artículo</label>
                        <div class="input-group">
                            <select class="form-control">
                                <option value="">Seleccione un artículo</option>
                                <option>Camisa</option>
                                <option>Polera</option>
                                <option>Pantalón</option>
                                <option>Abrigo</option>
                                <option>Arroz</option>
                                <option>Harina</option>
                                <option>Agua</option>
                            </select>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Almacén asignado -->
                    <div class="form-group">
                        <label class="font-weight-bold">Almacén asignado</label>
                        <div class="row text-center">
                            <div class="col-md-4 mb-3">
                                <div class="card border-primary select-card active" onclick="selectCard(this)">
                                    <div class="card-body">
                                        <i class="fas fa-building fa-2x text-primary mb-2"></i>
                                        <h6 class="font-weight-bold">Almacén Central</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seleccione un estante -->
                    <div class="form-group">
                        <label class="font-weight-bold">Seleccione un estante</label>
                        <div class="row text-center">
                            <div class="col-md-3 mb-3">
                                <div class="card border-light select-card" onclick="selectCard(this)">
                                    <div class="card-body">
                                        <i class="fas fa-layer-group fa-2x text-muted mb-2"></i>
                                        <h6>Estante A</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card border-light select-card" onclick="selectCard(this)">
                                    <div class="card-body">
                                        <i class="fas fa-layer-group fa-2x text-muted mb-2"></i>
                                        <h6>A25A</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seleccione un espacio -->
                    <div class="form-group">
                        <label class="font-weight-bold">Seleccione un espacio en el almacén</label>
                        <div class="row text-center">
                            <div class="col-md-3 mb-3">
                                <div class="card border-light select-card" onclick="selectCard(this)">
                                    <div class="card-body">
                                        <i class="fas fa-box fa-2x text-muted mb-2"></i>
                                        <h6>A1</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card border-light select-card" onclick="selectCard(this)">
                                    <div class="card-body">
                                        <i class="fas fa-box fa-2x text-muted mb-2"></i>
                                        <h6>A2</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cantidad / Unidad / Estado -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold">Cantidad</label>
                            <input type="number" class="form-control" placeholder="Cantidad" min="1">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold">Unidad de medida</label>
                            <select class="form-control">
                                <option value="">Seleccione unidad</option>
                                <option>Kilogramo (kg)</option>
                                <option>Litro (L)</option>
                                <option>Pieza (Pza)</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold">Estado del artículo</label>
                            <select class="form-control">
                                <option value="">Seleccione estado</option>
                                <option>Nuevo</option>
                                <option>Usado (buen estado)</option>
                                <option>Usado (regular)</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="font-weight-bold">Fecha de vencimiento (opcional)</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botones -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-8 text-right">
                <button type="submit" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-save"></i> Guardar Donación
                </button>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-lg px-4 ml-2">
                    <i class="fas fa-times"></i> Cancelar
                </a>
            </div>
        </div>
    </form>
</div>
@stop

@section('css')
<style>
.donacion-card {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    margin-bottom: 30px;
}
.donacion-card .card {
    width: 100%;
    max-width: 850px;
    border-radius: 10px;
}

/* Estilo de tarjetas seleccionables */
.select-card {
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    border-radius: 8px;
}
.select-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.select-card.active {
    border: 2px solid #007bff;
    background-color: #f0f8ff;
}
</style>
@stop

@section('js')
<script>
document.addEventListener("DOMContentLoaded", () => {
    const tipoSelect = document.getElementById("tipo_donacion");
    const cardDinero = document.getElementById("card-dinero");
    const cardEspecie = document.getElementById("card-especie");

    tipoSelect.addEventListener("change", () => {
        cardDinero.style.display = tipoSelect.value === "dinero" ? "flex" : "none";
        cardEspecie.style.display = tipoSelect.value === "especie" ? "flex" : "none";
    });
});

function selectCard(card) {
    const siblings = card.parentElement.parentElement.querySelectorAll('.select-card');
    siblings.forEach(el => el.classList.remove('active'));
    card.classList.add('active');
}
</script>
@stop
