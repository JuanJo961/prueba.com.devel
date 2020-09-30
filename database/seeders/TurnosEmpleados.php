<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurnosEmpleados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1','nombre' => 'MIXTO'],
            ['id' => '2','nombre' => 'MATUTINO'],
            ['id' => '3','nombre' => 'VESPERTINO'],
            ['id' => '4','nombre' => 'NOCTURNO'],
            ['id' => '5','nombre' => 'COMISIONADO'],
            ['id' => '6','nombre' => 'MATUTINO /VESPERTINO'],


        ];
        DB::table('turnos_empleados')->insert($data);
        }


}
