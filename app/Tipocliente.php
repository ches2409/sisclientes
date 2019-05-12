<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipocliente extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    public function clientes(){
        return $this->hasMany(Cliente::class, 'estadoCliente');
    }

    public function setAttribute($nombre, $value)
    {
        $this->attributes[$nombre]=ucwords($value);
    }
}
