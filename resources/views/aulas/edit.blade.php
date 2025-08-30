@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Aula</h1>
    <form action="{{ route('aulas.update', $aula) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ $aula->nombre }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Capacidad</label>
            <input type="number" name="capacidad" value="{{ $aula->capacidad }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
