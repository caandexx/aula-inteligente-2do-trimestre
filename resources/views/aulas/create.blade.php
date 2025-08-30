@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto p-6 bg-white rounded-2xl shadow-md">
    <h1 class="text-2xl font-bold mb-4">Crear Aula</h1>

    <form action="{{ route('aulas.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label>Nombre</label>
            <input type="text" name="nombre" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label>Ubicación</label>
            <input type="text" name="ubicacion" class="w-full border rounded p-2">
        </div>

        <div>
            <label>Capacidad</label>
            <input type="number" name="capacidad" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label>Descripción</label>
            <textarea name="descripcion" class="w-full border rounded p-2"></textarea>
        </div>

        <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded-md">Guardar</button>
    </form>
</div>
@endsection
