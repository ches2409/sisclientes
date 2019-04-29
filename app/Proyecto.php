<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable =[ 'proyecto', 'ubicacion', 'tipo_proyecto', 'descripcion'];
}
