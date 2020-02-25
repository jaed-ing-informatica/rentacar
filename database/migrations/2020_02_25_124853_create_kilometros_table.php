<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKilometrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kilometros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entrada');
            $table->string('salida');
            
            $table->timestamps();
            $table->integer('id_conductor')->references('id')->on('conductores');
            $table->integer('id_cliente')->references('id')->on('clientes');
            $table->integer('id_vehiculo')->references('id')->on('vehiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kilometros');
    }
}
