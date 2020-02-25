<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NombreConductor');
            $table->string('LicenciaClase');
            $table->string('LicenciaNumero');
            $table->string('LicenciaVencimiento');
            $table->string('LicenciaMunicipalidad');
            $table->string('RutConductor');
            $table->string('TelefonoConductor');
            $table->string('DireccionConductor');
            
            $table->integer('id_cliente')->references('id')->on('clientes');
            $table->integer('id_vehiculo')->references('id')->on('vehiculos');
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
        Schema::dropIfExists('conductors');
    }
}
