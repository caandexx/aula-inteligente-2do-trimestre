<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Http\Requests\AulaRequest;

class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
    }

    public function create()
    {
        return view('aulas.create');
    }

    public function store(AulaRequest $request)
    {
        Aula::create($request->validated());
        return redirect()->route('aulas.index')
            ->with('success', 'Aula creada con éxito.');
    }

    public function show(Aula $aula)
    {
        return view('aulas.show', compact('aula'));
    }

    public function edit(Aula $aula)
    {
        return view('aulas.edit', compact('aula'));
    }

    public function update(AulaRequest $request, Aula $aula)
    {
        $aula->update($request->validated());
        return redirect()->route('aulas.index')
            ->with('success', 'Aula actualizada con éxito.');
    }

    public function destroy(Aula $aula)
    {
        $aula->delete();
        return redirect()->route('aulas.index')
            ->with('success', 'Aula eliminada con éxito.');
    }
}



