<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\TurnoEmpleado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TurnosEmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turnos= Storage::disk('database')->get('turnos_empleados.sql');
        DB::unprepared($turnos);  
       /*  $data = [
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
        } */
    }


}
