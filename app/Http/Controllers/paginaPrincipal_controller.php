<?php

namespace App\Http\Controllers;

use App\Huesped;
use App\PaginaPrincipal;
use App\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paginaPrincipal_controller extends Controller
{


    public function calendario()

    {
        //
        return view('views\calendario\evento');
    }
    public function formPersonal()

    {
        //
        return view('views\form\evento');
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

        $enfermedad=$request->get("name");

        $listados= Huesped::where(\DB::raw("CONCAT(nombres, '' , apellidos, identidad, direccion)"),'LIKE', "%$enfermedad%")
            ->where("enfermedad", "!=", "")->Paginate(20);



          return view('salud')->with('listados', $listados);

    }


    public function SaDire(Request $request)
    {


        $enfermedad=$request->get("name");

        $listados= Huesped::where(\DB::raw("CONCAT(nombres, '' , apellidos, identidad, direccion)"), 'LIKE', "%$enfermedad%")->where("enfermedad", "!=", "")->Paginate(20);

        return view('SaludDirect')->with('listados', $listados);


    }


}
