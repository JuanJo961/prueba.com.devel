<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

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
            'Admin',
            'Medico',
            'Enfermera',
            'Trabajo Social',

        ];
        for($i=0; $i<count($data);$i++){
            $rol=new Rol();
            $rol->nombre = $data[$i];
            $rol->save();
        }
    }

}
