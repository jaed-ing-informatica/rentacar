<?php

namespace App\Services;

use App\Ciudades;

class Ciudades{
    public function get(){
        $ciudades = Ciudades::get();
        $ciudadesArray[''] = 'Selecciona una ciudad';
        foreach ($ciudades as $ciudad){
            $ciudadesArray[$ciudad->id] = $ciudad->name;
        }
        return $ciudadesArray;


    }
}