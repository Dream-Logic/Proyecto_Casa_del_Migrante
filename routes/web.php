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
        //RUTA QUE DIRIGE A LA VISTA DE ACTIVIDADES//
        Route::get('/actividades', 'ActividadController@activities')
            ->name('actividades.admin');

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

        /*NUEVASSSS*/
        /*  RUTAS PARA EL LISTADO EMPLEADOS ADMINISTRADOR*/
        /*Ruta para el forulario del personal*/
        Route::get('/personal', 'EmpleadoController@personal')
            ->name('personal.personal');
        /*  Rutas para el listado del personal*/
        Route::get('/empleados/listado', 'EmpleadoController@index')
            ->name('listadoEmpleado.index');
        /*Ruta para el store*/
        Route::post("/personal/store", "EmpleadoController@store")
            ->name("personal.store");
        /*Ruta para editar*/
        Route::get('/personal/{id}/editar', 'EmpleadoController@edit')
            ->name('personal.edit');
        /*Ruta update*/
        Route::put('/empleado/{id}/editar', 'EmpleadoController@update')
            ->name('personal.update');
        /*Ruta para eliminar*/
        Route::delete('/personal/{id}/borrar', 'EmpleadoController@destroy')
            ->name('personal.borrar')
            ->where('id', '[0-9]+');
        /*RUtas para ver detalles del empleado*/
        Route::get('/empleado/{id}', 'EmpleadoController@show')
            ->name('empleado.mostrar')
            ->where('id', '[0-9]+');

        /*  Rutas para el Calendario de eventos*/
        Route::get('Evento/index', 'ControllerEvent@index');
        Route::get('Evento/index/{month}', 'ControllerEvent@index_month');

        // formulario
        Route::get('Evento/form', 'ControllerEvent@form');
        Route::post('Evento/create', 'ControllerEvent@create');
        // Detalles de evento
        Route::get('Evento/details/{id}', 'ControllerEvent@details');

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
    /*Empleado director lista*/
    Route::get('/empleado/lista', 'EmpleadoController@director')
        ->name('listaEmpleado.director');
    /*Empleado vista ver Director*/
    Route::get('/empleado/{id}', 'EmpleadoController@show')
        ->name('empleado.mostrar')
        ->where('id', '[0-9]+');


});

Route::get('/passwordreset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name("password.request1");
Route::post('/passwordemail', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name("password.email1");
Route::get('/passwordreset{token}', 'Auth\ResetPasswordController@showResetForm')->name("password.reset1");
Route::post('/passwordreset', 'Auth\ResetPasswordController@reset');

Route::get('estudiante/create_estudiante','EstudianteController@Expediente');
