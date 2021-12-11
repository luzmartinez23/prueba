<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'nombre_rol' => 'Director'
        ]);
        Rol::create([
            'nombre_rol' => 'Profesor'
        ]);
        Rol::create([
            'nombre_rol' => 'Estudiante'
        ]);
    }
}
