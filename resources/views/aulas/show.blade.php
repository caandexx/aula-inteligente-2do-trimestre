@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>{{ $aula->nombre }}</h3>
    <a href="{{ route('aulas.index') }}" class="btn btn-secondary">Volver</a>
  </div>

  <div class="card">
    <div class="card-body">
      <p><strong>Capacidad:</strong> {{ $aula->capacidad }}</p>
      <p><strong>Ubicación:</strong> {{ $aula->ubicacion }}</p>
      <p><strong>Cortina:</strong> {{ ucfirst($aula->cortina_estado) }}</p>
      <p><strong>Proyector:</strong> {{ ucfirst(str_replace('_',' ',$aula->proyector_estado)) }}</p>
      <p><strong>Intensidad foco:</strong> {{ $aula->foco_intensidad }}</p>
      <p><strong>Descripción:</strong> {{ $aula->descripcion }}</p>
    </div>
  </div>
</div>
@endsection
