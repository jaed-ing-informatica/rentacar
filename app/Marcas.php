<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    //
    protected $table = 'marcas';

    protected $fillable = ['NombreMarca'];
}
