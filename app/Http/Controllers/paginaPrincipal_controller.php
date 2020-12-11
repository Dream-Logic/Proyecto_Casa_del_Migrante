<?php

namespace App\Http\Controllers;

use App\PaginaPrincipal;
use App\Proyecto;
use Illuminate\Http\Request;

class paginaPrincipal_controller extends Controller
{
    //
    /*

      //




      public function create(){

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
      }*/

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

        $listados = Proyecto::where('enfermedad', "!=", null)->get();

        return view('salud')->with('listados', $listados);


    }

    public function salud(Request $request)
    {


        //$listados = Proyecto::paginate(10);

        $listados = Proyecto::search($request->nombres)->paginate(5);

        return view('salud')->with('listados', $listados);


    }

    public function SaludDire()
    {

        $listados = Proyecto::where('enfermedad', "!=", null)->get();

        return view('salud')->with('listados', $listados);


    }

    public function SDire(Request $request)
    {


        //$listados = Proyecto::paginate(10);

        $listados = Proyecto::search($request->nombres)->paginate(5);

        return view('SaludDirect')->with('listados', $listados);


    }

}
