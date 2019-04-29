<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [ 'nombre', 'tipoTarea', 'fecha', 'hora', 'descripcion', 'estado'];
}
