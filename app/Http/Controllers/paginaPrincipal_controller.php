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
    public function calendario()

    {
        //
        return view('views\calendario\evento');
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


        $listados = Huesped::name($request->get('name'))->orderBy('id', 'DESC')->paginate(5);

        return view('salud')->with('listados', $listados);

    }



    public function SaDire(Request $request)
    {


        $listados = Huesped::name($request->get('name'))->orderBy('id', 'DESC')->paginate(5);

        return view('SaludDirect')->with('listados', $listados);


    }

}
