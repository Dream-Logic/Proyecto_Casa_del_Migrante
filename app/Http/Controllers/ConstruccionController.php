<?php

namespace App\Http\Controllers;

use App\Construccion;
use Illuminate\Http\Request;

class ConstruccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vacia()
    {
        //
        return view('construccion');
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
     * @param  \App\Construccion  $construccion
     * @return \Illuminate\Http\Response
     */
    public function show(Construccion $construccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Construccion  $construccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Construccion $construccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Construccion  $construccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Construccion $construccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Construccion  $construccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Construccion $construccion)
    {
        //
    }
}
