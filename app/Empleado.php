<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'identificacion', 'fechaNacimiento', 'email', 'direccion', 'telefono', 'cargo'];
}
