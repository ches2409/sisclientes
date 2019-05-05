<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiempoinversion extends Model
{
    protected $table = "tiempoinversiones";
    protected $fillable = ['nombre', 'descripcion',];

    public function clientes(){
        return $this->hasMany(Cliente::class, 'interes');
    }
}
