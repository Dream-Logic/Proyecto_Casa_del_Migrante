<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestorUsuarioController extends Controller
{
    public function indexAdmin(){
        return view('gestorUsuarioAdministrador');
    }
    public function indexDirec(){
        return view('gestorUsuarioDirector');
    }
}
