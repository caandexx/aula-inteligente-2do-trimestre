<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\ElementoController;

// Página principal
Route::get('/', function () {
    return view('home'); // tu home.blade.php
})->name('inicio');

// --- Rutas de Aulas ---
Route::resource('aulas', AulaController::class);

// --- Rutas de Docentes ---
Route::resource('docentes', DocenteController::class);

// --- Rutas de Elementos ---
Route::resource('elementos', ElementoController::class);

Route::get('/pokemon-chart', function () {
    return view('pokemon'); // debe coincidir con el nombre del Blade
});


