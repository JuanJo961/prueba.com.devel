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

        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $medico = new Medico();
            $medico->nombre = $faker->name;
            $medico->apellido_p = $faker->lastName;
            $medico->apellido_m = $faker->lastName;
            $medico->curp = $faker->unixTime;
            $medico->fecha_nacimiento = $faker->date($format = 'Y-m-d', $max = 'now');
            $medico->cedula = $faker->creditCardNumber;
            $medico->save();

        }
    }

}
