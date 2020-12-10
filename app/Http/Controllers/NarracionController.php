<?php

namespace App\Http\Controllers;

use App\NarracionHecho;
use Illuminate\Http\Request;

class NarracionController extends Controller
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
    public function create($id)
    {
        //
        return view('huespedes.create_narracion_hechos')->with('id', $id);
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
        $request->validate([

            //hechos
            'vulneracion' => 'required',
            'proteccion' => 'required',

        ]);
        $newHuesped = new NarracionHecho();
        //hechos
        $newHuesped->vulneracion = $request->input('vulneracion');
        $newHuesped->proteccion = $request->input('proteccion');
        $newHuesped->id_huesped =$id;
        $newHuesped->save();

        return redirect()->route("listado.index")
            ->with("exito","Se creo exitosamente la narracion de los hechos");




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
