<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{

  protected $table = 'modelos';

  protected $fillable = ['NombreModelos','id_marca'];
    //

    //protected $table = 'modelos';

    //protected $fillable = ['NombreModelo','id_marca'];

    //public static function modelos($id){
      //  return Modelos::where('id_marca','=',$id)
        //->get();
    //}
}
