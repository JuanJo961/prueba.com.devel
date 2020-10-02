<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\TurnoEmpleado;
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
        $categoria_1= Categoria::select(['id'])->where('nombre', 'CATEGORIA1')->first()->id;
        $turno_empleado_1= TurnoEmpleado::select(['id'])->where('nombre', 'MIXTO')->first()->id;
        $rol_1= Rol::select(['id'])->where('nombre', 'ADMINISTRADOR')->first()->id;
        $rol_2= Rol::select(['id'])->where('nombre', 'ENFERMERA')->first()->id;

        $faker=Factory::create();
        for($i = 0; $i < 1000; $i++){
        $usuario = new Usuario();
        $usuario->nombre = $faker->name;
        $usuario->apellido_paterno = $faker->lastName;;
        $usuario->apellido_materno =  $faker->lastName;;
        $usuario->fecha_nacimiento = $faker->date($format = 'Y-m-d', $max = 'now');
        $usuario->direccion = $faker->address;
        $usuario->num_celphone = $faker->phoneNumber;
        $usuario->cuidad_nac = $faker->city;
        $usuario->pais = $faker->country;
        $usuario->categoria_id = $categoria_1;
        $usuario->turno_id =  $turno_empleado_1;
        $usuario->save();
        $usuario->roles()->attach($rol_1);
        }
    }
}