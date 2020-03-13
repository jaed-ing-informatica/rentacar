<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    //busqueda

    public function traerNombres($query, $nombre){
        if($nombre){
            return$query->where('patente', 'like',"%$nombre%");
        }
    }



    

    
}
