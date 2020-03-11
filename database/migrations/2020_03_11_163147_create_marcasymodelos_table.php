<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasymodelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('Marcas', function (Blueprint $table) {
            $table->bigIncrements('id_marca')->unique();
            $table->string('NombreMarca')->nullable();
            $table->timestamps();
        });
        
        Schema::create('Modelos', function (Blueprint $table) {
            $table->bigIncrements('id_modelo')->unique();
            $table->string('NombreModelo')->unique()->nullable();

            $table->unsignedBigInteger('id_marca')->unsigned()->nullable();
           // $table->unsignedBigInteger('id_traccion')->nullable();
           // $table->unsignedBigInteger('id_combustible')->nullable();
          //  $table->unsignedBigInteger('id_propietario')->nullable();

            $table->foreign('id_marca')->references('id_marca')->on('marcas');
           // $table->foreign('id_traccion')->references('id_traccion')->on('Tracciones');
           // $table->foreign('id_combustible')->references('id_combustible')->on('Combustibles');
         //   $table->foreign('id_propietario')->references('id_propietario')->on('Propietarios');
            
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
        Schema::dropIfExists('Modelos');
        Schema::dropIfExists('Marcas');
    }
}
