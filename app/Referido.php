<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referido extends Model
{
    protected $fillable = ['nombre', 'telefono', 'refiere', 'parentesco', 'notas'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function setAttribute($nombre, $value)
    {
        $this->attributes[$nombre]=ucwords($value);
    }
    public function setParentescoAttribute($parentesco, $value)
    {
        $this->attributes[$parentesco] = ucwords($value);
    }
}
