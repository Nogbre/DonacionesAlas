@extends('adminlte::page')

@section('title', 'Almacenes y Artículos')

@section('content_header')
    {{-- Header intentionally left blank to match design --}}
@stop

@section('plugins.Leaflet', true)

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<style>
    .warehouse-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .warehouse-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .warehouse-card.selected {
        border: 2px solid #007bff;
        background-color: #f8f9ff;
    }
    .map-container {
        height: 400px;
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
</style>
@stop

@section('content')
<div class="container-fluid">
    <!-- Page Title -->
    <div class="row justify-content-center mb-4">
        <div class="col-12 text-center">
            <h2 class="text-dark font-weight-bold">Almacenes y Artículos</h2>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="font-weight-bold">Filtrar por Categoría</label>
                            <select class="form-control" id="filtro-categoria">
                                <option value="">Todas las categorías</option>
                                <option value="ropa">Ropa</option>
                                <option value="alimentos-solidos">Alimentos Sólidos</option>
                                <option value="liquidos">Líquidos</option>
                                <option value="legumbres">Legumbres</option>
                                <option value="frutas">Frutas</option>
                                <option value="verduras">Verduras</option>
                            </select>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-success btn-lg mt-4" data-toggle="modal" data-target="#modalCrearAlmacen">
                                <i class="fas fa-plus"></i> Crear Nuevo Almacén
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warehouse Selection Section -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-dark font-weight-bold mb-3">Seleccionar Almacén</h4>
                    
                    <div class="row">
                        <!-- Almacén Central -->
                        <div class="col-md-6 mb-3">
                            <div class="card border-light warehouse-card" onclick="selectWarehouse(this)">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="font-weight-bold">Almacen Central</h5>
                                            <p class="text-muted mb-0">Calle Ficticia 123</p>
                                        </div>
                                        <div class="col-4 text-right">
                                            <button class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#modalUbicacion">Ver</button>
                                            <button class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#modalEditarAlmacen">
                                                <i class="fas fa-edit"></i> Editar
                                            </button>
                                            <button class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#modalEliminarAlmacen">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button class="btn btn-primary btn-sm">Seleccionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Almacén Secundario 1 -->
                        <div class="col-md-6 mb-3">
                            <div class="card border-light warehouse-card" onclick="selectWarehouse(this)">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="font-weight-bold">Almacen Secundario 1</h5>
                                            <p class="text-muted mb-0">Avenida Siempre Viva 456</p>
                                        </div>
                                        <div class="col-4 text-right">
                                            <button class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#modalUbicacion">Ver</button>
                                            <button class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#modalEditarAlmacen">
                                                <i class="fas fa-edit"></i> Editar
                                            </button>
                                            <button class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#modalEliminarAlmacen">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button class="btn btn-primary btn-sm">Seleccionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Almacén Av. Alemana -->
                        <div class="col-md-6 mb-3">
                            <div class="card border-light warehouse-card" onclick="selectWarehouse(this)">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="font-weight-bold">Almacen Av.Alemana</h5>
                                            <p class="text-muted mb-0">Av.Alemana, calle 3</p>
                                        </div>
                                        <div class="col-4 text-right">
                                            <button class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#modalUbicacion">Ver</button>
                                            <button class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#modalEditarAlmacen">
                                                <i class="fas fa-edit"></i> Editar
                                            </button>
                                            <button class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#modalEliminarAlmacen">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button class="btn btn-primary btn-sm">Seleccionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Almacenado Rápido #1 -->
                        <div class="col-md-6 mb-3">
                            <div class="card border-light warehouse-card" onclick="selectWarehouse(this)">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="font-weight-bold">Almacenado Rápido #1</h5>
                                            <p class="text-muted mb-0">Av. 7mo Anillo, Calle 2</p>
                                        </div>
                                        <div class="col-4 text-right">
                                            <button class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#modalUbicacion">Ver</button>
                                            <button class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#modalEditarAlmacen">
                                                <i class="fas fa-edit"></i> Editar
                                            </button>
                                            <button class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#modalEliminarAlmacen">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button class="btn btn-primary btn-sm">Seleccionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Almacen Rapido -->
                        <div class="col-md-6 mb-3">
                            <div class="card border-light warehouse-card" onclick="selectWarehouse(this)">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="font-weight-bold">Almacen Rapido</h5>
                                            <p class="text-muted mb-0">Univalle</p>
                                        </div>
                                        <div class="col-4 text-right">
                                            <button class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#modalUbicacion">Ver</button>
                                            <button class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#modalEditarAlmacen">
                                                <i class="fas fa-edit"></i> Editar
                                            </button>
                                            <button class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#modalEliminarAlmacen">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <button class="btn btn-primary btn-sm">Seleccionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Articles Table Section -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
        <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ARTÍCULO</th>
                                    <th>CATEGORÍA</th>
                                    <th>UNIDAD</th>
                                    <th>CANTIDAD</th>
                                    <th>UBICACIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Pantalón</strong></td>
                                    <td>Ropa</td>
                                    <td>Pieza</td>
                                    <td>5</td>
                                    <td>B1 - Estante B - Almacen Secundario 1</td>
                                </tr>
                                <tr>
                                    <td><strong>Abrigo</strong></td>
                                    <td>Ropa</td>
                                    <td>Pieza</td>
                                    <td>200</td>
                                    <td>
                                        A2 - Estante A - Almacen Central<br>
                                        A1 - Estante A - Almacen Central<br>
                                        B2 - Estante B - Almacen Secundario 1<br>
                                        C1 - Estante C - Almacen Av.Alemana
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Arroz</strong></td>
                                    <td>Alimentos Sólidos</td>
                                    <td>Kilogramo</td>
                                    <td>335</td>
                                    <td>
                                        A1 - Estante A - Almacen Central<br>
                                        A2 - Estante A - Almacen Central<br>
                                        C3 - A25A - Almacen Central<br>
                                        B1 - Estante B - Almacen Secundario 1<br>
                                        A1 - Estante Rápido #1 - Almacenado Rápido #1
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Harina</strong></td>
                                    <td>Alimentos Sólidos</td>
                                    <td>Kilogramo</td>
                                    <td>214</td>
                                    <td>
                                        A1 - Estante A - Almacen Central<br>
                                        B2 - Estante B - Almacen Secundario 1<br>
                                        C1 - Estante C - Almacen Av.Alemana
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Agua</strong></td>
                                    <td>Líquidos</td>
                                    <td>Litro</td>
                                    <td>202</td>
                                    <td>
                                        A1 - Estante A - Almacen Central<br>
                                        B1 - Estante B - Almacen Secundario 1<br>
                                        C2 - Estante C - Almacen Av.Alemana<br>
                                        A1 - Estante Rápido #1 - Almacenado Rápido #1
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Jugo</strong></td>
                                    <td>Líquidos</td>
                                    <td>Litro</td>
                                    <td>40</td>
                                    <td>A2 - Estante A - Almacen Central</td>
                                </tr>
                                <tr>
                                    <td><strong>Lentejas</strong></td>
                                    <td>Legumbres</td>
                                    <td>Kilogramo</td>
                                    <td>280</td>
                                    <td>A1 - Estante A - Almacen Central</td>
                                </tr>
                                <tr>
                                    <td><strong>Frijoles</strong></td>
                                    <td>Legumbres</td>
                                    <td>Kilogramo</td>
                                    <td>9</td>
                                    <td>B1 - Estante B - Almacen Secundario 1</td>
                                </tr>
                                <tr>
                                    <td><strong>Manzana</strong></td>
                                    <td>Frutas</td>
                                    <td>Kilogramo</td>
                                    <td>2</td>
                                    <td>B1 - Estante B - Almacen Secundario 1</td>
                                </tr>
                                <tr>
                                    <td><strong>Tomate</strong></td>
                                    <td>Verduras</td>
                                    <td>Kilogramo</td>
                                    <td>10</td>
                                    <td>B1 - Estante B - Almacen Secundario 1</td>
                                </tr>
                                <tr>
                                    <td><strong>Azúcar</strong></td>
                                    <td>Alimentos Sólidos</td>
                                    <td>Kilogramo</td>
                                    <td>10</td>
                                    <td>A1 - Estante A - Almacen Central</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Export Button -->
                    <div class="text-center mt-4">
                        <button class="btn btn-primary btn-lg">
                            <i class="fas fa-file-pdf"></i> Exportar a PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Crear Nuevo Almacén -->
<div class="modal fade" id="modalCrearAlmacen" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Nuevo Almacén</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formCrearAlmacen">
                    <div class="form-group">
                        <label class="font-weight-bold">Nombre del Almacén</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del almacén" required>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Ubicación</label>
                        <input type="text" name="ubicacion" class="form-control" placeholder="Ingrese la dirección del almacén" required>
                    </div>
                           <div class="form-group">
                               <label class="font-weight-bold">Seleccionar ubicación en el mapa</label>
                               <div id="mapCrear" class="map-container"></div>
                               <small class="text-muted">Haga clic en el mapa para seleccionar la ubicación exacta</small>
                               <input type="hidden" name="latitud" value="-17.77052">
                               <input type="hidden" name="longitud" value="-63.171091">
                           </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" onclick="crearAlmacen()">Crear Almacén</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Editar Almacén -->
<div class="modal fade" id="modalEditarAlmacen" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Almacén</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEditarAlmacen">
                    <div class="form-group">
                        <label class="font-weight-bold">Nombre del Almacén</label>
                        <div class="input-group">
                            <input type="text" name="nombre" class="form-control" value="Almacen Central" required>
                            <div class="input-group-append">
                                <span class="input-group-text text-success">
                                    <i class="fas fa-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Ubicación</label>
                        <div class="input-group">
                            <input type="text" name="ubicacion" class="form-control" value="Calle Ficticia 123" required>
                            <div class="input-group-append">
                                <span class="input-group-text text-success">
                                    <i class="fas fa-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Seleccionar ubicación en el mapa</label>
                        <div id="mapEditar" class="map-container"></div>
                        <div class="mt-2">
                            <small class="text-muted">Latitud: -17.77052, Longitud: -63.171091</small>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="guardarAlmacen()">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Eliminar Almacén -->
<div class="modal fade" id="modalEliminarAlmacen" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title">
                    <i class="fas fa-exclamation-triangle"></i> Eliminar Almacén
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">¿Estás seguro de que deseas eliminar este almacén?</p>
                <small class="text-muted">Esta acción no se puede deshacer.</small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" onclick="eliminarAlmacen()">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Ubicación del Almacén -->
<div class="modal fade" id="modalUbicacion" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubicación del Almacén</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="mapUbicacion" class="map-container" style="height: 500px;"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<style>
/* Warehouse Cards */
.warehouse-card {
    cursor: pointer;
    transition: all 0.3s ease;
    border-radius: 8px;
}

.warehouse-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border-color: #007bff !important;
}

.warehouse-card.selected {
    border-color: #007bff !important;
    background-color: #f8f9fa;
}

/* Table Styling */
.table th {
    background-color: #343a40;
    color: white;
    font-weight: bold;
    border: none;
}

.table td {
    vertical-align: middle;
    border-color: #dee2e6;
}

.table tbody tr:hover {
    background-color: #f8f9fa;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .warehouse-card .col-4 {
        margin-top: 10px;
    }
    
    .warehouse-card .col-4 .btn {
        display: block;
        width: 100%;
        margin-bottom: 5px;
    }
}
</style>
@stop

@section('js')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Warehouse selection functionality
    const warehouseCards = document.querySelectorAll('.warehouse-card');
    
    warehouseCards.forEach(card => {
        card.addEventListener('click', function() {
            // Remove selected class from all cards
            warehouseCards.forEach(c => c.classList.remove('selected'));
            
            // Add selected class to clicked card
            this.classList.add('selected');
            
            // You can add logic here to filter articles by warehouse
            console.log('Warehouse selected:', this.querySelector('h5').textContent);
        });
    });

    // Category filter functionality
    const categoriaFilter = document.getElementById('filtro-categoria');
    categoriaFilter.addEventListener('change', function() {
        const selectedCategory = this.value;
        console.log('Filtering by category:', selectedCategory);
        
        // You can add logic here to filter the table by category
        // For now, it's just a simulation
    });

    // Export to PDF functionality
    const exportBtn = document.querySelector('.btn-primary:last-child');
    exportBtn.addEventListener('click', function() {
        alert('Función de exportar a PDF (Simulación)');
    });

    // Initialize maps when modals are shown
    $('#modalCrearAlmacen').on('shown.bs.modal', function() {
        initMap('mapCrear', -17.77052, -63.171091, 'crear');
    });

    $('#modalEditarAlmacen').on('shown.bs.modal', function() {
        initMap('mapEditar', -17.77052, -63.171091, 'editar');
    });

    $('#modalUbicacion').on('shown.bs.modal', function() {
        initMap('mapUbicacion', -17.77052, -63.171091, 'ubicacion');
    });
});

// Function to select warehouse (called from onclick)
function selectWarehouse(card) {
    // Remove selected class from all cards
    document.querySelectorAll('.warehouse-card').forEach(c => c.classList.remove('selected'));
    
    // Add selected class to clicked card
    card.classList.add('selected');
    
    // You can add logic here to filter articles by warehouse
    console.log('Warehouse selected:', card.querySelector('h5').textContent);
}

// Modal functions
function crearAlmacen() {
    const nombre = document.querySelector('#formCrearAlmacen input[name="nombre"]').value;
    const ubicacion = document.querySelector('#formCrearAlmacen input[name="ubicacion"]').value;
    
    if (nombre && ubicacion) {
        alert(`Almacén "${nombre}" creado exitosamente en "${ubicacion}" (Simulación)`);
        $('#modalCrearAlmacen').modal('hide');
        document.getElementById('formCrearAlmacen').reset();
    } else {
        alert('Por favor complete todos los campos');
    }
}

function guardarAlmacen() {
    alert('Almacén actualizado exitosamente (Simulación)');
    $('#modalEditarAlmacen').modal('hide');
}

function eliminarAlmacen() {
    alert('Almacén eliminado exitosamente (Simulación)');
    $('#modalEliminarAlmacen').modal('hide');
}

// Global map variables
let mapCrear, mapEditar, mapUbicacion;
let markers = {};

// Initialize real Leaflet map
function initMap(mapId, lat, lng, type) {
    const mapElement = document.getElementById(mapId);
    if (!mapElement) return;
    
    // Clear previous map if exists
    if (mapElement._leaflet_id) {
        mapElement._leaflet_id = null;
        mapElement.innerHTML = '';
    }
    
    // Initialize map
    const map = L.map(mapId).setView([lat, lng], 13);
    
    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors',
        maxZoom: 19
    }).addTo(map);
    
    // Add marker
    const marker = L.marker([lat, lng]).addTo(map);
    
    // Store map and marker references
    if (type === 'crear') {
        mapCrear = map;
        markers.crear = marker;
        
        // Add click event for creating new warehouses
        map.on('click', function(e) {
            if (markers.crear) {
                map.removeLayer(markers.crear);
            }
            markers.crear = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
            
            // Update form fields with coordinates
            const latInput = document.querySelector('input[name="latitud"]');
            const lngInput = document.querySelector('input[name="longitud"]');
            if (latInput) latInput.value = e.latlng.lat.toFixed(6);
            if (lngInput) lngInput.value = e.latlng.lng.toFixed(6);
        });
        
    } else if (type === 'editar') {
        mapEditar = map;
        markers.editar = marker;
        
        // Add click event for editing warehouses
        map.on('click', function(e) {
            if (markers.editar) {
                map.removeLayer(markers.editar);
            }
            markers.editar = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
        });
        
    } else if (type === 'ubicacion') {
        mapUbicacion = map;
        markers.ubicacion = marker;
        
        // Add popup with warehouse info
        marker.bindPopup(`
            <div class="text-center">
                <h6><strong>Almacén Central</strong></h6>
                <p class="mb-1">Santa Cruz de la Sierra</p>
                <p class="mb-1">Capacidad: 1000 m²</p>
                <p class="mb-0">Estado: Activo</p>
            </div>
        `).openPopup();
    }
    
    // Add custom controls
    const customControl = L.control({position: 'topright'});
    customControl.onAdd = function(map) {
        const div = L.DomUtil.create('div', 'custom-control');
        div.innerHTML = `
            <div class="btn-group-vertical" role="group">
                <button type="button" class="btn btn-sm btn-light" onclick="map.zoomIn()" title="Acercar">
                    <i class="fas fa-plus"></i>
                </button>
                <button type="button" class="btn btn-sm btn-light" onclick="map.zoomOut()" title="Alejar">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        `;
        return div;
    };
    customControl.addTo(map);
}
</script>
@stop
