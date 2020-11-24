<?php

namespace App\Http\Controllers;

use App\Huesped;

class EstadisticaController extends Controller
{
    //mostrar el registro de la grafica por cada imc,rufier y grasa de cada cliente
    public function index(){
        return view('Estadistica');
    }
    //muestra la vista grafico paridad de género//
    public function paridad(){
        return view('paridadGenero');
    }
    public function desercion(){
        return view('indiceDesercion');
    }
    public function vulnerabilidad(){
        return view('indiceVulnerabilidad');
    }
}
