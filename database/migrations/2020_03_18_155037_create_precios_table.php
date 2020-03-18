<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ValorNeto')->nullable();
            $table->string('ValorIVA')->nullable();
            $table->string('ValorTotal')->nullable();
            $table->string('Patente')->nullable();
            $table->string('PrecioDiario')->nullable();
            $table->string('PrecioSemanal')->nullable();
            $table->string('ValorQuincenal')->nullable();
            $table->string('ValorMensual')->nullable();
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
        Schema::dropIfExists('precios');
    }
}
