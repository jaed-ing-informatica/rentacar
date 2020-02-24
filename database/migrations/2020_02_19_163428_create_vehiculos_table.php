<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Rut');
            $table->string('Propietario');
            $table->string('TipoVehiculo');
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('Patente');
            $table->string('Año');
            $table->string('Color');
            $table->string('NumeroChasis');
            $table->string('Combustible');
            $table->string('Foto');
            $table->string('Estado');
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
        Schema::dropIfExists('vehiculos');
    }
}
