<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kilometros extends Model
{
    //
    protected $table = "kilometros";
    
    protected $fillable = ['entrada', 'salida', 'id_vehiculo', 'id_cliente', 'id_conductor'];
    
    public function vehiculos(){
        return $this->belongsTo('App\Vehiculos');
    }
    public function clientes(){
        return $this->belongsTo('App\Clientes');
    }
    public function conductor(){
        return $this->belongsTo('App\Conductor');
    }
    
}

