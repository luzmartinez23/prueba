<?php

namespace Database\Seeders;

use App\Models\Actividades;
use Illuminate\Database\Seeder;

class ActividadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actividades::create([
            'titulo' => 'Examen',
            'descripcion' => 'Descripcion del Examen',
            'materia_id' => 1
        ]);
        Actividades::create([
            'titulo' => 'Repaso',
            'descripcion' => 'Descripcion del Repaso',
            'materia_id' => 2
        ]);
        Actividades::create([
            'titulo' => 'Recuperatorio',
            'descripcion' => 'Descripcion del Recuperatorio',
            'materia_id' => 3
        ]);
    }
}
