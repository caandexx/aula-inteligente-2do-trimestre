@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Aula</h1>
    <form action="{{ route('aulas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="mb-3">
            <label>Capacidad</label>
            <input type="number" name="capacidad" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
