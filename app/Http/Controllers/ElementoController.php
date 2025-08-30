<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use Illuminate\Http\Request;

class ElementoController extends Controller
{
    public function index()
    {
        $elementos = Elemento::all();
        return view('elementos.index', compact('elementos'));
    }

    public function create()
    {
        return view('elementos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
        ]);

        Elemento::create($request->all());
        return redirect()->route('elementos.index')->with('success', 'Elemento creado con éxito.');
    }

    public function edit(Elemento $elemento)
    {
        return view('elementos.edit', compact('elemento'));
    }

    public function update(Request $request, Elemento $elemento)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
        ]);

        $elemento->update($request->all());
        return redirect()->route('elementos.index')->with('success', 'Elemento actualizado con éxito.');
    }

    public function destroy(Elemento $elemento)
    {
        $elemento->delete();
        return redirect()->route('elementos.index')->with('success', 'Elemento eliminado con éxito.');
    }
}