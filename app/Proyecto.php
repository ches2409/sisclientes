<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable =[ 'proyecto', 'ubicacion', 'tipoProyecto_id', 'descripcion'];

    public function tipoproyecto(){
        return $this->belongsTo(Tipoproyecto::class);
    }
}
