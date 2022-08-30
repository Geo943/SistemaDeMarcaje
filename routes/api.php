<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoUsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//RUTAS PARA TIPOS DE USUARIO

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tipo_usuarios', 'App\Http\Controllers\TipoUsuarioController@index');

Route::post('/tipo_usuarios', 'App\Http\Controllers\TipoUsuarioController@store');

Route::put('/tipo_usuarios/{id}', 'App\Http\Controllers\TipoUsuarioController@update');

Route::delete('/tipo_usuarios/{id}', 'App\Http\Controllers\TipoUsuarioController@destroy');

//RUTAS PARA DEPARTAMENTO

Route::get('/departamentos', 'App\Http\Controllers\DepartamentoController@index');

Route::post('/departamentos', 'App\Http\Controllers\DepartamentoController@store');

Route::put('/departamentos/{id}', 'App\Http\Controllers\DepartamentoController@update');

Route::delete('/departamentos/{id}', 'App\Http\Controllers\DepartamentoController@destroy');

//RUTA DE EMPLEADOS

Route::get('/empleados', 'App\Http\Controllers\EmpleadoController@index');

Route::post('/empleados', 'App\Http\Controllers\EmpleadoController@store');

Route::put('/empleados/{id}', 'App\Http\Controllers\EmpleadoController@update');

Route::delete('/empleados/{id}', 'App\Http\Controllers\EmpleadoController@destroy');

//RUTA DE MARCAJE

Route::get('/marcacions', 'App\Http\Controllers\MarcacionController@index');

Route::get('/marcacions/{id_empleado}', 'App\Http\Controllers\MarcacionController@marcajeUid');

Route::post('/marcacions', 'App\Http\Controllers\MarcacionController@store');

Route::put('/marcacions/{id}', 'App\Http\Controllers\MarcacionController@update');

Route::delete('/marcacions/{id}', 'App\Http\Controllers\MarcacionController@destroy');

//ruta de sesion 

Route::post('/regisro', 'App\Http\Controllers\SessionsController@regisro');

Route::post('/usuarios', 'App\Http\Controllers\SessionsController@login');

Route::post('/perfil', 'App\Http\Controllers\SessionsController@perfil');

Route::post('/logout', 'App\Http\Controllers\SessionsController@logout');