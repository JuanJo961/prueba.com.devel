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
            'Categoria1',
            'Categoria2',
            'Categoria3',
            'Categoria4',
            'Categoria5',
        ];
    for($i=0; $i<count($data);$i++){
        $categoria =new Categoria();
        $categoria->nombre = $data[$i];
        $categoria->save();
        }
   }
}
