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

Route::get('/tipo_usuarios', 'App\Http\Controllers\TipoUsuarioController@index');

Route::post('/tipo_usuarios', 'App\Http\Controllers\TipoUsuarioController@store');

Route::put('/tipo_usuarios/{id}', 'App\Http\Controllers\TipoUsuarioController@update');

Route::delete('/tipo_usuarios/{id}', 'App\Http\Controllers\TipoUsuarioController@destroy');