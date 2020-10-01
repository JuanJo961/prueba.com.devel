<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'CATEGORIA1',
            'CATEGORIA2',
            'CATEGORIA3',
            'CATEGORIA4',
            'CATEGORIA5',
            'CATEGORIA6',
        ];
      for($i=0; $i<count($data);$i++){ 
          $categoria = new Categoria();
          $categoria->nombre = $data[$i];
          $categoria->save();
        }
    }
}
