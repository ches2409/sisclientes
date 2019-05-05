<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [ 'nombre', 'apellido', 'identificacion', 'fechaNacimiento', 'email', 'direccion', 'telefono1', 'telefono2', 'estadoCivil', 'ocupacion', 'estadoPropiedad', 'proyectoInteres', 'necesidadPrimaria', 'otraNecesidad', 'interes', 'referido', 'nota', 'estadoCliente', 'clasificacion'];

    public function tareas(){
        return $this->hasMany(Tarea::class, 'tipoTarea_id');
    }

    public function referidos(){
        return $this->hasMany(Referido::class, 'refiere');
    }

    public function tipocliente(){
        return $this->belongsTo(Tipocliente::class);
    }

    public function propiedadestado(){
        return $this->belongsTo(Propiedadestado::class);
    }

    public function clasificacion(){
        return $this->belongsTo(Clasificacion::class);
    }

    public function tiempoinversion(){
        return $this->belongsTo(Tiempoinversion::class);
    }

    public function dispopagos(){
        return $this->belongsToMany('App\Dispopago');
    }
    public function propventas(){
        return $this->belongsToMany('App\Propventa');
    }
}
