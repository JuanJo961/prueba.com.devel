<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory;
use App\Models\Medico;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Factory::create();
        for($i = 0; $i < 100; $i++){
        $medico = new Medico();
        $medico->nombre = $faker->name;
        $medico->apellido_paterno = $faker->lastName;
        $medico->apellido_materno =  $faker->lastName;
        $medico->curp = $faker->creditCardNumber ;
        $medico->cedula = $faker->creditCardNumber;
        $medico->fecha_nacimiento = $faker->date($format = 'Y-m-d', $max = 'now');
        $medico->save();
        }
    }
}