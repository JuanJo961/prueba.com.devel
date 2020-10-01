<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Turno;
use App\Categoria;
use App\Rol;

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
    public function roles(){
        return $this->belongsToMany('\App\Models\Rol')
            ->withPivot('roles_id')->withTimestamps();;
    }


}
