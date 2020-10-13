<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginaPrincipal_controller extends Controller
{
    //
    public function index()
    {


        return view('index');

    }

    //
    public function crear()
    {


        return view('Construccion');

    }

    public function principalformulario()

    {
        //
        return view('hola');
    }

    public function primerFormulario()

    {
        //
        return view('datosHuesped');

    }

    public function segundoFormulario()

    {
        //
        return view('datosResponsable');

    }

    public function tercerFormulario()

    {
        //
        return view('datosHechos');
    }

    public function cuartoFormulario()

    {
        //
        return view('datosPersonal');

    }

    public function atras()

    {
        //
        return view('index');
    }
    public function Btn_regresar()

    {
        //
        return view('hola');
    }
}
