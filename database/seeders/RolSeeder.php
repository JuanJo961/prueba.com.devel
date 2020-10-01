<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;
class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'ADMINISTRADOR',
            'JEFE',
            'MEDICO',
            'ENFERMERA',
            'TRABAJO SOCIAL',
        ];
      for($i=0; $i<count($data);$i++){ 
          $rol = new Rol();
          $rol->nombre = $data[$i];
          $rol->save();
        }
    }
}
