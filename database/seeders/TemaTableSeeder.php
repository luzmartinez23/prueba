<?php

namespace Database\Seeders;

use App\Models\Tema;
use Illuminate\Database\Seeder;

class TemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tema::create([
            "titulo_tema" => "Oraciones",
            "descripcion" => "simples y compuestas",
            "estado" => "Activo",
            "materia_id" => 1
        ]);
        Tema::create([
            "titulo_tema" => "Numeros naturales",
            "descripcion" => "con operaciones combinadas",
            "estado" => "Activo",
            "materia_id" => 2
        ]);
        Tema::create([
            "titulo_tema" => "Ingles Basico",
            "descripcion" => "Principiante",
            "estado" => "Activo",
            "materia_id" => 3
        ]);
    }
}
