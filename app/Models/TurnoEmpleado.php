<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnoEmpleado extends Model
{
    use HasFactory;
    protected $table='turnos_empleados';
    public $timestamps=false;
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    }
}
