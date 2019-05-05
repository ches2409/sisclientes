<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    protected $table = "clasificaciones";
    protected $fillable = ['nombre', 'descripcion' ];

    public function clientes(){
        return $this->hasMany(Cliente::class, 'clasificacion');
    }
}
