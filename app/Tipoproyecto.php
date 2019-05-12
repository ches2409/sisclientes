<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoproyecto extends Model
{
    protected $table = 'tiposProyectos';
    protected $fillable = ['tipo_proyecto', 'descripcion'];

    public function proyectos(){
        return $this->hasMany(Proyecto::class, 'tipoProyecto_id');
    }

    public function setAttribute($tipo_proyecto, $value)
    {
        $this->attributes[$tipo_proyecto] = ucwords($value);
    }
}
