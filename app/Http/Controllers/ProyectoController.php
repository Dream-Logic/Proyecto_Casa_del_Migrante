<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {

        $listados = Proyecto::paginate(10);

        return view('listadoRaiz')->with('listados', $listados);


    }

    public function fichados()
    {
        return view('datosResponsable');
    }

    public function fichatres()
    {
        //
        return view('datosHechos');
    }

    public function fichacuatro()
    {
        //
        return view('datosPersonal');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('datosHuesped');
    }

    public function store(Request $request)
    {
        //return $request;

        //select de la fichas ninios
        $request->piel;
        $request->sexo;
        $request->cabello;
        $request->ojos;
        //select de la ficha madre/ representante legal
        $request->trabajaMadre;
        $request->civil;
        //select de la ficha padre
        $request->trabajaPadre;
        $request->civilPadre;

        //VALIDAR
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'fnacimiento'=>'required',
            'edad'=>'required',
            'sexo'=>'required',
            'cabello'=>'required',
            'ojos'=>'required',
            'piel'=>'required',
            'identidad'=>'required',
            'nacionalidad'=>'required',
            'pasaporte'=>'required',
            'nacimiento'=>'required',
            'direccion'=>'required',
            'signosFisicos'=>'required',
            'enfermedad'=>'required',
            'tratamiento'=>'required',
           //representantelegal
           'nombresMadre'=>'required',
            'apellidosMadre'=>'required',
            'fnacimientoMadre'=>'required',
            'direccionMadre'=>'required',
            'trabajaMadre'=>'required',
            'profesionOficio'=>'required',
            'identidadMadre'=>'required',
            'pasaporteMadre'=>'required',
            'civil'=>'required',
            'telefono'=>'required',
            //Padre
            'nombresPadre'=>'required',
            'apellidosPadre'=>'required',
            'fnacimientoPadre'=>'required',
            'direccionPadre'=>'required',
            'trabajaPadre'=>'required',
            'profesionOficioPadre'=>'required',
            'identidadPadre'=>'required',
            'pasaportePadre'=>'required',
            'civilPadre'=>'required',
            'telefonoPadre'=>'required',
             //hechos
            'vulneracion'=>'required',
            'proteccion'=>'required',
            //Personal Tecnico
            'nombretecnico'=>'required',
            'apellidotecnico'=>'required',
            'fecha'=>'required',
            'hora'=>'required',]);




        $newHuesped = new Proyecto();

        //Datos Obtenidos del Formulario
        $newHuesped-> nombres = $request->input('nombres');
        $newHuesped-> apellidos = $request->input('apellidos');
        $newHuesped-> fnacimiento= $request->input('fnacimiento');
        $newHuesped-> edad = $request->input('edad');
        $newHuesped-> sexo =$request->input('sexo');
        $newHuesped-> cabello = $request->input('cabello');
        $newHuesped-> ojos= $request->input('ojos');
        $newHuesped-> piel= $request->input('piel');
        $newHuesped-> identidad = $request->input('identidad');
        $newHuesped-> nacionalidad = $request->input('nacionalidad');
        $newHuesped-> pasaporte= $request->input('pasaporte');
        $newHuesped-> nacimiento= $request->input('nacimiento');
        $newHuesped-> direccion = $request->input('direccion');
        $newHuesped-> signosFisicos= $request->input('signosFisicos');
        $newHuesped-> enfermedad = $request->input('enfermedad');
        $newHuesped-> tratamiento= $request->input('tratamiento');
        //madre /representante legal
        $newHuesped-> nombresMadre = $request->input('nombresMadre');
        $newHuesped-> apellidosMadre = $request->input('apellidosMadre');
        $newHuesped-> fnacimientoMadre= $request->input('fnacimientoMadre');
        $newHuesped-> direccionMadre= $request->input('direccionMadre');
        $newHuesped-> trabajaMadre= $request->input('trabajaMadre');
        $newHuesped-> profesionOficio =$request->input('profesionOficio');
        $newHuesped-> identidadMadre= $request->input('identidadMadre');
        $newHuesped-> pasaporteMadre= $request->input('pasaporteMadre');
        $newHuesped->  civil= $request->input('civil');
        $newHuesped-> telefono= $request->input('telefono');
        //Padre
        $newHuesped-> nombresPadre = $request->input('nombresPadre');
        $newHuesped-> apellidosPadre = $request->input('apellidosPadre');
        $newHuesped-> fnacimientoPadre= $request->input('fnacimientoPadre');
        $newHuesped-> direccionPadre= $request->input('direccionPadre');
        $newHuesped-> trabajaPadre= $request->input('trabajaPadre');
        $newHuesped-> profesionOficioPadre =$request->input('profesionOficioPadre');
        $newHuesped-> identidadPadre= $request->input('identidadPadre');
        $newHuesped-> pasaportePadre= $request->input('pasaportePadre');
        $newHuesped->  civilPadre= $request->input('civilPadre');
        $newHuesped-> telefonoPadre= $request->input('telefonoPadre');
        //hechos
        $newHuesped-> vulneracion = $request->input('vulneracion');
        $newHuesped-> proteccion = $request->input('proteccion');
        //personal tecnico
        $newHuesped-> nombretecnico = $request->input('nombretecnico');
        $newHuesped-> apellidotecnico = $request->input('apellidotecnico');
        $newHuesped-> fecha = $request->input('fecha');
        $newHuesped-> hora = $request->input('hora');




        //Datos Obtenidos de forma externa


        $creado = $newHuesped->save();
        if ($creado){
            return redirect()->route('listado.index')
                ->with('mensaje','El huesped fue agregado exitosamente');

        } else {
            // TODO Retorna con un mensaje de error.
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $huesped = Proyecto::findOrFail($id);
        return view('verHuesped')->with('huesped',$huesped);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $huesped = Proyecto::findOrFail($id);

        return view('listadoEditar')
            ->with('huesped',$huesped);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        //VALIDAR
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'fnacimiento'=>'required',
            'edad'=>'required',
            'sexo'=>'required',
            'cabello'=>'required',
            'ojos'=>'required',
            'piel'=>'required',
            'identidad'=>'required',
            'nacionalidad'=>'required',
            'pasaporte'=>'required',
            'nacimiento'=>'required',
            'direccion'=>'required',
            'signosFisicos'=>'required',
            'enfermedad'=>'required',
            'tratamiento'=>'required',
            //representantelegal
            'nombresMadre'=>'required',
            'apellidosMadre'=>'required',
            'fnacimientoMadre'=>'required',
            'direccionMadre'=>'required',
            'trabajaMadre'=>'required',
            'profesionOficio'=>'required',
            'identidadMadre'=>'required',
            'pasaporteMadre'=>'required',
            'civil'=>'required',
            'telefono'=>'required',
            //Padre
            'nombresPadre'=>'required',
            'apellidosPadre'=>'required',
            'fnacimientoPadre'=>'required',
            'direccionPadre'=>'required',
            'trabajaPadre'=>'required',
            'profesionOficioPadre'=>'required',
            'identidadPadre'=>'required',
            'pasaportePadre'=>'required',
            'civilPadre'=>'required',
            'telefonoPadre'=>'required',
            //hechos
            'vulneracion'=>'required',
            'proteccion'=>'required',
            //Personal Tecnico
            'nombretecnico'=>'required',
            'apellidotecnico'=>'required',
            'fecha'=>'required',
            'hora'=>'required',]);

        $huesped = Proyecto::findOrFail($id);




        //Datos Obtenidos del Formulario
        $huesped-> nombres = $request->input('nombres');
        $huesped-> apellidos = $request->input('apellidos');
        $huesped-> fnacimiento= $request->input('fnacimiento');
        $huesped-> edad = $request->input('edad');
        $huesped-> sexo =$request->input('sexo');
        $huesped-> cabello = $request->input('cabello');
        $huesped-> ojos= $request->input('ojos');
        $huesped-> piel= $request->input('piel');
        $huesped-> identidad = $request->input('identidad');
        $huesped-> nacionalidad = $request->input('nacionalidad');
        $huesped-> pasaporte= $request->input('pasaporte');
        $huesped-> nacimiento= $request->input('nacimiento');
        $huesped-> direccion = $request->input('direccion');
        $huesped-> signosFisicos= $request->input('signosFisicos');
        $huesped-> enfermedad = $request->input('enfermedad');
        $huesped-> tratamiento= $request->input('tratamiento');
        //madre /representante legal
        $huesped-> nombresMadre = $request->input('nombresMadre');
        $huesped-> apellidosMadre = $request->input('apellidosMadre');
        $huesped-> fnacimientoMadre= $request->input('fnacimientoMadre');
        $huesped-> direccionMadre= $request->input('direccionMadre');
        $huesped-> trabajaMadre= $request->input('trabajaMadre');
        $huesped-> profesionOficio =$request->input('profesionOficio');
        $huesped-> identidadMadre= $request->input('identidadMadre');
        $huesped-> pasaporteMadre= $request->input('pasaporteMadre');
        $huesped->  civil= $request->input('civil');
        $huesped-> telefono= $request->input('telefono');
        //Padre
        $huesped-> nombresPadre = $request->input('nombresPadre');
        $huesped-> apellidosPadre = $request->input('apellidosPadre');
        $huesped-> fnacimientoPadre= $request->input('fnacimientoPadre');
        $huesped-> direccionPadre= $request->input('direccionPadre');
        $huesped-> trabajaPadre= $request->input('trabajaPadre');
        $huesped-> profesionOficioPadre =$request->input('profesionOficioPadre');
        $huesped-> identidadPadre= $request->input('identidadPadre');
        $huesped-> pasaportePadre= $request->input('pasaportePadre');
        $huesped->  civilPadre= $request->input('civilPadre');
        $huesped-> telefonoPadre= $request->input('telefonoPadre');
        //hechos
        $huesped-> vulneracion = $request->input('vulneracion');
        $huesped-> proteccion = $request->input('proteccion');
        //personal tecnico
        $huesped-> nombretecnico = $request->input('nombretecnico');
        $huesped-> apellidotecnico = $request->input('apellidotecnico');
        $huesped-> fecha = $request->input('fecha');
        $huesped-> hora = $request->input('hora');

        //Datos Obtenidos de forma externa



        $creado = $huesped->save();
        if ($creado){
            return redirect()->route('listado.index')
                ->with('mensaje','El huesped fue modificado exitosamente');

        } else {
            // TODO Retorna con un mensaje de error.
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Proyecto::destroy($id);
        //Redirigir
        return redirect()->route('listado.index')->with('mensaje', 'El huesped fue borrado completamente');

    }
}
