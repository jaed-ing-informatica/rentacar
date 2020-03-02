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
Auth::routes(['register'=>false, 'reset'=>false]);

Route::resource('/vehiculos','VehiculosController')->middleware('auth');

Route::resource('/clientes','ClientesController')->middleware('auth');

Route::resource('/conductores','ConductorController')->middleware('auth');

Route::resource('/kilometros','KilometrosController')->middleware('auth');

Route::get('join_table', 'JoinTableController@index');







