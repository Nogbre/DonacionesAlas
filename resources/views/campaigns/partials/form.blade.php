@if ($errors->any())
  <div class="alert alert-danger">
    <strong>Revisa los errores:</strong>
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ $route }}" method="POST" enctype="multipart/form-data" class="card">
  @csrf
  @if(in_array($method, ['PUT','PATCH','DELETE'])) @method($method) @endif

  <div class="card-body">
    <div class="mb-3">
      <label>Título</label>
      <input type="text" name="title" value="{{ old('title', $campaign->title ?? '') }}"
             class="form-control @error('title') is-invalid @enderror" maxlength="150">
      @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label>Descripción</label>
      <textarea name="description" rows="5"
        class="form-control @error('description') is-invalid @enderror">{{ old('description', $campaign->description ?? '') }}</textarea>
      @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label>Imagen</label>
      <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
      @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror

      @isset($campaign)
        @if($campaign->image_path)
          <div class="mt-2">
            <img src="{{ asset('storage/'.$campaign->image_path) }}" style="height:90px;object-fit:cover;">
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" name="remove_image" value="1" id="remove_image">
            <label class="form-check-label" for="remove_image">Quitar imagen actual</label>
          </div>
        @endif
      @endisset
    </div>
  </div>

  <div class="card-footer">
    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('campaigns.index') }}" class="btn btn-light">Cancelar</a>
  </div>
</form>
