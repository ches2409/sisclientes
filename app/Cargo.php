<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [ 'nombre', 'descripcion'];

    public function empleados(){
        return $this->hasMany(Empleado::class, 'cargo_id');
    }

    public function setAttribute($nombre, $value)
    {
        $this->attributes[$nombre] = ucwords($value);
    }
}
