<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Ruta para obtener todos los registros
Route::get('empleados', 'App\Http\Controllers\EmpleadoController@getEmpleado');

//Ruta para obtener registros especificos
Route::get('empleados/{id}', 'App\Http\Controllers\EmpleadoController@getEmpleadoById');

//Agregar nuevo registro de empleado
Route::post('addEmpleados', 'App\Http\Controllers\EmpleadoController@addEmpleado');

//Actualiza registro
Route::put('updateEmpleados/{id}', 'App\Http\Controllers\EmpleadoController@updateEmpleado');

//Eliminar registro
Route::delete('deleteEmpleados/{id}', 'App\Http\Controllers\EmpleadoController@deleteEmpleado'); 