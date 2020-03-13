<?php

namespace App\Services;

use App\Marcas;

class Faculties
{
    public function get()
    {
        $marcas = Marcas::get();
        $fmarcasArray[''] = 'Selecciona una marca';
        foreach ($marcas as $marca) {
            $marcasArray[$marca->id_marca] = $marca->NombreMarca;
        }
        return $marcasArray;
    }
}