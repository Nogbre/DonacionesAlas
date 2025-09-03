
<div class="mb-3">
    <label for="nombre_punto" class="form-label">Nombre del punto</label>
    <input type="text" name="nombre_punto" class="form-control" value="{{ old('nombre_punto', $puntosdonacion->nombre_punto ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Ubicación en el mapa</label>
    <div id="map" style="height: 500px;"></div>
</div>
<input type="hidden" name="longitud" id="longitud" value="{{ old('longitud', $puntosdonacion->longitud ?? '') }}">
<input type="hidden" name="latitud" id="latitud" value="{{ old('latitud', $puntosdonacion->latitud ?? '') }}">

@push('js')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var lat = {{ old('latitud', $puntosdonacion->latitud ?? -17.7833) }};
        var lng = {{ old('longitud', $puntosdonacion->longitud ?? -63.1821) }};
        var map = L.map('map').setView([lat, lng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        var marker = L.marker([lat, lng], {draggable:true}).addTo(map);

        function updateInputs(e) {
            document.getElementById('latitud').value = e.latlng.lat.toFixed(7);
            document.getElementById('longitud').value = e.latlng.lng.toFixed(7);
        }

        marker.on('dragend', function(e) {
            updateInputs(e.target);
        });

        map.on('click', function(e) {
            marker.setLatLng(e.latlng);
            updateInputs({latlng: e.latlng});
        });

        // Inicializa los inputs si hay valores
        updateInputs({latlng: marker.getLatLng()});
    });
</script>
@endpush