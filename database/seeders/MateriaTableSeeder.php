<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Seeder;

class MateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            "nombre" => "Matematicas",
            "curso" => "6to",
            "grado" => "A"
        ]);
        Materia::create([
            "nombre" => "Lenguaje",
            "curso" => "4to",
            "grado" => "B"
        ]);
        Materia::create([
            "nombre" => "Ingles",
            "curso" => "5to",
            "grado" => "C"
        ]);
    }
}
