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
    public function Descarga()

    {
        //
        return view('Listado_de_descarga');
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

        $listados= Huesped::where(\DB::raw("CONCAT(nombres, '' , apellidos, identidad, direccion)"),
            'LIKE', "%$enfermedad%")
            ->where("enfermedad", "!=", "")->where("egreso")->Paginate(15);



          return view('salud')->with('listados', $listados);

    }


    public function SaDire(Request $request)
    {


        $enfermedad=$request->get("name");

        $listados= Huesped::where(\DB::raw("CONCAT(nombres, '' , apellidos, identidad, direccion)"),
            'LIKE', "%$enfermedad%")->where("enfermedad", "!=", "")->Paginate(15);

        return view('SaludDirect')->with('listados', $listados);


    }
    public function egreso(Request $request)
    {

        $egreso=$request->get("name");

        $listados= Huesped::where(\DB::raw("CONCAT(nombres, '' , apellidos, identidad, direccion)"),
            'LIKE', "%$egreso%")
            ->where("egreso", "!=", "")->Paginate(15);



        return view('empleados\expediente_egreso')->with('listados', $listados);

    }


}
