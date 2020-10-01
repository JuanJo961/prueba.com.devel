<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Turno;
use App\Categoria;

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
        return $this->belongsToMany('\App\Rol','roles_categorias_usuarios')
            ->withPivot('roles_id','status');
    }

    public function categories(){
        return $this->belongsToMany('\App\Categoria','roles_categorias_usuarios')
            ->withPivot('categorias_id','status');
    }
}
