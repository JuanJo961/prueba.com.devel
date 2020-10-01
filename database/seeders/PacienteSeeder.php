<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Paciente;
use App\Models\Medico;
use Faker\Factory;
class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medico_1= Medico::select(['id'])->where('nombre', 'Alek Blanda')->first()->id;
        

        $faker=Factory::create();
        for($i = 0; $i < 100; $i++){
        $paciente = new Paciente();
        $paciente->nombre = $faker->name;
        $paciente->apellido_paterno = $faker->lastName;
        $paciente->apellido_materno =  $faker->lastName;
        $paciente->curp = $faker->creditCardNumber ;
        $paciente->num_celphone = $faker->phoneNumber;
        $paciente->fecha_nacimiento = $faker->date($format = 'Y-m-d', $max = 'now');
        $paciente->save();
        $paciente->medicos()->attach($medico_1);
        }
    }
}
            