<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Paciente;
use App\Models\Medico;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medico= Medico::select(['id'])->where ('nombre','Anjali Douglas')->first()->id;

        $faker = Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $paciente = new Paciente();
            $paciente->nombre = $faker->name;
            $paciente->apellido_p = $faker->lastName;
            $paciente->apellido_m = $faker->lastName;
            $paciente->fecha_nacimiento = $faker->date($format = 'Y-m-d', $max = 'now');
            $paciente->telefono = $faker->phoneNumber;
            $paciente->lugar_nac = $faker->city;
            $paciente->save();
            $paciente->medicos()->attach($medico);
        }
    }
}
