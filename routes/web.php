<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    
    return view('auth.login');
});
Auth::routes(['register'=>true, 'reset'=>false]);

Route::resource('/vehiculos','VehiculosController');

Route::resource('/clientes','ClientesController');
//Route::resource('/clientes/{id}','ClientesController');

Route::get('/clientes/create/{Patente}','ClientesController@registraContratoVehiculo');

Route::resource('/conductores','ConductorController');


Route::get('/conductores/create/{Patente}/{RutCliente}/{NombreTipoCliente}','ClientesController@registrarContratoCliente');

Route::get('/precios/create/{Patente}/{RutCliente}/{NombreTipoCliente}/{RutConductor}','ClientesController@registrarContratoConductor');

Route::get('/kilometros/create/{Patente}/{RutCliente}/{RutConductor}/{NombreTipoCliente}','KilometrosController@registrarContratoKilometros');

Route::resource('/kilometros','KilometrosController');

Route::get('join_table', 'JoinTableController@index');

Route::resource('/facturas', 'FacturaController');

Route::resource('/PreciosArriendos','PreciosController');

Route::resource('/Mantenimientos','MantencionesController');

Route::resource('/Arrendados','ArriendosController');

Route::resource('/Reportes','ReportesController');
//Route::resource('/relbase', 'RelbaseController');
/*
use App\Modelos;
use App\Marcas;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Input;

Route::get('/ajax-modelo', function(){

    $marcas = Marcas::all();
    
    $id_marca = Input::get('id_marca');

    $modelos = Modelos::where('id_marca', '=', $id_marca)->get();

    return Response::json($modelos);
});*/

//Route::get('marcas', 'VehiculosController@buscarMarcas')->name('marcas.select2');







