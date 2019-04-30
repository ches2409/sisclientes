<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [ 'nombre', 'tipoTarea', 'fecha', 'hora', 'descripcion', 'cliente_id', 'responsable_id', 'estado'];

    public function tareatipo(){
        return $this->belongsTo(Tareatipo::class);
    }
}
