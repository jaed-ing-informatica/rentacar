<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArriendosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arriendos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente');
            $table->integer('id_vehiculo');
            $table->integer('id_conductor');
            $table->integer('id_garantia');
            $table->integer('id_pagare');
            $table->integer('id_observaciones');
            $table->integer('id_otroConductor');
            $table->integer('id_entrega');
            $table->integer('id_recepcion');
            $table->string('MedioPago');
            $table->string('Monto');
            $table->string('FechaPago');
            

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arriendos');
    }
}
