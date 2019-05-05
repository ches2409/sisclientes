<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedadestado extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    public function clientes(){
        return $this->hasMany(Cliente::class, 'estadoPropiedad');
    }
}
