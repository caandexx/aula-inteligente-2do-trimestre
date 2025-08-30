<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ubicacion',
        'capacidad',
        'descripcion',
    ];

    // relaciones
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function elementos()
    {
        return $this->hasMany(Elemento::class);
    }
}
