<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AulaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // de momento, siempre autorizado
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'ubicacion' => 'nullable|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'descripcion' => 'nullable|string',
        ];
    }
}
