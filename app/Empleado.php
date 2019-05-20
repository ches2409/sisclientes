<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'identificacion', 'fechaNacimiento', 'email', 'direccion', 'telefono', 'cargo_id'];

    public function tareas(){
        return $this->hasMany( Tarea::class, 'tipoTarea_id');
    }

    public function cargo(){
        return $this->belongsTo(Cargo::class);
    }

    public function setAttribute($nombre, $value)
    {
        $this->attributes[$nombre]=ucwords($value);
    }
}
