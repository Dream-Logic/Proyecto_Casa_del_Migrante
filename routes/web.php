<?php

use Illuminate\Support\Facades\Route;

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
    return view('bienvenido');
});

Route::get('/principal','paginaPrincipal_controller@index')
    ->name('index.index');

Route::get('/acceder', 'paginaPrincipal_controller@crear')
    ->name('construccion.crear');


/*Rutas de vista redireccionadora de FORMULARIOS*/

Route::get('/principalformulario','paginaPrincipal_controller@principalformulario')
    ->name('hola.ho');
Route::get('/Btn_atras','paginaPrincipal_controller@atras')
    ->name('atras.regre');
Route::get('/Btn_regresar','paginaPrincipal_controller@regreso')
    ->name('regresar.volv');

/*Ruta para el formulario*/


/*RUTAS PARA EL LISTADO*/
Route::get('/proyectos/listado','ProyectoController@index')
    ->name('listado.index');
/*rutas de crear */
Route::get('/proyectos/crear', 'ProyectoController@create')
    ->name('ficha.create');
Route::post('/proyectos/crear', 'ProyectoController@store')
    ->name('listado.guardar');
/*Rutas para mostrar listado*/
Route::get('/proyectos/{id}','ProyectoController@show')
    ->name('detalles.mostrar')
    ->where('id','[0-9]+');

//RUTAS PARA EDITAR


Route::get('/proyectos/{id}/editar','ProyectoController@edit')
    ->name('listado.edit')
    ->where('id','[0-9]+');

Route::put('/proyectos/{id}/editar','ProyectoController@update')
    ->name('listado.update')
    ->where('id','[0-9]+');

//RUTA PARA BORRAR

Route::delete('/proyectos/{id}/borrar','ProyectoController@destroy')
    ->name('listado.borrar')
    ->where('id','[0-9]+');
