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

//RUTA DE QUE DIRIGE A LA VISTA DE BIENVENIDOS
Route::get('/', function () {
    return view('bienvenido');
});
//DIRECTOR
Route::group(["middleware" => "auth"], function () {

//ADMINISTRADOR
Route::group(['middleware' => 'admin'], function () {
    /*RUTAS DEL ADMINISTRADOR*/
    //RUTA QUE DIRIGE A LA VISTA PRINCIPAL DEL ADMINISTRADOR
    Route::get('/principal', 'paginaPrincipal_controller@index')
        ->name('index.index');
    /*RUTAS QUE DIRIGE A LOS FORMULARIOS*/
    Route::get('/principalformulario', 'paginaPrincipal_controller@principalformulario')
        ->name('hola.hola');
    Route::get('/Btn_atras', 'paginaPrincipal_controller@atras')
        ->name('atras.regre');
    Route::get('/Btn_regresar', 'paginaPrincipal_controller@regreso')
        ->name('regresar.volv');

    /*RUTAS PARA EL LISTADO DEL ADMINISTRADOR*/
    Route::get('/proyectos/listado', 'HuespedController@index')
        ->name('listado.index');

    /*RUTAS PARA LA VISTA SALUD DEL ADMINISTRADOR*/
        Route::get('/salud', 'paginaPrincipal_controller@salud')
            ->name('salud.salu');
        Route::get('/saludAdmin', 'paginaPrincipal_controller@saludAdmin')
            ->name('Admin.salud');
        //RUTA QUE DIRIGE A LAS ESTADISTICAS//
        Route::get('/estadisticas', 'EstadisticaController@index')
            ->name('estadisticas.admin');
    Route::get('/personal', 'paginaPrincipal_controller@Personal')
        ->name('personal.personal');

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

//Aqui van todas las rutas de director
//Ruta para acceso del direcctor//
    //Rutas de listados de salud//
    Route::get('/saludDi', 'paginaPrincipal_controller@SaDire')
        ->name('saludDire.salu');
    Route::get('/saludD', 'paginaPrincipal_controller@SDire')
        ->name('saludDire.sal');
    Route::get('/directorSalud', 'paginaPrincipal_contrller@buscador')
        ->name('Listado.buscador');
    Route::get('/home', 'HomeController@index')->name('home');

    //ROUTES LISTADO DIRECTOR
    Route::get('/huesped/listadoDirector', 'HuespedController@director')
        ->name('listado.director');
    Route::get('/dire', 'paginaPrincipal_controller@principaldirec')
        ->name('dire.access');
    Route::get('/huesped/{id}', 'HuespedController@show')
        ->name('huesped.mostrar')
        ->where('id', '[0-9]+');
    //Ruta de las estadisticas del director//
    Route::get('/estadisticasDirec', 'EstadisticaDirectorController@index')
        ->name('estadisticas.direc');
});

Route::get('/passwordreset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name("password.request1");
Route::post('/passwordemail', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name("password.email1");
Route::get('/passwordreset{token}', 'Auth\ResetPasswordController@showResetForm')->name("password.reset1");
Route::post('/passwordreset', 'Auth\ResetPasswordController@reset');


