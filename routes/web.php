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

//--------------------------------------------Mildware de Administrador-----------------------------------------------------------------------------------------------------------------------------
Route::group(["middleware" => "auth"], function () {

//--------------------------------------------Mildware de Director-------------------------------------------------------------------------------------------------------------------------------------
    Route::group(['middleware' => 'admin'], function () {
        //------------------------------------------------Rutas de Director-------------------------------------------       ---------------------------------------------------------------------------------------------
        //--------------------------------------------RUTA QUE DIRIGE A LA VISTA PRINCIPAL DEL DIRECTOR-------------------------------------------------------------------------------------------
        Route::get('/principal', 'paginaPrincipal_controller@index')
            ->name('index.index');
        //--------------------------------------------RUTAS QUE DIRIGE A LOS FORMULARIOS----------------------------------------------------------------------
        Route::get('/Btn_atras', 'paginaPrincipal_controller@atras')
            ->name('atras.regre');
        Route::get('/Btn_regresar', 'paginaPrincipal_controller@regreso')
            ->name('regresar.volv');
 //--------------------------------------------RUTAS PARA EL LISTADO DEL DIRECTOR------------------------------------------
        Route::get('/proyectos/listado', 'HuespedController@index')
            ->name('listado.index');
//--------------------------------------------RUTAS PARA LA VISTA SALUD DEL DIRECTOR------------------------------------------
        Route::get('/salud', 'paginaPrincipal_controller@salud')
            ->name('salud.salu');
        Route::get('/saludAdmin', 'paginaPrincipal_controller@saludAdmin')
            ->name('Admin.salud');
        //--------------------------------------------RUTA QUE DIRIGE A LAS ESTADISTICAS-------------------------------------

        Route::get('/estadisticas', 'EstadisticaController@index')
            ->name('estadisticas.admin');
        //--------------------------------------------RUTA QUE DIRIGE A LA VISTA DE ACTIVIDADES-------------------------------------
        Route::get('/actividades', 'ActividadController@activities')
            ->name('actividades.admin');
        //--------------------------------------------NUEVAS RUTAS DEL FORMULARIO HUESPED------------------------------
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
        //-------------------------------------------RUTA PARA EL LISTADO DE EGRESADOS------------------------------
        Route::get('/egresos', 'paginaPrincipal_controller@egreso')
            ->name('lista.egreso');
        //-------------------------------------------NUEVASSSS--------------------------------------------------------------
        //------------------------------------------- RUTAS PARA EL LISTADO EMPLEADOS DIRECTOR------------------------------
        //------------------------------------------- Ruta para el forulario del personal------------------------------
        Route::get('/personal', 'EmpleadoController@personal')
            ->name('personal.personal');
        //------------------------------------------- Rutas para el listado del personal------------------------------
        Route::get('/empleados/listado', 'EmpleadoController@index')
            ->name('listadoEmpleado.index');
        //------------------------------------------- Ruta para el store------------------------------------------------------
        Route::post("/personal/store", "EmpleadoController@store")
            ->name("personal.store");
        //------------------------------------------- Ruta para editar---------------------------------------------------
        Route::get('/personal/{id}/editar', 'EmpleadoController@edit')
            ->name('personal.edit');
        //-------------------------------------------Ruta update--------------------------------------------------------
        Route::put('/empleado/{id}/editar', 'EmpleadoController@update')
            ->name('personal.update');
        //-------------------------------------------Ruta para eliminar--------------------------------------------------------
        Route::delete('/personal/{id}/borrar', 'EmpleadoController@destroy')
            ->name('personal.borrar')
            ->where('id', '[0-9]+');
        //-------------------------------------------RUtas para ver detalles del empleado---------------------------------------------------
        Route::get('/empleado/{id}', 'EmpleadoController@show')
            ->name('empleado.mostrar')
            ->where('id', '[0-9]+');
        //-------------------------------------------TODAS RUTAS PARA FICHA MEDICA-----------------------------------
        //-------------------------------------------Rutas para formulario del ficha-----------------------------------
        Route::get('/fichaMedica', 'FichaController@index')
            ->name('ficha.index');
        Route::post("/fichaMedica/store", "FichaController@store")
            ->name("fichaMedica.store");
        //-------------------------------------------Rutas para el listado del expedinte medico----------------------------------
        Route::get('/fichaMedica/listados', 'FichaController@listasFicha')
            ->name('ficha.listasFicha');
        //-------------------------------------------Rutas para editar-------------------------------------------------------------
        Route::get('/ficha/{id}/editar', 'FichaController@edit')
            ->name('ficha.edit')
            ->where('id', '[0-9]+');
        //-------------------------------------------Rutas para la vista de actualizar--------------------------------------------------

        Route::put('/ficha/{id}/editar', 'FichaController@update')
            ->name('ficha.update');
        //-------------------------------------------Ruta para eliminar-----------------------------------------------
        Route::delete('/ficha/{id}/borrar', 'FichaController@destroy')
            ->name('ficha.borrar');
        Route::get('/ficha/{id}', 'FichaController@show')
            ->name('ficha.mostrar')
            ->where('id', '[0-9]+');
        //-------------------------------------------Ruta para el formulario del Estudiante-----------------------------------------------

        Route::get('/estudiante', 'EstudianteController@estudiante')
            ->name('estudiante.estudiante');
        //-------------------------------------------Rutas para el listado del Estudiante----------------------------------------------
        Route::get('/estudiante/listado', 'EstudianteController@index')
            ->name('listadoEstudiante.index');
        //-------------------------------------------Ruta para el store-------------------------------------------------
        Route::post("/estudiante/store", 'EstudianteController@store')
            ->name("estudiante.store");
        //-------------------------------------------Ruta para editar-------------------------------------------------
        Route::get('/estudiante/{id}/editar', 'EstudianteController@edit')
            ->name('estudiante.edit');
        //-------------------------------------------Ruta para update-------------------------------------------------
        Route::put('/estudiante/{id}/editar', 'EstudianteController@update')
            ->name('estudiante.update');
        //-------------------------------------------Ruta para eliminar-------------------------------------------------
        Route::delete('/estudiante/{id}/borrar', 'EstudianteController@destroy')
            ->name('estudiante.borrar')
            ->where('id', '[0-9]+');
        //-------------------------------------------RUtas para ver detalles del empleado-------------------------------------------------
        Route::get('/estudiante/{id}', 'EstudianteController@show')
            ->name('estudiante.mostrar')
            ->where('id', '[0-9]+');

        //-------------------------------------------Rutas para el Calendario de eventos-------------------------------------------------

        Route::get('Evento/index', 'ControllerEvent@index');
        Route::get('Evento/index/{month}', 'ControllerEvent@index_month');
        //-------------------------------------------Rutas formulario Evento-------------------------------------
        Route::get('Evento/form', 'ControllerEvent@form');
        Route::post('Evento/create', 'ControllerEvent@create');
        //-------------------------------------------Rutas Detalles de evento-------------------------------------
        Route::get('Evento/details/{id}', 'ControllerEvent@details');
        Route::get('evento/form','ControllerEvent@form');
        //-------------------------------------------Rutas EPORTAR A PDF Y A EXCEL-------------------------------------
        Route::get('/huesped/export','ExportHuespedController@export');
        Route::get('/pdfH/pdf','ExportHuespedController@pdf');
        Route::get('/pruebas/pdf','ExportHuespedController@prueba');

    });
//-------------------------------------------Aqui van todas las rutas de Administrador-------------------------------------
    //----------------------------------------Ruta para acceso del Administrador--------------------------------------------
    //----------------------------------------Rutas de listados de salud-----------------------------------------------
    Route::get('/saludDi', 'paginaPrincipal_controller@SaDire')
        ->name('saludDire.salu');
    Route::get('/saludD', 'paginaPrincipal_controller@SDire')
        ->name('saludDire.sal');
    Route::get('/directorSalud', 'paginaPrincipal_contrller@buscador')
        ->name('Listado.buscador');
    Route::get('/home', 'HomeController@index')->name('home');
//----------------------------------------ROUTES Escolaridad-----------------------------------------------

    Route::get('/estudiante/create_estudiante', 'EstudianteController@Escolaridad');
    //----------------------------------------ROUTES LISTADO Administrador-----------------------------------------------

    Route::get('/huesped/listadoDirector', 'HuespedController@director')
        ->name('listado.director');
    Route::get('/dire', 'paginaPrincipal_controller@principaldirec')
        ->name('dire.access');
    Route::get('/huesped/{id}', 'HuespedController@show')
        ->name('huesped.mostrar')
        ->where('id', '[0-9]+');
    //----------------------------------------Ruta de las estadisticas del administrador-----------------------------------------------

    Route::get('/estadisticasDirec', 'EstadisticaDirectorController@index')
        ->name('estadisticas.direc');
    //----------------------------------------Empleado Administrador lista---------------------------------------------------------
    Route::get('/empleado/lista', 'EmpleadoController@director')
        ->name('listaEmpleado.director');
    Route::get('/empleado/{id}', 'EmpleadoController@show')
        ->name('empleado.mostrar')
        ->where('id', '[0-9]+');
    //----------------------------------------ficha medica Administrador lista--------------------------------------------------------

    Route::get('/fichaMedica/lista', 'FichaController@fichaDire')
        ->name('ficha.fichaDire');
    //----------------------------------------Mostrar ficha medica------------------------------------------
    Route::get('/ficha/{id}', 'FichaController@show')
        ->name('fichas.mostrar')
        ->where('id', '[0-9]+');
    //----------------------------------------Empleado administrador lista------------------------------------------
    Route::get('/estudiante/lista', 'EstudianteController@director')
        ->name('listadoEst.director');
    Route::get('/estudiante/{id}', 'EstudianteController@show')
        ->name('estudiante.mostrar')
        ->where('id', '[0-9]+');
    //---------------------------------------- ExPORTAR A PDF Y A EXCEL Administrador------------------------------------------
    Route::get('/huesped/export','ExportHuespedController@export');
    Route::get('/pdfH/pdf','ExportHuespedController@pdf');
    Route::get('/pruebas/pdf','ExportHuespedController@prueba');

    //---------------------------------------- ExPORTAR A PDF Y A EXCEL Administrado Empleado--------------------------------------
    Route::get('/empleado/export','ExportEmpleadoController@export');

    Route::get('/pruebaemple/pdf','ExportEmpleadoController@prueba');

    //---------------------------------------- ExPORTAR A PDF Y A EXCEL Administrado EScolaridad---------------------------
    Route::get('/estudiante/export','ExportEscolaridadController@export');
    Route::get('/pruebaestule/pdf','ExportEscolaridadController@prueba');
    //---------------------------------------- ExPORTAR A PDF Y A EXCEL Administrado FichaMedica---------------------------
    Route::get('/fichamedic/export','ExportFichaMedicaController@export');

    Route::get('/pruebafichame/pdf','ExportFichaMedicaController@prueba');
    //---------------------------------------- listado egreso Administrador--------------------------------------------------
    Route::get('/descarga', 'paginaPrincipal_controller@descarga')
        ->name('listado.descarga');
    //---------------------------------------- listado egreso Administrador--------------------------------------------------
    Route::get('/egresosdirec', 'paginaPrincipal_controller@egresodirec')
        ->name('lista.egresod');
    //---------------------------------------- Calendario--------------------------------------------------
    Route::get('Evento/index', 'ControllerEvent@index');
    Route::get('Evento/index/{month}', 'ControllerEvent@index_month');
    //---------------------------------------- Formulario--------------------------------------------------
    Route::get('Evento/form', 'ControllerEvent@form');
    Route::post('Evento/create', 'ControllerEvent@create');
    //---------------------------------------- Detalles de evento--------------------------------------------------
    Route::get('Evento/details/{id}', 'ControllerEvent@details');
    Route::get('evento/form','ControllerEvent@form');


});

Route::get('/passwordreset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name("password.request1");
Route::post('/passwordemail', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name("password.email1");
Route::get('/passwordreset{token}', 'Auth\ResetPasswordController@showResetForm')->name("password.reset1");
Route::post('/passwordreset', 'Auth\ResetPasswordController@reset');




