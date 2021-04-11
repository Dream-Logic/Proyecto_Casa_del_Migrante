<?php

namespace App\Http\Controllers;

use App\Ficha;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $pacientes= Ficha::paginate(15);

        return view('ficha\fichaMedica')->with('pacientes', $pacientes);
        //return view('ficha\fichaMedica');


    }

    public function listasFicha(Request $request){


        $pacientes= Ficha::Paginate(15);

        return view('ficha\lista_fichaMedica')->with('pacientes', $pacientes);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->departamento;
        $request->sexo_paciente;


        //VALIDAR
        $request->validate([
            'nombre_hospital' => 'required',
            'direccion_hospital' => 'required',
            'departamento' => 'required',
            'medico' => 'required',
            'especialista' => 'required',
            'fecha_actual' => 'required',
            'nombres_paciente' => 'required',
            'apellidos_paciente' => 'required',
            'fecha_paciente' => 'required',
            'edad_paciente' => 'required',
            'sexo_paciente' => 'required',
            'direccion_paciente' => 'required',
            'enfermedad_paciente' => 'required',
            'tratamiento_paciente'=>'required']);

        $newFicha = new Ficha();

        //Datos Obtenidos del Formulario
        $newFicha->nombre_hospital = $request->input('nombre_hospital');
        $newFicha->direccion_hospital = $request->input('direccion_hospital');
        $newFicha->departamento = $request->input('departamento');
        $newFicha->medico = $request->input('medico');
        $newFicha->especialista = $request->input('especialista');
        $newFicha->fecha_actual = $request->input('fecha_actual');
        $newFicha->nombres_paciente = $request->input('nombres_paciente');
        $newFicha->apellidos_paciente = $request->input('apellidos_paciente');
        $newFicha->fecha_paciente = $request->input('fecha_paciente');
        $newFicha->edad_paciente = $request->input('edad_paciente');
        $newFicha->sexo_paciente = $request->input('sexo_paciente');
        $newFicha->direccion_paciente = $request->input('direccion_paciente');
        $newFicha->enfermedad_paciente = $request->input('enfermedad_paciente');
        $newFicha->tratamiento_paciente = $request->input('tratamiento_paciente');
        $newFicha->save();
        //todo retornar la vista del formulario crear responsable

        return redirect()->route("ficha.listasFicha", ["id" => $newFicha->id])
            ->with("exito", "Se creo la ficha exitosamente");


        //select
        $request->departamento;
        $request->sexo_paciente;
        //VALIDAR
        $request->validate([
            'nombre_hospital' => 'required',
            'direccion_hospital' => 'required',
            'departamento' => 'required',
            'medico' => 'required',
            'especialista' => 'required',
            'fecha_actual' => 'required',
            'nombres_paciente' => 'required',
            'apellidos_paciente' => 'required',
            'fecha_paciente' => 'required',
            'edad_paciente' => 'required',
            'sexo_paciente' => 'required',
            'direccion_paciente' => 'required',
            'enfermedad_paciente' => 'required',
            'tratamiento_paciente'=>'required']);


        $newFicha = new Ficha();

        //Datos Obtenidos del Formulario
        $newFicha->nombre_hospital = $request->input('nombre_hospital');
        $newFicha->direccion_hospital = $request->input('direccion_hospital');
        $newFicha->departamento = $request->input('departamento');
        $newFicha->medico = $request->input('medico');
        $newFicha->especialista = $request->input('especialista');
        $newFicha->fecha_actual = $request->input('fecha_actual');
        $newFicha->nombres_paciente = $request->input('nombres_paciente');
        $newFicha->apellidos_paciente = $request->input('apellidos_paciente');
        $newFicha->fecha_paciente = $request->input('fecha_paciente');
        $newFicha->edad_paciente = $request->input('edad_paciente');
        $newFicha->sexo_paciente = $request->input('sexo_paciente');
        $newFicha->direccion_paciente = $request->input('direccion_paciente');
        $newFicha->enfermedad_paciente = $request->input('enfermedad_paciente');
        $newFicha->tratamiento_paciente = $request->input('tratamiento_paciente');
        $newFicha->save();



        //todo retornar la vista del formulario crear responsable

        return redirect()->route("ficha.listasFicha", ["id" => $newFicha->id])
            ->with("exito", "Se creo la ficha exitosamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ficha = Ficha::findOrFail($id);

        return view('ficha\editar_fichaMedica')
            ->with('ficha', $ficha);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->departamento;
        $request->sexo_paciente;

        $request->validate([
            'nombre_hospital' => 'required',
            'direccion_hospital' => 'required',
            'departamento' => 'required',
            'medico' => 'required',
            'especialista' => 'required',
            'fecha_actual' => 'required',
            'nombres_paciente' => 'required',
            'apellidos_paciente' => 'required',
            'fecha_paciente' => 'required',
            'edad_paciente' => 'required',
            'sexo_paciente' => 'required',
            'direccion_paciente' => 'required',
            'enfermedad_paciente' => 'required',
            'tratamiento_paciente'=>'required']);



        $ficha = Ficha::findOrFail($id);

        $ficha->nombre_hospital = $request->input('nombre_hospital');
        $ficha->direccion_hospital = $request->input('direccion_hospital');
        $ficha->departamento = $request->input('departamento');
        $ficha->medico = $request->input('medico');
        $ficha->especialista = $request->input('especialista');
        $ficha->fecha_actual = $request->input('fecha_actual');
        $ficha->nombres_paciente = $request->input('nombres_paciente');
        $ficha->apellidos_paciente = $request->input('apellidos_paciente');
        $ficha->fecha_paciente = $request->input('fecha_paciente');
        $ficha->edad_paciente = $request->input('edad_paciente');
        $ficha->sexo_paciente = $request->input('sexo_paciente');
        $ficha->direccion_paciente = $request->input('direccion_paciente');
        $ficha->enfermedad_paciente = $request->input('enfermedad_paciente');
        $ficha->tratamiento_paciente = $request->input('tratamiento_paciente');
        $ficha->save();

        return redirect()->route("ficha.listasFicha")
            ->with("exito", "Se edito correctamente la ficha");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ficha = Ficha::findOrFail($id);
        $ficha->delete();

        return redirect()->route('ficha.listasFicha')
            ->with('mensaje', 'La ficha médica del huésped y sus datos fueron borrados completamente');
    }
}
