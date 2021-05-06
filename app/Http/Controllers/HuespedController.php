<?php

namespace App\Http\Controllers;

use App\Huesped;
use App\NarracionHecho;
use Carbon\Carbon;

use App\Proyecto;
use App\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
class HuespedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        //dd($request->get('name'));

        //$listados = Huesped::name($request->get('name'))->orderBy('id', 'DESC')->paginate(15);

      //  return view('listadoRaiz')->with('listados', $listados);

        $egreso=$request->get("name");

        $listados= Huesped::where(\DB::raw("CONCAT(nombres, '' , apellidos, identidad, direccion)"),
            'LIKE', "%$egreso%")->where("egreso")->Paginate(15);

        return view('listadoRaiz')->with('listados', $listados);

    }

    public function director(Request $request)
    {

        $egreso=$request->get("name");
        $listados = Huesped::where(\DB::raw("CONCAT(nombres, '' , apellidos, identidad, direccion)"),
        'LIKE', "%$egreso%")->where("egreso")->Paginate(15);


        return view('listadoRaizDirector')->with('listados', $listados);


    }


    public function nuevo()
    {

        return view('huespedes.create_huesped');
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
        if (($request->imagen) == null) {

            if (($request->sexo) == "femenino") {
                $imagen = "femenino.png";
            } else {
                $imagen = "masculino.png";
            }
            //select de la fichas ninios
            $request->piel;
            $request->sexo;
            $request->cabello;
            $request->ojos;

            //VALIDAR
            $request->validate([
                'nombres' => 'required',
                'apellidos' => 'required',
                'fnacimiento' => 'required',
                'edad' => 'required',
                'ingreso' => 'required',
                'egreso' => 'nullable',
                'sexo' => 'required',
                'cabello' => 'required',
                'ojos' => 'required',
                'piel' => 'required',
                'identidad' => 'required',
                'nacionalidad' => 'required',
                'pasaporte' => 'nullable',
                'nacimiento' => 'required',
                'direccion' => 'required',
                'gradoEscolar' => 'required',
                'signosFisicos' => 'required',
                'enfermedad' => 'nullable',
                'tratamiento' => 'nullable']);

            $newHuesped = new Huesped();

            //Datos Obtenidos del Formulario
            $newHuesped->nombres = $request->input('nombres');
            $newHuesped->apellidos = $request->input('apellidos');
            $newHuesped->fnacimiento = $request->input('fnacimiento');
            $newHuesped->edad = $request->input('edad');
            $newHuesped->ingreso = $request->input('ingreso');
            $newHuesped->egreso = $request->input('egreso');
            $newHuesped->sexo = $request->input('sexo');
            $newHuesped->cabello = $request->input('cabello');
            $newHuesped->ojos = $request->input('ojos');
            $newHuesped->piel = $request->input('piel');
            $newHuesped->identidad = $request->input('identidad');
            $newHuesped->nacionalidad = $request->input('nacionalidad');
            $newHuesped->pasaporte = $request->input('pasaporte');
            $newHuesped->nacimiento = $request->input('nacimiento');
            $newHuesped->direccion = $request->input('direccion');
            $newHuesped->gradoEscolar = $request->input('gradoEscolar');
            $newHuesped->signosFisicos = $request->input('signosFisicos');
            $newHuesped->enfermedad = $request->input('enfermedad');
            $newHuesped->imagen = $imagen;
            $newHuesped->tratamiento = $request->input('tratamiento');
            $newHuesped->id_usuario = Auth::user()->getUserId();
            $newHuesped->save();
            //todo retornar la vista del formulario crear responsable

            return redirect()->route("responsable.nuevo", ["id" => $newHuesped->id])
                ->with("exito", "Se creo el huesped exitosamente");

        } else {
            $image_resize = Image::make($request->imagen->getRealPath());
            $image_resize->resize(800, null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image_resize->orientate();
            $nombre_archivo = time() . "." . $request->imagen->extension();

            $image_resize->save(public_path('foto/' . $nombre_archivo));

            $request->piel;
            $request->sexo;
            $request->cabello;
            $request->ojos;

            //VALIDAR
            $request->validate([
                'nombres' => 'required',
                'apellidos' => 'required',
                'fnacimiento' => 'required',
                'edad' => 'required',
                'ingreso' => 'required',
                'egreso' => 'nullable',
                'sexo' => 'required',
                'cabello' => 'required',
                'ojos' => 'required',
                'piel' => 'required',
                'identidad' => 'required',
                'nacionalidad' => 'required',
                'pasaporte' => 'nullable',
                'nacimiento' => 'required',
                'direccion' => 'required',
                'gradoEscolar' => 'required',
                'signosFisicos' => 'required',
                'enfermedad' => 'nullable',
                'tratamiento' => 'nullable']);

            $newHuesped = new Huesped();

            //Datos Obtenidos del Formulario
            $newHuesped->nombres = $request->input('nombres');
            $newHuesped->apellidos = $request->input('apellidos');
            $newHuesped->fnacimiento = $request->input('fnacimiento');
            $newHuesped->edad = $request->input('edad');
            $newHuesped->ingreso = $request->input('ingreso');
            $newHuesped->egreso = $request->input('egreso');
            $newHuesped->sexo = $request->input('sexo');
            $newHuesped->cabello = $request->input('cabello');
            $newHuesped->ojos = $request->input('ojos');
            $newHuesped->piel = $request->input('piel');
            $newHuesped->identidad = $request->input('identidad');
            $newHuesped->nacionalidad = $request->input('nacionalidad');
            $newHuesped->pasaporte = $request->input('pasaporte');
            $newHuesped->nacimiento = $request->input('nacimiento');
            $newHuesped->direccion = $request->input('direccion');
            $newHuesped->imagen = $nombre_archivo;
            $newHuesped->gradoEscolar = $request->input('gradoEscolar');
            $newHuesped->signosFisicos = $request->input('signosFisicos');
            $newHuesped->enfermedad = $request->input('enfermedad');
            $newHuesped->tratamiento = $request->input('tratamiento');
            $newHuesped->id_usuario = Auth::user()->getUserId();
            $newHuesped->save();
            //todo retornar la vista del formulario crear responsable

            return redirect()->route("responsable.nuevo", ["id" => $newHuesped->id])
                ->with("exito", "Se creo el huesped exitosamente");
        }
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
        $huesped = Huesped::findOrFail($id);
        $responsables = Responsable::where('id_huesped', "=", $id)->get();
        $narracion = NarracionHecho::where('id_huesped', "=", $id)->get();

        return view('huespedes.ver_huesped')
            ->withResponsables($responsables)->withNarracion($narracion)->with('huesped', $huesped);

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
        $huesped = Huesped::findOrFail($id);

        return view('huespedes.editar_huesped')
            ->with('huesped', $huesped);
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


        if (($request->imagen) == null) {

            if (($request->sexo) == "femenino") {
                $imagen = "femenino.png";
            } else {
                $imagen = "masculino.png";
            }
            //select de la fichas ninios
            $request->piel;
            $request->sexo;
            $request->cabello;
            $request->ojos;

            //VALIDAR
            $request->validate([
                'nombres' => 'required',
                'apellidos' => 'required',
                'fnacimiento' => 'required',
                'edad' => 'required',
                'ingreso' => 'nullable',
                'egreso' => 'nullable',
                'sexo' => 'required',
                'cabello' => 'required',
                'ojos' => 'required',
                'piel' => 'required',
                'identidad' => 'required',
                'nacionalidad' => 'required',
                'pasaporte' => 'nullable',
                'nacimiento' => 'required',
                'direccion' => 'required',
                'gradoEscolar' => 'required',
                'signosFisicos' => 'required',
                'enfermedad' => 'nullable',
                'tratamiento' => 'nullable',]);

            $huesped = Huesped::findOrFail($id);


            //Datos Obtenidos del Formulario
            $huesped->nombres = $request->input('nombres');
            $huesped->apellidos = $request->input('apellidos');
            $huesped->fnacimiento = $request->input('fnacimiento');
            $huesped->edad = $request->input('edad');
            $huesped->ingreso = $request->input('ingreso');
            $huesped->egreso = $request->input('egreso');
            $huesped->sexo = $request->input('sexo');
            $huesped->cabello = $request->input('cabello');
            $huesped->ojos = $request->input('ojos');
            $huesped->piel = $request->input('piel');
            $huesped->identidad = $request->input('identidad');
            $huesped->nacionalidad = $request->input('nacionalidad');
            $huesped->pasaporte = $request->input('pasaporte');
            $huesped->nacimiento = $request->input('nacimiento');
            $huesped->direccion = $request->input('direccion');
            $huesped->gradoEscolar = $request->input('gradoEscolar');
            $huesped->signosFisicos = $request->input('signosFisicos');
            $huesped->enfermedad = $request->input('enfermedad');
            $huesped->tratamiento = $request->input('tratamiento');
            $huesped->imagen = $imagen;
            $huesped->save();
            //todo retornar la vista del formulario crear responsable


            return redirect()->route("listado.index")
                ->with("exito", "Se edito correctamente el huesped");

        } else {
            $image_resize = Image::make($request->imagen->getRealPath());
            $image_resize->resize(800, null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image_resize->orientate();
            $nombre_archivo =time() . "." . $request->imagen->extension();

            $image_resize->save(public_path('foto/' . $nombre_archivo));

            $request->piel;
            $request->sexo;
            $request->cabello;
            $request->ojos;

            //VALIDAR
            //
            $request->validate([
                'nombres' => 'required',
                'apellidos' => 'required',
                'fnacimiento' => 'required',
                'edad' => 'required',
                'ingreso' => 'required',
                'egreso' => 'nullable',
                'sexo' => 'required',
                'cabello' => 'required',
                'ojos' => 'required',
                'piel' => 'required',
                'identidad' => 'required',
                'nacionalidad' => 'required',
                'pasaporte' => 'nullable',
                'nacimiento' => 'required',
                'direccion' => 'required',
                'gradoEscolar' => 'required',
                'signosFisicos' => 'required',
                'enfermedad' => 'nullable',
                'tratamiento' => 'nullable',]);

            $huesped = Huesped::findOrFail($id);


            //Datos Obtenidos del Formulario
            $huesped->nombres = $request->input('nombres');
            $huesped->apellidos = $request->input('apellidos');
            $huesped->fnacimiento = $request->input('fnacimiento');
            $huesped->edad = $request->input('edad');
            $huesped->ingreso = $request->input('ingreso');
            $huesped->egreso = $request->input('egreso');
            $huesped->sexo = $request->input('sexo');
            $huesped->cabello = $request->input('cabello');
            $huesped->ojos = $request->input('ojos');
            $huesped->piel = $request->input('piel');
            $huesped->identidad = $request->input('identidad');
            $huesped->nacionalidad = $request->input('nacionalidad');
            $huesped->pasaporte = $request->input('pasaporte');
            $huesped->nacimiento = $request->input('nacimiento');
            $huesped->direccion = $request->input('direccion');
            $huesped->gradoEscolar = $request->input('gradoEscolar');
            $huesped->signosFisicos = $request->input('signosFisicos');
            $huesped->enfermedad = $request->input('enfermedad');
            $huesped->tratamiento = $request->input('tratamiento');
            $huesped->imagen = $nombre_archivo;
            $huesped->save();

            //todo retornar la vista del formulario crear responsable


            return redirect()->route("listado.index")
                ->with("exito", "Se edito correctamente el huesped");
        }
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

        $narracionBorrar = NarracionHecho::where('id_huesped', '=', $id);
        $narracionBorrar->delete();

        $responsables = Responsable::where("id_huesped", "=", $id)->get();
        foreach ($responsables as $responsable) {
            $responsable->delete();
        }
        $huesped = Huesped::findOrFail($id);
        $huesped->delete();

        return redirect()->route('listado.index')->with('mensaje', 'El huesped y todos sus datos fueron borrados completamente');

    }
}
