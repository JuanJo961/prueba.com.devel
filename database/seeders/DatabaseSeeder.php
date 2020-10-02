<?php

namespace Database\Seeders;

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
        $this->call(TurnosEmpleadosSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(MedicoSeeder::class);
        $this->call(UsuarioSeeder::class);
        //$this->call(PacienteSeeder::class);
        $this->call(CatPlazaSeeder::class);
        $this->call(CatDepartamentoSeeder::class);
    }
}
