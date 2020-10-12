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
/*rutas de primer formulario
*/
/*RUTAS DE LA PRIMERA FICHA */
Route::get('/proyectos','ProyectoController@indice')
    ->name('ficha.indice');

/*RUTAS DE LA SEGUNDA FICHA */
Route::get('/responsable','ResponsableController@fichados')
    ->name('ficha.fichados');
/*RUTAS DE LA TERCERA FICHA */
Route::get('/narracion','NarracionController@fichatres')
    ->name('fichas.fichatres');
/*RUTAS DE LA Cuarta FICHA */
Route::get('/tecnico','TecnicoController@fichacuatro')
    ->name('fichasa.fichacuatro');
/*RUTAS DE la web en construccion */
Route::get('/construccion','ConstruccionController@vacia')
    ->name('fichaV.vacia');