<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aula;

class AulaSeeder extends Seeder
{
    public function run()
    {
        Aula::create([
            'nombre' => 'Aula 101',
            'capacidad' => 30,
            'ubicacion' => 'Edificio A',
            'piso' => '1',
            'cortina_estado' => 'guardada',
            'proyector_estado' => 'funcional',
            'foco_intensidad' => 80,
            'activo' => true,
            'descripcion' => 'Aula con proyector y pizarra',
        ]);
    }
}
