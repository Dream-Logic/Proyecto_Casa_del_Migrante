<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */   //

    public function Escolaridad()
    {

        return view('estudiante/create_estudiante');


    }
    public function index(Request $request)
    {
        //
        //  $listas =Estudiante::paginate(50);
        //  $listas = Estudiante::name($request->get('name'))->orderBy('id', 'ASC')->paginate(15);
        //return view('empleados\listadoRaiz_empleados')->with('listas', $listas);

        $listas = Estudiante::name($request->get('name'))->orderBy('id', 'ASC')->paginate(15);
        return view('estudiante\listadoRaiz_Estudiante')->with('listas', $listas);

    }

    public function estudiante()
    {

        $listas = Estudiante::paginate(15);

        return view('estudiante/create_estudiante')->with('listas', $listas);


    }

    public function director(Request $request){
        //  $listas =Estudiante::paginate(50);
        $listas = Estudiante::name($request->get('name'))->orderBy('id', 'ASC')->paginate(15);
        return view('estudiante\listadoEstudiante')->with('listas', $listas);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
            //select de la fichas ninios
            $request->habilidades;


            //VALIDAR
            $request->validate([
                'nombres_alumno' => 'required',
                'apellidos_alumno' => 'required',
                'grado' => 'nullable',
                'carrera' => 'nullable',
                'escritura' => 'nullable',
                'lectura' => 'nullable',
                'habilidades' => 'nullable',
                'instrumento' => 'nullable']);

            $newEstudiante = new Estudiante();

            //Datos Obtenidos del Formulario
            $newEstudiante->nombres_alumno = $request->input('nombres_alumno');
            $newEstudiante->apellidos_alumno = $request->input('apellidos_alumno');
            $newEstudiante->grado = $request->input('grado');
            $newEstudiante->carrera = $request->input('carrera');
            $newEstudiante->escritura = $request->input('escritura');
            $newEstudiante->lectura = $request->input('lectura');
            $newEstudiante->habilidades = $request->input('habilidades');
            $newEstudiante->instrumento = $request->input('instrumento');
            $newEstudiante->save();
            //todo retornar la vista del formulario crear estudiante

            return redirect()->route("listadoEstudiante.index", ["id" => $newEstudiante->id])
                ->with("exito", "Se creo el estudiante exitosamente");

            //select de la fichas
            $request->habilidades;
            //VALIDAR
            $request->validate([
                'nombres_alumno' => 'required',
                'apellidos_alumno' => 'required',
                'grado' => 'nullable',
                'carrera' => 'nullable',
                'escritura' => 'nullable',
                'lectura' => 'nullable',
                'habilidades' => 'nullable',
                'instrumento' => 'nullable']);


            $newEstudiante = new Estudiante();

            //Datos Obtenidos del Formulario

            $newEstudiante->nombres_alumno = $request->input('nombres_alumno');
            $newEstudiante->apellidos_alumno = $request->input('apellidos_alumno');
            $newEstudiante->grado = $request->input('grado');
            $newEstudiante->carrera = $request->input('carrera');
            $newEstudiante->escritura = $request->input('escritura');
            $newEstudiante->lectura = $request->input('lectura');
            $newEstudiante->habilidades = $request->input('habilidades');
            $newEstudiante->instrumento = $request->input('instrumento');
            $newEstudiante->save();


            //todo retornar la vista del formulario crear responsable

            return redirect()->route("listadoEstudiante.index", ["id" => $newEstudiante->id])
                ->with("exito", "Se creo el estudiante exitosamente");
        }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $estudiante = Estudiante::findOrFail($id);
        //$responsables = Responsable::where('id_huesped', "=", $id)->get();
        //  $narracion = NarracionHecho::where('id_huesped', "=", $id)->get();

        return view('estudiante\ver_estudiante')->with('estudiante', $estudiante);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante = Estudiante::findOrFail($id);

        return view('estudiante\editarEstudiante')
            ->with('estudiante', $estudiante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

            //select de la fichas ninios
            $request->habilidades;


            //VALIDAR
            $request->validate([
                'nombres_alumno' => 'required',
                'apellidos_alumno' => 'required',
                'grado' => 'nullable',
                'carrera' => 'nullable',
                'escritura' => 'nullable',
                'lectura' => 'nullable',
                'habilidades' => 'nullable',
                'instrumento' => 'nullable']);

            $estudiante = Estudiante::findOrFail($id);
            $estudiante->nombres_alumno = $request->input('nombres_alumno');
            $estudiante->apellidos_alumno = $request->input('apellidos_alumno');
            $estudiante->grado = $request->input('grado');
            $estudiante->carrera = $request->input('carrera');
            $estudiante->escritura = $request->input('escritura');
            $estudiante->lectura = $request->input('lectura');
            $estudiante->habilidades = $request->input('habilidades');
            $estudiante->instrumento = $request->input('instrumento');
            $estudiante->save();


            return redirect()->route("listadoEstudiante.index")
                ->with("exito", "Se edito correctamente el estudiante");


            //VALIDAR
            $request->validate([
                'nombres_alumno' => 'required',
                'apellidos_alumno' => 'required',
                'grado' => 'nullable',
                'carrera' => 'nullable',
                'escritura' => 'nullable',
                'lectura' => 'nullable',
                'habilidades' => 'nullable',
                'instrumento' => 'nullable']);

            $estudiante = Estudiante::findOrFail($id);
            $estudiante->nombres_alumno = $request->input('nombres_alumno');
            $estudiante->apellidos_alumno = $request->input('apellidos_alumno');
            $estudiante->grado = $request->input('grado');
            $estudiante->carrera = $request->input('carrera');
            $estudiante->escritura = $request->input('escritura');
            $estudiante->lectura = $request->input('lectura');
            $estudiante->habilidades = $request->input('habilidades');
            $estudiante->instrumento = $request->input('instrumento');
            $estudiante->imagen = $nombre_archivo;
            $estudiante->save();


            return redirect()->route("listadoEstudiante.index")
                ->with("exito", "Se edito correctamente el estudiante");
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

        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return redirect()->route('listadoEstudiante.index')
            ->with('mensaje', 'El estudiante y todos sus datos fueron borrados completamente');
    }
}

