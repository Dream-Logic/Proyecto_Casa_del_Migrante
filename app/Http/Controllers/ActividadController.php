<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function activities(){
        return view('actividades');
    }
}
