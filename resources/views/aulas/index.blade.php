@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-white rounded-2xl shadow-md">
    <h1 class="text-2xl font-bold text-pink-700 mb-4">Listado de Aulas</h1>

    <a href="{{ route('aulas.create') }}" 
       class="bg-pink-600 hover:bg-pink-700 text-white px-4 py-2 rounded-md mb-4 inline-block">➕ Nueva Aula</a>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-pink-100">
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Nombre</th>
                <th class="p-2 border">Capacidad</th>
                <th class="p-2 border">Ubicación</th>
                <th class="p-2 border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aulas as $aula)
            <tr class="hover:bg-pink-50">
                <td class="border p-2">{{ $aula->id }}</td>
                <td class="border p-2">{{ $aula->nombre }}</td>
                <td class="border p-2">{{ $aula->capacidad }}</td>
                <td class="border p-2">{{ $aula->ubicacion ?? '-' }}</td>
                <td class="border p-2 space-x-2">
                    <a href="{{ route('aulas.show', $aula) }}" class="text-blue-600">👁️</a>
                    <a href="{{ route('aulas.edit', $aula) }}" class="text-yellow-600">✏️</a>
                    <form action="{{ route('aulas.destroy', $aula) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('¿Eliminar aula?')" class="text-red-600">🗑️</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
