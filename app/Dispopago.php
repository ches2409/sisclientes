<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispopago extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    public function clientes(){
        return $this->belongsToMany(Cliente::class);
    }

    public function setAttribute($nombre, $value)
    {
        $this->attributes[$nombre]=ucwords($value);
    }
}
