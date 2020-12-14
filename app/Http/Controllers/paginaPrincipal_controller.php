<?php

namespace App\Http\Controllers;

use App\Huesped;
use App\PaginaPrincipal;
use App\Proyecto;
use Illuminate\Http\Request;

class paginaPrincipal_controller extends Controller
{


    public function principalformulario()

    {
        //
        return view('hola');
    }

    public function index()
    {

        return view('index');

    }

    public function principaldirec()
    {


        return view('director');

    }

    public function paginasalud()
    {

        $listados = Huesped::where('enfermedad', "!=", null)->get();

        return view('salud')->with('listados', $listados);


    }

    public function salud(Request $request)
    {


        //$listados = Proyecto::paginate(10);

        $listados = Huesped::search($request->nombres)->paginate(5);

        return view('salud')->with('listados', $listados);


    }

    public function SaludDire()
    {

        $listados = Huesped::where('enfermedad', "!=", null)->get();

        return view('salud')->with('listados', $listados);


    }

    public function SDire(Request $request)
    {


        //$listados = Proyecto::paginate(10);

        $listados = Huesped::search($request->nombres)->paginate(5);

        return view('SaludDirect')->with('listados', $listados);


    }

}
