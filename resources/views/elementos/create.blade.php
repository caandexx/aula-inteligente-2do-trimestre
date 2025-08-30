@extends('layouts.app')

@section('title', 'Agregar nuevo elemento')

@section('content')
    <div class="max-w-3xl mx-auto py-10">
        <h1 class="text-2xl font-bold text-[#695d23] mb-6">Agregar nuevo elemento</h1>

        <form action="{{ route('elementos.store') }}" method="POST" class="space-y-6 bg-white p-6 rounded shadow">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Tipo</label>
                <input type="text" name="tipo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Cantidad</label>
                <input type="number" name="cantidad" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="1" min="1">
            </div>

            <button type="submit" class="bg-[#695d23] text-white px-4 py-2 rounded hover:bg-[#83729d] transition">
                Guardar
            </button>
        </form>
    </div>
@endsection
