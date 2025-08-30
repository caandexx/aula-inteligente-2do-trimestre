@extends('layouts.app')

@section('title', 'Listado de Elementos')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <h1 class="text-3xl font-bold text-[#695d23] mb-6">Listado de Elementos</h1>

    <a href="{{ route('elementos.create') }}" 
       class="inline-block bg-[#d46886] text-white px-5 py-2 rounded-md hover:bg-[#ed8466] transition-colors mb-6 font-semibold">
       ➕ Agregar nuevo elemento
    </a>

    @if($elementos->isEmpty())
        <p class="text-gray-600">No hay elementos registrados todavía.</p>
    @else
        <table class="min-w-full border border-gray-300 rounded-md overflow-hidden">
            <thead class="bg-[#83729d] text-white">
                <tr>
                    <th class="px-4 py-2 text-left">Nombre</th>
                    <th class="px-4 py-2 text-left">Tipo</th>
                    <th class="px-4 py-2 text-left">Cantidad</th>
                    <th class="px-4 py-2 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($elementos as $elemento)
                    <tr>
                        <td class="px-4 py-3">{{ $elemento->nombre }}</td>
                        <td class="px-4 py-3">{{ $elemento->tipo }}</td>
                        <td class="px-4 py-3">{{ $elemento->cantidad }}</td>
                        <td class="px-4 py-3 space-x-2">
                            <a href="{{ route('elementos.edit', $elemento->id) }}" 
                               class="inline-block bg-[#695d23] text-white px-3 py-1 rounded hover:bg-[#83729d] transition-colors text-sm">
                               ✏️ Editar
                            </a>

                            <form action="{{ route('elementos.destroy', $elemento->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Seguro que querés eliminar este elemento?')">
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
