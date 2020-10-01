<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    }
    public function usuarios(){
        return $this->belongsToMany('\App\Usuario','roles_categorias_usuarios')
            ->withPivot('usuario_id','status');
    }
    public function roles(){
        return $this->belongsToMany('\App\Rol','roles_categorias_usuarios')
            ->withPivot('roles_id','status');
    }
}
