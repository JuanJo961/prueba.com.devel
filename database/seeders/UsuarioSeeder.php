<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Turno;

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

        $usuarios = new Usuario();
        $usuarios->nombre = 'Juan Jose';
        $usuarios->apellido_p = 'Jauregui';
        $usuarios->apellido_m = 'Acosta';
        $usuarios->fecha_nacimiento = date('d-m-y');
        $usuarios->categoria_id = $categoria_1;
        $usuarios->turno_id = $turno_1;
        $usuarios->save();
        
    }
}
