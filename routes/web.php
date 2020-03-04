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

Route::get('/clientes/create/{id}','ClientesController@factura');

Route::resource('/conductores','ConductorController');

Route::resource('/kilometros','KilometrosController');

Route::get('join_table', 'JoinTableController@index');

Route::resource('/facturas', 'FacturaController');

Route::resource('/relbase', 'RelbaseController');









