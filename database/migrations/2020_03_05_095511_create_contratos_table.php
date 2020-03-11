<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* --------------------------1---------------------------- 
        Schema::create('Propietarios', function (Blueprint $table) {
            $table->bigIncrements('id_propietario')->unique();
            
            $table->timestamps();
        });*/

                        /* --------------------------3---------------------------- */

        Schema::create('Marcas', function (Blueprint $table) {
            $table->bigIncrements('id_marca')->unique();
            $table->string('NombreMarca')->nullable();
            $table->timestamps();
        });

                /* --------------------------4---------------------------- */
        Schema::create('Tracciones', function (Blueprint $table) {
            $table->bigIncrements('id_traccion')->unique();
            $table->string('NombreTraccion')->nullable();
            $table->timestamps();
        });

                /* --------------------------5---------------------------- */
        Schema::create('Combustibles', function (Blueprint $table) {
            $table->bigIncrements('id_combustible')->unique();
            $table->string('NombreCombustible')->nullable();
            $table->timestamps();
        });

        /* --------------------------12---------------------------- */

        Schema::create('Ciudades', function (Blueprint $table) {
            $table->bigIncrements('id_ciudad')->unique();
            $table->string('NombreCudad')->nullable();
            $table->timestamps();
        });

        /* --------------------------13---------------------------- */
        Schema::create('TiposClientes', function (Blueprint $table) {
            $table->bigIncrements('id_tipoCliente')->unique();
            $table->string('NombreTipoCliente')->nullable();
            $table->string('CodigoTipoCliente')->nullable();
            $table->timestamps();
        });

        /* --------------------------8---------------------------- */
        Schema::create('Equipamientos', function (Blueprint $table) {
            $table->bigIncrements('id_equipamiento')->unique();
            $table->string('NombreEquipamiento')->nullable();
            $table->string('PrecioEquipamientoDiario')->nullable();
            $table->string('PrecioEquipamientoSuperior')->nullable();
            $table->timestamps();
        });

          /* --------------------------15---------------------------- */

          Schema::create('MediosPagos', function (Blueprint $table) {
            $table->bigIncrements('id_medioPago')->unique();
            $table->string('NombreMedioPago')->unique()->nullable();
            $table->timestamps();
        });
        
        /* --------------------------2---------------------------- */
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


                /* --------------------------6---------------------------- */
        
                Schema::create('Tipos', function (Blueprint $table) {
                    $table->bigIncrements('id_tipo')->unique();
                    $table->string('Tipo')->unique()->nullable();
                    
                   

                    $table->timestamps();
        
                   // $table->unsignedBigInteger('id_combustible')->nullable();
                    //$table->unsignedBigInteger('id_traccion')->nullable();
//                    $table->unsignedBigInteger('id_marca')->nullable();
  //                  $table->unsignedBigInteger('id_modelo')->nullable();
        
    //                $table->foreign('id_combustible')->references('id_combustible')->on('Combustibles');
      //              $table->foreign('id_traccion')->references('id_traccion')->on('Tracciones');
        //            $table->foreign('id_marca')->references('id_marca')->on('Marcas');
          //          $table->foreign('id_modelo')->references('id_modelo')->on('Modelos');
                    
                });

                 /* --------------------------9---------------------------- */
        Schema::create('Oficinas', function (Blueprint $table) {
            $table->bigIncrements('id_oficina')->unique();
            $table->string('direccion')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('telefonoFijo')->nullable();
            $table->string('telefonoCelular')->nullable();
            $table->string('email')->unique();
            
            $table->unsignedBigInteger('id_ciudad')->nullable();
            $table->foreign('id_ciudad')->references('id_ciudad')->on('Ciudades');
            $table->timestamps();
        });

                /* --------------------------7---------------------------- */
        
        
                Schema::create('Vehiculos', function (Blueprint $table) {
                    $table->bigIncrements('id_vehiculo')->unique();
                    $table->string('Patente')->unique()->nullable();
                    $table->string('PrecioDiarioRenta')->nullable();
                    $table->string('PrecioMensualRenta')->nullable();
                    $table->string('PrecioSemanalRenta')->nullable();
                    $table->string('PrecioQuincenalRenta')->nullable();
        
                    $table->string('NumeroChasis')->nullable();
                    $table->string('Año')->nullable();
                    $table->string('Color')->nullable();
                    $table->text('Descripcion')->nullable();
                    $table->string('Foto')->nullable();
                    $table->string('Estado')->nullable();

                    $table->string('NumeroPuertas')->nullable();
                    $table->string('NumeroAsientos')->nullable();
                    $table->string('CapacidadMaleta')->nullable();

                    $table->string('RutPropietario')->unique()->nullable();
                    $table->string('NombrePropietario')->nullable();
                    $table->string('DireccionPropietario')->nullable();
                    

                    $table->timestamps();
                    $table->unsignedBigInteger('id_combustible')->nullable();
                    $table->unsignedBigInteger('id_tipo')->nullable();
                    $table->unsignedBigInteger('id_oficina')->nullable();
                //    $table->unsignedBigInteger('id_km')->nullable();
                //    $table->unsignedBigInteger('id_propietario')->nullable();
                    
                    $table->foreign('id_combustible')->references('id_combustible')->on('Combustibles');
                    $table->foreign('id_tipo')->references('id_tipo')->on('Tipos');
                    $table->foreign('id_oficina')->references('id_oficina')->on('oficinas');
                   // $table->foreign('id_km')->references('id_km')->on('Kilometros');
                   // $table->foreign('id_propietario')->references('id_propietario')->on('Propietarios');
                    
                    
                    
                });
        
        
/* --------------------------10---------------------------- */

Schema::create('Kilometros', function (Blueprint $table) {
    $table->bigIncrements('id_km');
    $table->string('KmEntrega')->nullable();
    $table->string('KmRecepta')->nullable();
    $table->date('FechaEntrega')->nullable();
    $table->date('FechaRecepta')->nullable();
    
    $table->timestamps();

    $table->unsignedBigInteger('id_Vehiculo')->nullable();
    $table->foreign('id_Vehiculo')->references('id_Vehiculo')->on('Vehiculos');
   
});
       

        
        /* --------------------------11---------------------------- */

        Schema::create('Mantenciones', function (Blueprint $table) {
            $table->bigIncrements('id_mantencion');
            $table->string('Descripcion')->nullable();
            $table->string('FechaMantencionInicio')->nullable();
            $table->string('FechaMantencionFin')->nullable();
            $table->string('ValorRepuesto')->nullable();
            $table->string('ValorManoObra')->nullable();
            $table->string('ValorTotal')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('id_vehiculo')->nullable();
            $table->foreign('id_vehiculo')->references('id_vehiculo')->on('Vehiculos');
           
        });

        

        /* --------------------------14---------------------------- */
      
        Schema::create('Clientes', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->string('RutCliente')->unique()->nullable();
            $table->string('NombreCliente')->nullable();
            $table->string('ApellidoPaterno')->nullable();
            $table->string('ApellidoMaterno')->nullable();
            $table->string('DireccionCliente')->nullable();
            $table->string('DireccionComercial')->nullable();
            $table->string('CiudadComercial')->nullable();
            $table->string('CiudadCliente')->nullable();
            $table->string('FechaNacimientoCliente')->nullable();
            $table->string('TelefonoCliente')->unique()->nullable();
            $table->string('CorreoCliente')->unique()->nullable();
            $table->string('Foto')->nullable();

            $table->unsignedBigInteger('id_medioPago')->nullable();
            $table->unsignedBigInteger('id_tipoCliente')->nullable();
            $table->unsignedBigInteger('id_ciudad')->nullable();
            
            $table->foreign('id_medioPago')->references('id_medioPago')->on('MediosPagos');
            $table->foreign('id_tipoCliente')->references('id_tipoCliente')->on('TiposClientes');
            $table->foreign('id_ciudad')->references('id_ciudad')->on('Ciudades');

            $table->timestamps();
        });


        /* --------------------------17---------------------------- */
        
Schema::create('Arriendos', function (Blueprint $table) {
    $table->bigIncrements('id_arriendo');
    
    $table->integer('CantidadVehiculos')->nullable();
    $table->string('PrecioNeto')->nullable();
    $table->string('PrecioTotal')->nullable();
    $table->string('Duracion')->nullable();
    $table->date('FechaEntrega')->nullable();
    $table->date('FechaRecepcion')->nullable();
    $table->unsignedBigInteger('id_cliente')->nullable();
    $table->foreign('id_cliente')->references('id_cliente')->on('Clientes');
    $table->unsignedBigInteger('id_vehiculo')->nullable();
    $table->foreign('id_vehiculo')->references('id_vehiculo')->on('Vehiculos');
    $table->unsignedBigInteger('id_equipamiento')->nullable();
    $table->foreign('id_equipamiento')->references('id_equipamiento')->on('Equipamientos');
    
    $table->timestamps();
});

      

        /* --------------------------16---------------------------- */

       
        Schema::create('DetalleArriendo', function (Blueprint $table) {
            $table->bigIncrements('id_detalleArriendo')->unique();
            $table->string('Patente')->nullable();
            $table->integer('Cantidad')->nullable();
            $table->string('Precio')->nullable();

            $table->unsignedBigInteger('id_arriendo')->nullable();
            $table->foreign('id_arriendo')->references('id_arriendo')->on('Arriendos');
            $table->timestamps();
        });


        
/* --------------------------18---------------------------- */
        Schema::create('Users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rutUsuario')->unique()->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

           $table->unsignedBigInteger('id_oficina')->nullable();
           $table->foreign('id_oficina')->references('id_oficina')->on('Oficinas');
        });

/* --------------------------19---------------------------- */
        Schema::create('Conductores', function (Blueprint $table) {
            $table->bigIncrements('id_conductor');
            $table->string('NombreConductor')->nullable();
            $table->string('LicenciaClase')->nullable();
            $table->string('LicenciaNumero')->nullable();
            $table->string('LicenciaVencimiento')->nullable();
            $table->string('LicenciaMunicipalidad')->nullable();
            $table->string('RutConductor')->unique()->nullable();
            $table->string('TelefonoConductor')->nullable();
            $table->string('DireccionConductor')->nullable();
            
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_vehiculo')->nullable();

            $table->foreign('id_cliente')->references('id_cliente')->on('Clientes');
            $table->foreign('id_vehiculo')->references('id_vehiculo')->on('Vehiculos');
            $table->timestamps();
        });

        /* --------------------------20---------------------------- */

        Schema::create('Observaciones', function (Blueprint $table) {
            $table->bigIncrements('id_observacion');
            $table->string('Descripcion')->nullable();
            $table->date('FechaObservacion')->nullable();
            
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_vehiculo')->nullable();

            $table->foreign('id_cliente')->references('id_cliente')->on('Clientes');
            $table->foreign('id_vehiculo')->references('id_vehiculo')->on('Vehiculos');
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
        Schema::dropIfExists('Contratos');
        Schema::dropIfExists('Propietarios');
        Schema::dropIfExists('Modelos');
        Schema::dropIfExists('Marcas');
        Schema::dropIfExists('Tracciones');
        Schema::dropIfExists('Combustibles');
        Schema::dropIfExists('Equipamientos');
        Schema::dropIfExists('DetalleArriendo');
        Schema::dropIfExists('Oficinas');
        Schema::dropIfExists('TiposClientes');
        Schema::dropIfExists('Ciudades');
        Schema::dropIfExists('Mantenciones');
        Schema::dropIfExists('TiposVehiculos');
        Schema::dropIfExists('Usuarios');
        Schema::dropIfExists('Conductores');
        Schema::dropIfExists('Observaciones');
        Schema::dropIfExists('Vehiculos');
        Schema::dropIfExists('Clientes');        
        Schema::dropIfExists('Kiloemtros');
        Schema::dropIfExists('Arriendos');
        Schema::dropIfExists('Users');
    }
}
