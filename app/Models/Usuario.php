<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public function categorias()
    {
        return $this->hasMany('App\Models\Categoria');
        
    }
    public function turnos()
    {
        return $this->hasMany('App\Models\Turno');
    }
}
