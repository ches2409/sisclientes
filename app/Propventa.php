<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propventa extends Model
{
    protected $fillable = ['nombre'];

    public function clientes(){
        return $this->belongsToMany('App\Cliente');
    }
}
