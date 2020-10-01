<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsToMany('\App\Categoria','roles_categorias_usuarios')
            ->withPivot('categorias_id','status');
    }
    public function usuarios(){
        return $this->belongsToMany('\App\Usuario','roles_categorias_usuarios')
            ->withPivot('usuario_id','status');
    }
}
