<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Huesped;
use Illuminate\Http\Request;

class GraficoController extends Controller
{
    //mostrar el registro de la grafica por cada imc,rufier y grasa de cada cliente
    public function index(){
        return view('graficos');
    }

}
