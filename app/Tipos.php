<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{

    protected $table = 'tiposvehiculos';
    
    
    protected $fillable = [
        'id_tipo','Tipo',
    ];
}
