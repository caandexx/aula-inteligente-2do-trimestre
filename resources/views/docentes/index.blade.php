@extends('layouts.app')

@section('title', 'Listado de Docentes')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <h1 class="text-3xl font-bold text-[#695d23] mb-6">Listado de Docentes</h1>

    <a href="{{ route('docentes.create') }}" 
       class="inline-block bg-[#d46886] text-white px-5 py-2 rounded-md hover:bg-[#ed8466] transition-colors mb-6 font-semibold">
       ➕ Agregar nuevo docente
    </a>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-200 text-green-800 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    @if($docentes->isEmpty())
        <p class="text-gray-600">No hay docentes registrados todavía.</p>
    @else
        <table class="min-w-full border border-gray-300 rounded-md overflow-hidden">
            <thead class="bg-[#83729d] text-white">
                <tr>
                    <th class="px-4 py-2 text-left">Nombre</th>
                    <th class="px-4 py-2 text-left">Apellido</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Teléfono</th>
                    <th class="px-4 py-2 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($docentes as $docente)
                    <tr>
                        <td class="px-4 py-3">{{ $docente->nombre }}</td>
                        <td class="px-4 py-3">{{ $docente->apellido }}</td>
                        <td class="px-4 py-3">{{ $docente->email }}</td>
                        <td class="px-4 py-3">{{ $docente->telefono }}</td>
                        <td class="px-4 py-3 space-x-2">
                            <a href="{{ route('docentes.edit', $docente->id) }}" 
                               class="inline-block bg-[#695d23] text-white px-3 py-1 rounded hover:bg-[#83729d] transition-colors text-sm">
                               ✏️ Editar
                            </a>

                            <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Seguro que querés eliminar este docente?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-[#d46886] text-white px-3 py-1 rounded hover:bg-[#ed8466] transition-colors text-sm">
                                    🗑️ Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>
@endsection
