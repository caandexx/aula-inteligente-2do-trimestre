@csrf

<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror"
           value="{{ old('nombre', $aula->nombre ?? '') }}" required>
    @error('nombre') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="row">
  <div class="col-md-4 mb-3">
    <label class="form-label">Capacidad</label>
    <input type="number" name="capacidad" class="form-control" value="{{ old('capacidad', $aula->capacidad ?? '') }}">
  </div>
  <div class="col-md-4 mb-3">
    <label class="form-label">Ubicación</label>
    <input type="text" name="ubicacion" class="form-control" value="{{ old('ubicacion', $aula->ubicacion ?? '') }}">
  </div>
  <div class="col-md-4 mb-3">
    <label class="form-label">Piso</label>
    <input type="text" name="piso" class="form-control" value="{{ old('piso', $aula->piso ?? '') }}">
  </div>
</div>

<div class="mb-3">
  <label class="form-label">Cortina</label>
  <select name="cortina_estado" class="form-select">
    @php $c = old('cortina_estado', $aula->cortina_estado ?? 'guardada'); @endphp
    <option value="guardada" {{ $c == 'guardada' ? 'selected' : '' }}>Guardada</option>
    <option value="media" {{ $c == 'media' ? 'selected' : '' }}>A media</option>
    <option value="extendida" {{ $c == 'extendida' ? 'selected' : '' }}>Extendida</option>
  </select>
</div>

<div class="row">
  <div class="col-md-6 mb-3">
    <label class="form-label">Proyector</label>
    <select name="proyector_estado" class="form-select">
      @php $p = old('proyector_estado', $aula->proyector_estado ?? 'funcional'); @endphp
      <option value="funcional" {{ $p == 'funcional' ? 'selected' : '' }}>Funcional</option>
      <option value="mantenimiento" {{ $p == 'mantenimiento' ? 'selected' : '' }}>En mantenimiento</option>
      <option value="fuera_servicio" {{ $p == 'fuera_servicio' ? 'selected' : '' }}>Fuera de servicio</option>
      <option value="sin_hdmi" {{ $p == 'sin_hdmi' ? 'selected' : '' }}>Sin HDMI</option>
    </select>
  </div>

  <div class="col-md-6 mb-3">
    <label class="form-label">Intensidad de foco (0-100)</label>
    <input type="number" name="foco_intensidad" class="form-control" min="0" max="100"
           value="{{ old('foco_intensidad', $aula->foco_intensidad ?? 100) }}">
  </div>
</div>

<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" name="activo" id="activo" {{ (old('activo', $aula->activo ?? true) ? 'checked' : '') }}>
  <label class="form-check-label" for="activo">Activo</label>
</div>

<div class="mb-3">
  <label class="form-label">Descripción</label>
  <textarea name="descripcion" class="form-control" rows="3">{{ old('descripcion', $aula->descripcion ?? '') }}</textarea>
</div>
