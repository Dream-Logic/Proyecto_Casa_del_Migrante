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
Route::group(["middleware"=>"auth"],function () {//director

    Route::group(['middleware' => 'admin'], function () {
//aquitodo lo del administrador
/*Rutas de las vistas gestor de usuario*/
Route::get('/gestor', 'GestorUsuarioController@indexAdmin')
    ->name('gestor.usuario');

Route::get('/principal','paginaPrincipal_controller@index')
    ->name('index.index');

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
    });




//Aqui van todas las rutas de director
//Ruta para acceso del direcctor//
    Route::get('/dire','paginaPrincipal_controller@principaldirec')
        ->name('dire.access');

    Route::get('/salud','paginaPrincipal_controller@paginasalud')
        ->name('salud.salu');
    Route::get('/home', 'HomeController@index')->name('home');
    /*ruta que dirige a la vista gestor de usuario*/
    Route::get('/gestorDirec', 'GestorUsuarioController@indexDirec')
        ->name('gestor.direc');

    //ROUTES LISTADO DIRECTOR
    Route::get('/proyectos/listadoDirector','ProyectoController@director')
        ->name('listado.director');

    Route::get('/proyectos/{id}','ProyectoController@show')
        ->name('detalles.mostrar')
        ->where('id','[0-9]+');

});
Auth::routes();

