<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Turno;

class TurnoSeeder extends Seeder
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
                'COMICIONADO',
            ];
        for($i=0; $i<count($data);$i++){
            $categoria =new Turno();
            $categoria->nombre = $data[$i];
            $categoria->save();
            }
    }
}
