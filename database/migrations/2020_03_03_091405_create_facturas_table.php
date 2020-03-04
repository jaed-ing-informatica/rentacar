<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProductoNumero');
            $table->string('ProductoNombre');
            $table->string('ProductoCantidad');
            $table->string('ProductoPrecio');
            $table->string('ProductoTotal');

            $table->string('EmpresaDireccion');
            $table->string('EmpresaNombre');
            $table->string('Notas');

            $table->string('FacturaSubTotal');
            $table->string('FacturaTasaimpuesto');
            $table->string('FacturaMontoImpuesto');
            $table->string('FacturaTotal');
            $table->string('FacturaCantidadPagada');
            $table->string('FacturaCantidadDebida');
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
        Schema::dropIfExists('facturas');
    }
}
