
<div class="mb-3">
    <label for="nombres" class="form-label">Nombres</label>
    <input type="text" name="nombres" class="form-control" value="{{ old('nombres', $donante->nombres ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos', $donante->apellidos ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="correo" class="form-label">Correo</label>
    <input type="email" name="correo" class="form-control" value="{{ old('correo', $donante->correo ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $donante->telefono ?? '') }}">
</div>
<div class="mb-3">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" name="usuario" class="form-control" value="{{ old('usuario', $donante->usuario ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="contrasena" class="form-label">Contraseña</label>
    <input type="password" name="contrasena" class="form-control" {{ isset($donante) ? '' : 'required' }}>
</div>