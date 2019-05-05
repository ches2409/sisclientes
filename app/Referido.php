<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referido extends Model
{
    protected $fillable = ['nombre', 'telefono', 'refiere', 'parentesco', 'notas'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
