<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tareatipo extends Model
{
    protected $fillable = ['tipoTarea', 'area'];

    public function tareas(){
        return $this->hasMany(Tarea::class, 'tipoTarea_id');
    }

    public function setAttribute($tipoTarea, $value)
    {
        $this->attributes[$tipoTarea]=ucwords($value);
    }

    public function getAreaAttribute($value)
    {
        return strtoupper($value);
    }
}
