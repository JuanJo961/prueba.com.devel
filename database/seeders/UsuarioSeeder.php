<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Turno;
use App\Models\Rol;
use Faker\Factory;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria_1= Categoria::select('id')->where('nombre',"Categoria1")->first()->id;
        $turno_1= Turno::select('id')->where('nombre',"MIXTO")->first()->id;
        $rol_1= Rol::select(['id'])->where('nombre','Admin')->first()->id;
        $rol_2= Rol::select(['id'])->where('nombre','Medico')->first()->id;


        $faker = Factory::create();
        for ($i = 0; $i < 1000000; $i++) {
            $usuarios = new Usuario();
            $usuarios->nombre = $faker->name;
            $usuarios->apellido_p = $faker->lastName ;
            $usuarios->apellido_m = $faker->lastName ;
            $usuarios->direccion = $faker->address;
            $usuarios->numero_tel = $faker->phoneNumber;
            $usuarios->email = $faker->email;
            $usuarios->cod_post = $faker->postcode;
            $usuarios->fecha_nacimiento = $faker->date($format = 'Y-m-d', $max = 'now');
            $usuarios->categoria_id = $categoria_1;
            $usuarios->turno_id = $turno_1;
            $usuarios->save();
            $usuarios->roles()->attach($rol_2);
        }
    }
}
