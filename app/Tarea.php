<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [ 'nombre', 'tipoTarea_id', 'fecha', 'hora', 'descripcion', 'cliente_id', 'responsable_id', 'estado'];

    public function tareatipo(){
        return $this->belongsTo(Tareatipo::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }
}
