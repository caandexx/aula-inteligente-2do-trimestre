@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto p-6 bg-white rounded-2xl shadow-md">
    <h1 class="text-2xl font-bold mb-4">Detalle del Aula</h1>

    <p><strong>Nombre:</strong> {{ $aula->nombre }}</p>
    <p><strong>Ubicación:</strong> {{ $aula->ubicacion ?? '-' }}</p>
    <p><strong>Capacidad:</strong> {{ $aula->capacidad }}</p>
    <p><strong>Descripción:</strong> {{ $aula->descripcion ?? '-' }}</p>

    <a href="{{ route('aulas.index') }}" class="text-pink-600">⬅️ Volver</a>
</div>
@endsection
