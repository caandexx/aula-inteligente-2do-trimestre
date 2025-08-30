<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
<div class="text-center space-y-8">

    <h1 class="text-4xl font-bold text-pink-700 drop-shadow-md">Sistema de Gestión Escolar</h1>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-4xl mx-auto">

        <!-- Botón Aulas -->
        <a href="{{ route('aulas.index') }}" 
           class="bg-white hover:bg-pink-100 text-pink-700 font-semibold py-6 rounded-2xl shadow-lg transition transform hover:scale-105">
            📚 Aulas
        </a>

        <!-- Botón Docentes -->
        <a href="{{ route('docentes.index') }}" 
           class="bg-white hover:bg-pink-100 text-pink-700 font-semibold py-6 rounded-2xl shadow-lg transition transform hover:scale-105">
            👩‍🏫 Docentes
        </a>

        <!-- Botón Elementos -->
        <a href="{{ route('elementos.index') }}" 
           class="bg-white hover:bg-pink-100 text-pink-700 font-semibold py-6 rounded-2xl shadow-lg transition transform hover:scale-105">
            🖥️ Elementos
        </a>

    </div>
</div>
@endsection
