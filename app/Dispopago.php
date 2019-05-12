<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispopago extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    public function clientes(){
        return $this->belongsToMany('App\Cliente');

    }

    public function setAttribute($nombre, $value)
    {
        $this->attributes[$nombre]=ucwords($value);
    }
}
