<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referido extends Model
{
    protected $fillable = ['nombre', 'telefono', 'parentesco', 'notas'];
}
