<?php

namespace App\Http\Controllers;

use App\Narracion;
use Illuminate\Http\Request;

class NarracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fichatres()
    {
        //
        return view('datosHechos');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Narracion  $narracion
     * @return \Illuminate\Http\Response
     */
    public function show(Narracion $narracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Narracion  $narracion
     * @return \Illuminate\Http\Response
     */
    public function edit(Narracion $narracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Narracion  $narracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Narracion $narracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Narracion  $narracion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Narracion $narracion)
    {
        //
    }
}
