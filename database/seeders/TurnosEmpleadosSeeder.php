<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\TurnoEmpleado;

class TurnosEmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'MIXTO',
            'MATUTINO',
            'VESPERTINO',
            'NOCTURNO',
            'COMISIONADO',
            'MATUTINO /VESPERTINO',
        ];
      for($i=0; $i<count($data);$i++){ 
          $turnos_empleados = new TurnoEmpleado();
          $turnos_empleados->nombre = $data[$i];
          $turnos_empleados->save();
        }
    }


}
