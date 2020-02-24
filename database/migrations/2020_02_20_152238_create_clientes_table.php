<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RutCliente');
            $table->string('NombreCliente');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('DireccionCliente');
            $table->string('DireccionComercial');
            $table->string('CiudadComercial');
            $table->string('CiudadCliente');
            $table->string('FechaNacimientoCliente');
            $table->string('TelefonoCliente');
            $table->string('CorreoCliente');
            $table->string('Foto');
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
        Schema::dropIfExists('clientes');
    }
}
