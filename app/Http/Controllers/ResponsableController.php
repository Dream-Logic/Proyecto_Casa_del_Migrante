<?php

namespace App\Http\Controllers;

use App\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function nuevo($id)
    {
        return view('huespedes.create_responsable')->with('id', $id);
    }

    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        //select de la ficha madre/ representante legal
        $request->trabajaMadre;
        $request->civil;
        $request->parentesco;

        $request->validate([
            //representantelegal
            'nombres' => 'required',
            'apellidos' => 'required',
            'fnacimiento' => 'required',
            'direccion' => 'required',
            'trabaja' => 'required',
            'profesionOficio' => 'required',
            'identidad' => 'required|unique:responsables,identidad,{$this->post->id}|digits:13',
            'pasaporte' => 'nullable|unique:responsables,pasaporte,{$this->post->id}',
            'civil' => 'required',
            'telefono' => 'required|unique:responsables,telefono,{$this->post->id}||digits:8',
            'parentesco' => 'required',
        ]);

        $newHuesped = new Responsable();

        //madre /representante legal
        $newHuesped->nombres = $request->input('nombres');
        $newHuesped->apellidos = $request->input('apellidos');
        $newHuesped->fnacimiento = $request->input('fnacimiento');
        $newHuesped->direccion = $request->input('direccion');
        $newHuesped->trabaja = $request->input('trabaja');
        $newHuesped->profesionOficio = $request->input('profesionOficio');
        $newHuesped->identidad = $request->input('identidad');
        $newHuesped->pasaporte = $request->input('pasaporte');
        $newHuesped->civil = $request->input('civil');
        $newHuesped->telefono = $request->input('telefono');
        $newHuesped->parentesco = $request->input('parentesco');
        $newHuesped->id_huesped = $id;
        $newHuesped->save();


        return redirect()->route("responsable.nuevo", ["id" => $id])
            ->with("id", $id)->with("exito", "Se creo exitosamente el responsable, puedes llenar otro responsable si gustas");

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
        $responsables = Responsable::where('id_huesped', "=", $id)->get();
        return view('huespedes.responsable_editar')->with('responsables', $responsables);
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
        $request->trabajaMadre;
        $request->civil;
        $request->parentesco;


        $request->validate([

            'nombres' => 'required',
            'apellidos' => 'required',
            'fnacimiento' => 'required',
            'direccion' => 'required',
            'trabaja' => 'required',
            'profesionOficio' => 'required',
            'identidad' => 'required',
            'pasaporte' => 'nullable',
            'civil' => 'required',
            'telefono' => 'required|digits:8',
            'parentesco' => 'required',
        ]);

        $responsables = Responsable::findOrFail($id);


        //Datos Obtenidos del Formulario
        $responsables->nombres = $request->input('nombres');
        $responsables->apellidos = $request->input('apellidos');
        $responsables->fnacimiento = $request->input('fnacimiento');
        $responsables->direccion =$request->input('direccion');
        $responsables->trabaja = $request->input('trabaja');
        $responsables->profesionOficio = $request->input('profesionOficio');
        $responsables->identidad = $request->input('identidad');
        $responsables->pasaporte= $request->input('pasaporte');
        $responsables->civil = $request->input('civil');
        $responsables->telefono = $request->input('telefono');
        $responsables->parentesco = $request->input('parentesco');
        $responsables->save();
        //todo retornar la vista del formulario crear responsable


        return redirect()->route('listado.index',["id"=>$responsables->id])
            ->with("exito", "Se edito correctamente el huesped");
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
    }
}
