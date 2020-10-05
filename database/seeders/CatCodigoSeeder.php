<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CatCodigoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigos= Storage::disk('database')->get('cat_codigo_empleados.sql');
        DB::unprepared(DB::raw($codigos));
    }
    
}
