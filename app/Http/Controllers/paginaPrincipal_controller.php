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
}
