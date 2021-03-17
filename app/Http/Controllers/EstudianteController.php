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


    public function Expediente(Request $request)
    {
        //  $listas =Empleado::paginate(50);
        return view('estudiante/create_estudiante');
    }

}
