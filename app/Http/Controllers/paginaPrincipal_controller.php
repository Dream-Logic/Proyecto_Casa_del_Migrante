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
        return view('create_huesped');
    }

    public function index()
    {

        return view('index');

    }

    public function principaldirec()
    {


        return view('director');



    }

    public function salud(Request $request)
    {



        //$listados = Proyecto::paginate(10);

        //$listados = Huesped::search($request->nombres)->paginate(5);

        $buscar = $request->get('buscarpor');

        $tipo = $request->get('tipo');
        $listados = Huesped::buscarpor($tipo, $buscar)->paginate(5);
        return view('salud')->with('listados', $listados);

    }



    public function SaDire(Request $request)
    {


        //$listados = Proyecto::paginate(10);

        //$listados = Huesped::search($request->nombres)->paginate(5);

        $buscar = $request->get('buscarpor');

        $tipo = $request->get('tipo');

        $listados = Huesped::buscarpor($tipo, $buscar)->paginate(5);

        return view('SaludDirect')->with( 'listados', $listados);


    }

}
