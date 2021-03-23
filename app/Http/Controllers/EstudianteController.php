<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */   //


    public function Escolaridad(Request $request)
    {

        return view('estudiante/create_estudiante');
    }

}
