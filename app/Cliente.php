<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['name'];

    public function dispopagos(){
        return $this->belongsToMany('App\Dispopago');
    }
    public function propventas(){
        return $this->belongsToMany('App\Propventa');
    }
}
