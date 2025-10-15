@extends('adminlte::page')

@section('title', 'Historial de Salidas')

@section('content_header')
    {{-- Header intentionally left blank to match design --}}
@stop

@section('content')
<div class="container-fluid">
    <!-- Page Title -->
    <div class="row justify-content-center mb-4">
        <div class="col-12 text-center">
            <h2 class="text-dark font-weight-bold">Historial de Salidas</h2>
        </div>
    </div>

    <!-- Salidas Registradas Section -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-dark font-weight-bold mb-3">Salidas Registradas</h4>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-primary">
                                <tr>
                                    <th class="bg-primary text-white">PAQUETE</th>
                                    <th class="bg-primary text-white">FECHA</th>
                                    <th class="bg-primary text-white">USUARIO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>NEW-201</strong></td>
                                    <td>13/10/2025</td>
                                    <td>Renato Escobar Ortuño</td>
                                </tr>
                                <tr>
                                    <td><strong>SSC-203</strong></td>
                                    <td>12/10/2025</td>
                                    <td>Markus Joao Rojas</td>
                                </tr>
                                <tr>
                                    <td><strong>PAQ-001</strong></td>
                                    <td>11/10/2025</td>
                                    <td>Ana María González</td>
                                </tr>
                                <tr>
                                    <td><strong>EMG-205</strong></td>
                                    <td>10/10/2025</td>
                                    <td>Carlos López Martínez</td>
                                </tr>
                                <tr>
                                    <td><strong>URG-099</strong></td>
                                    <td>09/10/2025</td>
                                    <td>María Elena Vargas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Registrar Nueva Salida Section -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-dark font-weight-bold mb-3">Registrar Nueva Salida</h4>
                    
                    <form id="formRegistrarSalida">
                        <div class="row align-items-end">
                            <div class="col-md-8">
                                <label class="font-weight-bold">Seleccionar Paquete:</label>
                                <select name="paquete_id" id="paquete_id" class="form-control" required>
                                    <option value="">Seleccione un paquete</option>
                                    <option value="1">NEW-201 - Paquete de Ropa (5 artículos)</option>
                                    <option value="2">SSC-203 - Paquete de Alimentos (12 artículos)</option>
                                    <option value="3">PAQ-001 - Paquete Mixto (8 artículos)</option>
                                    <option value="4">EMG-205 - Paquete de Emergencia (15 artículos)</option>
                                    <option value="5">URG-099 - Paquete Urgente (3 artículos)</option>
                                    <option value="6">FAM-150 - Paquete Familiar (20 artículos)</option>
                                    <option value="7">MED-300 - Paquete Médico (10 artículos)</option>
                                </select>
                            </div>
                            <div class="col-md-4 text-center">
                                <button type="button" class="btn btn-secondary btn-lg px-4" onclick="registrarSalida()">
                                    REGISTRAR SALIDA
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<style>
/* Table Styling */
.table th {
    background-color: #007bff !important;
    color: white;
    font-weight: bold;
    border: none;
    padding: 12px 15px;
}

.table td {
    vertical-align: middle;
    border-color: #dee2e6;
    padding: 12px 15px;
}

.table tbody tr:hover {
    background-color: #f8f9fa;
}

.table tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

/* Form Styling */
.form-control {
    border-radius: 5px;
    border: 1px solid #ced4da;
    padding: 10px 12px;
    font-size: 14px;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

/* Button Styling */
.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-secondary:hover {
    background-color: #5a6268;
    border-color: #545b62;
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

/* Card Styling */
.card {
    border-radius: 8px;
    border: none;
}

.card-body {
    padding: 25px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .col-md-4.text-center {
        margin-top: 15px;
    }
    
    .btn-lg {
        width: 100%;
    }
}
</style>
@stop

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize any additional functionality if needed
    console.log('Historial de Salidas page loaded');
});

// Function to register new exit
function registrarSalida() {
    const paqueteSelect = document.getElementById('paquete_id');
    const paqueteValue = paqueteSelect.value;
    const paqueteText = paqueteSelect.options[paqueteSelect.selectedIndex].text;
    
    if (paqueteValue) {
        // Simulate registration
        const fechaActual = new Date().toLocaleDateString('es-ES');
        const usuario = 'Usuario Actual'; // In a real app, this would be the logged-in user
        
        // Add new row to table
        addSalidaToTable(paqueteText.split(' - ')[0], fechaActual, usuario);
        
        // Show success message
        alert(`Salida registrada exitosamente para el paquete: ${paqueteText.split(' - ')[0]}`);
        
        // Reset form
        paqueteSelect.value = '';
    } else {
        alert('Por favor seleccione un paquete');
    }
}

// Function to add new exit to table
function addSalidaToTable(paquete, fecha, usuario) {
    const tbody = document.querySelector('table tbody');
    const newRow = document.createElement('tr');
    
    newRow.innerHTML = `
        <td><strong>${paquete}</strong></td>
        <td>${fecha}</td>
        <td>${usuario}</td>
    `;
    
    // Add to top of table
    tbody.insertBefore(newRow, tbody.firstChild);
    
    // Add animation effect
    newRow.style.backgroundColor = '#d4edda';
    setTimeout(() => {
        newRow.style.backgroundColor = '';
    }, 2000);
}

// Function to simulate package selection with details
function showPackageDetails(paqueteId) {
    const packages = {
        1: { nombre: 'NEW-201', descripcion: 'Paquete de Ropa', articulos: 5, peso: '2.5 kg' },
        2: { nombre: 'SSC-203', descripcion: 'Paquete de Alimentos', articulos: 12, peso: '8.3 kg' },
        3: { nombre: 'PAQ-001', descripcion: 'Paquete Mixto', articulos: 8, peso: '5.1 kg' },
        4: { nombre: 'EMG-205', descripcion: 'Paquete de Emergencia', articulos: 15, peso: '12.7 kg' },
        5: { nombre: 'URG-099', descripcion: 'Paquete Urgente', articulos: 3, peso: '1.2 kg' },
        6: { nombre: 'FAM-150', descripcion: 'Paquete Familiar', articulos: 20, peso: '15.8 kg' },
        7: { nombre: 'MED-300', descripcion: 'Paquete Médico', articulos: 10, peso: '3.4 kg' }
    };
    
    const pkg = packages[paqueteId];
    if (pkg) {
        console.log(`Paquete seleccionado: ${pkg.nombre} - ${pkg.descripcion} (${pkg.articulos} artículos, ${pkg.peso})`);
    }
}

// Add event listener for package selection
document.getElementById('paquete_id').addEventListener('change', function() {
    if (this.value) {
        showPackageDetails(this.value);
    }
});
</script>
@stop
