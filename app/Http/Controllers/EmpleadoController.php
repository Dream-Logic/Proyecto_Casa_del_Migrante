<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use Image;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //  $listas =Empleado::paginate(50);
      //  $listas = Empleado::name($request->get('name'))->orderBy('id', 'ASC')->paginate(15);
        //return view('empleados\listadoRaiz_empleados')->with('listas', $listas);

        $listas = Empleado::name($request->get('name'))->orderBy('id', 'ASC')->paginate(15);
        return view('empleados\listadoRaiz_empleados')->with('listas', $listas);

    }

    public function Personal()
    {

        //return view('create_personal');
        $listas = Empleado::paginate(15);

        return view('create_personal')->with('listas', $listas);


    }
    public function director(Request $request){
      //  $listas =Empleado::paginate(50);
        $listas = Empleado::name($request->get('name'))->orderBy('id', 'ASC')->paginate(15);
        return view('empleados\listadoEmpleado')->with('listas', $listas);
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
        $request->sexo_personal;


        //VALIDAR
        $request->validate([
            'nombres_personal' => 'required',
            'apellidos_personal' => 'required',
            'fnacimiento_personal' => 'required',
            'edad_personal' => 'required',
            'sexo_personal' => 'required',
            'identidad_personal' => 'required|unique:empleados,identidad_personal,{$this->post->id}|digits:13',
            'direccion_personal' => 'required',
            'profesionPersonal' => 'required',
            'cargo' => 'required',
            'email' => 'nullable|email|max:255|unique:empleados',
            'telefono_personal' => 'required|unique:responsables,telefono,{$this->post->id}||digits:8']);

        $newEmpleado = new Empleado();

        //Datos Obtenidos del Formulario
        $newEmpleado->nombres_personal = $request->input('nombres_personal');
        $newEmpleado->apellidos_personal = $request->input('apellidos_personal');
        $newEmpleado->fnacimiento_personal = $request->input('fnacimiento_personal');
        $newEmpleado->edad_personal = $request->input('edad_personal');
        $newEmpleado->sexo_personal = $request->input('sexo_personal');
        $newEmpleado->identidad_personal = $request->input('identidad_personal');
        $newEmpleado->direccion_personal = $request->input('direccion_personal');
        $newEmpleado->profesionPersonal = $request->input('profesionPersonal');
        $newEmpleado->cargo = $request->input('cargo');
        $newEmpleado->email = $request->input('email');
        $newEmpleado->telefono_personal = $request->input('telefono_personal');
            $newEmpleado->imagen = $imagen;
        $newEmpleado->save();
        //todo retornar la vista del formulario crear responsable

        return redirect()->route("listadoEmpleado.index", ["id" => $newEmpleado->id])
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
        //select de la fichas ninios
        $request->sexo_personal;
        //VALIDAR
        $request->validate([
            'nombres_personal' => 'required',
            'apellidos_personal' => 'required',
            'fnacimiento_personal' => 'required',
            'edad_personal' => 'required',
            'sexo_personal' => 'required',
            'identidad_personal' => 'required|unique:empleados,identidad_personal,{$this->post->id}|digits:13',
            'direccion_personal' => 'required',
            'profesionPersonal' => 'required',
            'cargo' => 'required',
            'email' => 'nullable|email|max:255|unique:empleados',
            'telefono_personal' => 'required|unique:empleados,telefono_personal,{$this->post->id}|digits:8']);


            $newEmpleado = new Empleado();

            //Datos Obtenidos del Formulario
            $newEmpleado->nombres_personal = $request->input('nombres_personal');
            $newEmpleado->apellidos_personal = $request->input('apellidos_personal');
            $newEmpleado->fnacimiento_personal = $request->input('fnacimiento_personal');
            $newEmpleado->edad_personal = $request->input('edad_personal');
            $newEmpleado->sexo_personal = $request->input('sexo_personal');
            $newEmpleado->identidad_personal = $request->input('identidad_personal');
            $newEmpleado->direccion_personal = $request->input('direccion_personal');
            $newEmpleado->profesionPersonal = $request->input('profesionPersonal');
            $newEmpleado->cargo = $request->input('cargo');
            $newEmpleado->email = $request->input('email');
            $newEmpleado->imagen = $nombre_archivo;
            $newEmpleado->telefono_personal = $request->input('telefono_personal');
            $newEmpleado->save();




            //todo retornar la vista del formulario crear responsable

            return redirect()->route("listadoEmpleado.index", ["id" => $newEmpleado->id])
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
        $personal = Empleado::findOrFail($id);
        //$responsables = Responsable::where('id_huesped', "=", $id)->get();
      //  $narracion = NarracionHecho::where('id_huesped', "=", $id)->get();

        return view('empleados\ver_empleado')->with('personal', $personal);


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
        $personal = Empleado::findOrFail($id);

        return view('empleados\editarEmpleado')
            ->with('personal', $personal);
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
        if (($request->imagen) == null) {

            if (($request->sexo) == "femenino") {
                $imagen = "femenino.png";
            } else {
                $imagen = "masculino.png";
            }
        //select de la fichas ninios
        $request->sexo_personal;


        //VALIDAR
        $request->validate([
            'nombres_personal' => 'required',
            'apellidos_personal' => 'required',
            'fnacimiento_personal' => 'required',
            'edad_personal' => 'required',
            'sexo_personal' => 'required',
            'identidad_personal' => 'required',
            'direccion_personal' => 'required',
            'profesionPersonal' => 'required',
            'cargo' => 'required',
            'email' => 'nullable',
            'telefono_personal' => 'required']);

        $personal = Empleado::findOrFail($id);


        $personal->nombres_personal = $request->input('nombres_personal');
        $personal->apellidos_personal = $request->input('apellidos_personal');
        $personal->fnacimiento_personal = $request->input('fnacimiento_personal');
        $personal->edad_personal = $request->input('edad_personal');
        $personal->sexo_personal = $request->input('sexo_personal');
        $personal->identidad_personal = $request->input('identidad_personal');
        $personal->direccion_personal = $request->input('direccion_personal');
        $personal->profesionPersonal = $request->input('profesionPersonal');
        $personal->cargo = $request->input('cargo');
        $personal->email = $request->input('email');
        $personal->telefono_personal = $request->input('telefono_personal');
            $personal->imagen = $imagen;
        $personal->save();

        return redirect()->route("listadoEmpleado.index")
            ->with("exito", "Se edito correctamente el empleado");
        } else {
            $image_resize = Image::make($request->imagen->getRealPath());
            $image_resize->resize(800, null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image_resize->orientate();
            $nombre_archivo =time() . "." . $request->imagen->extension();

            $image_resize->save(public_path('foto/' . $nombre_archivo));
            //select de la fichas ninios
            $request->sexo_personal;


            //VALIDAR
            $request->validate([
                'nombres_personal' => 'required',
                'apellidos_personal' => 'required',
                'fnacimiento_personal' => 'required',
                'edad_personal' => 'required',
                'sexo_personal' => 'required',
                'identidad_personal' => 'required',
                'direccion_personal' => 'required',
                'profesionPersonal' => 'required',
                'cargo' => 'required',
                'email' => 'nullable',
                'telefono_personal' => 'required']);

            $personal = Empleado::findOrFail($id);


            $personal->nombres_personal = $request->input('nombres_personal');
            $personal->apellidos_personal = $request->input('apellidos_personal');
            $personal->fnacimiento_personal = $request->input('fnacimiento_personal');
            $personal->edad_personal = $request->input('edad_personal');
            $personal->sexo_personal = $request->input('sexo_personal');
            $personal->identidad_personal = $request->input('identidad_personal');
            $personal->direccion_personal = $request->input('direccion_personal');
            $personal->profesionPersonal = $request->input('profesionPersonal');
            $personal->cargo = $request->input('cargo');
            $personal->email = $request->input('email');
            $personal->telefono_personal = $request->input('telefono_personal');
            $personal->imagen = $nombre_archivo;
            $personal->save();

            return redirect()->route("listadoEmpleado.index")
                ->with("exito", "Se edito correctamente el empleado");

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

        $personal = Empleado::findOrFail($id);
        $personal->delete();

        return redirect()->route('listadoEmpleado.index')
            ->with('mensaje', 'El empleado y todos sus datos fueron borrados completamente');
    }

}
