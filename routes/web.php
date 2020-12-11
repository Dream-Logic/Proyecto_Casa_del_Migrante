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

Auth::routes();
Route::get('/', function () {
    return view('bienvenido');
});
Route::group(["middleware" => "auth"], function () {//director

    Route::group(['middleware' => 'admin'], function () {
//aquitodo lo del administrador
        /*Rutas de las vistas gestor de usuario*/

        Route::get('/principal', 'paginaPrincipal_controller@index')
            ->name('index.index');
        Route::get('/gestor', 'GestorUsuarioController@indexAdmin')
            ->name('gestor.usuario');

        /*Rutas de vista redireccionadora de FORMULARIOS*/
        Route::get('/principalformulario', 'paginaPrincipal_controller@principalformulario')
            ->name('hola.ho');
        Route::get('/Btn_atras', 'paginaPrincipal_controller@atras')
            ->name('atras.regre');
        Route::get('/Btn_regresar', 'paginaPrincipal_controller@regreso')
            ->name('regresar.volv');

        /*Ruta para el formulario*/

        /*RUTAS PARA EL LISTADO*/
        Route::get('/proyectos/listado', 'HuespedController@index')
            ->name('listado.index');


//RUTAS PARA EDITAR


//RUTA QUE DIRIGE A LAS ESTADISTICAS//
        Route::get('/estadisticas', 'EstadisticaController@index')
            ->name('estadisticas.admin');
//Rutas que redirigen a cada uno de los gráficos//
        Route::get('/paridadGenero', 'EstadisticaController@paridad')
            ->name('grafico.paridadGenero');
        Route::get('/indiceDesercion', 'EstadisticaController@desercion')
            ->name('grafico.desercion');
        Route::get('/indiceVulnerabilidad', 'EstadisticaController@vulnerabilidad')
            ->name('grafico.vulnerabilidad');

//Aqui van todas las rutas de director
//Ruta para acceso del direcctor//
        Route::get('/dire', 'paginaPrincipal_controller@principaldirec')
            ->name('dire.access');
        //Rutas de listados de salud//
        Route::get('/salud', 'paginaPrincipal_controller@paginasalud')
            ->name('salud.salu');

        Route::get('/salud', 'paginaPrincipal_controller@salud')
            ->name('salud.salu');
        Route::get('/saludDi', 'paginaPrincipal_controller@SaludDire')
            ->name('saludDire.salu');
        Route::get('/saludDi', 'paginaPrincipal_controller@SDire')
            ->name('saludDire.salu');

        Route::get('/home', 'HomeController@index')->name('home');
        /*ruta que dirige a la vista gestor de usuario*/
        Route::get('/gestorDirec', 'GestorUsuarioController@indexDirec')
            ->name('gestor.direc');

        //ROUTES LISTADO DIRECTOR
        Route::get('/huesped/listadoDirector', 'HuespedController@director')
            ->name('listado.director');
        Route::get('/dire', 'paginaPrincipal_controller@principaldirec')
            ->name('dire.access');
        Route::get('/huesped/{id}', 'HuespedController@show')
            ->name('huesped.mostrar')
            ->where('id', '[0-9]+');

        //NUEVAS RUTAS DEL FORMULARIO HUESPED

        Route::get('/huesped/crear', 'HuespedController@nuevo')
            ->name('huesped.nuevo');
        Route::post("/huesped/store", "HuespedController@store")
            ->name("huesped.store");
        Route::get('/responsable/{id}/crear', 'ResponsableController@nuevo')
            ->name('responsable.nuevo');
        Route::post("/responsable/{id}/store", "ResponsableController@store")
            ->name("responsable.store");
        Route::get('/narracion/{id}/nuevo', 'NarracionController@create')
            ->name('narracion.nuevo');
        Route::post('/narracion/{id}/store', 'NarracionController@store')
            ->name('narracion.store');
        Route::get('/huesped/{id}/editar', 'HuespedController@edit')
            ->name('huesped.edit')
            ->where('id', '[0-9]+');
        Route::put('/huesped/{id}/editar', 'HuespedController@update')
            ->name('huesped.update')
            ->where('id', '[0-9]+');
        Route::delete('/huesped/{id}/borrar', 'HuespedController@destroy')
            ->name('huesped.borrar')
            ->where('id', '[0-9]+');
        Route::get('/huesped/{id}', 'HuespedController@show')
            ->name('huesped.mostrar')
            ->where('id', '[0-9]+');
    });

});
Route::get('/passwordreset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name("password.request1");
Route::post('/passwordemail', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name("password.email1");
Route::get('/passwordreset{token}', 'Auth\ResetPasswordController@showResetForm')->name("password.reset1");
Route::post('/passwordreset', 'Auth\ResetPasswordController@reset');


