<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    // mostrar listado de aulas
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
    }

    // mostrar formulario para crear
    public function create()
    {
        return view('aulas.create');
    }

    // guardar un aula nueva
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
        ]);

        Aula::create($request->all());

        return redirect()->route('aulas.index')
            ->with('success', 'Aula creada con éxito.');
    }

    // mostrar formulario para editar
    public function edit(Aula $aula)
    {
        return view('aulas.edit', compact('aula'));
    }

    // actualizar datos de un aula
    public function update(Request $request, Aula $aula)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
        ]);

        $aula->update($request->all());

        return redirect()->route('aulas.index')
            ->with('success', 'Aula actualizada con éxito.');
    }

    // eliminar aula
    public function destroy(Aula $aula)
    {
        $aula->delete();

        return redirect()->route('aulas.index')
            ->with('success', 'Aula eliminada con éxito.');
    }
}




