<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="name" value="{{ old('name',$user->name ?? '') }}"
           class="form-control @error('name') is-invalid @enderror">
    @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="{{ old('email',$user->email ?? '') }}"
           class="form-control @error('email') is-invalid @enderror">
    @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label>Contraseña {{ isset($user) ? '(dejar vacío si no cambia)' : '' }}</label>
    <input type="password" name="password"
           class="form-control @error('password') is-invalid @enderror">
    @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label>Confirmar contraseña</label>
    <input type="password" name="password_confirmation" class="form-control">
</div>