<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CatFuncionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funciones= Storage::disk('database')->get('cat_funciones_desempeñadas.sql');
        DB::unprepared(DB::raw($funciones));
    }
}
