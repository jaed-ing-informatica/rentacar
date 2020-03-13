<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    //
    protected $fillable = ['NombreMarca'];
    public function Modelos(){
        return $this->belongsTo('App\Modelos','id_marca');
    }
}
