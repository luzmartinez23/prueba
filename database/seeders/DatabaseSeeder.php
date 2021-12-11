<?php

namespace Database\Seeders;

use CreateTemasTable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MateriaTableSeeder::class);
        $this->call(ActividadTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RolTableSeeder::class);
        $this->call(TemaTableSeeder::class);
    }
}
