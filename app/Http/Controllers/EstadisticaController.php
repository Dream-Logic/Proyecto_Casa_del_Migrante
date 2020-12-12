<?php

namespace App\Http\Controllers;

use App\Charts\EdadChart;
use App\Huesped;
use App\Proyecto;
use Illuminate\Support\Facades\DB;

class EstadisticaController extends Controller
{
    public function index(){
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];
        $huespedes = DB::table('huespeds')
            ->select(DB::raw('concat(10*floor(edad/10), \'-\', (10*floor(edad/10) + 9), \' años\')  as `rango`, count(*) as `numero_de_huespedes`'))
            ->groupBy('rango')
            ->get();

        $generos = DB::table('huespeds')
            ->select("sexo",DB::raw('count(*) as `numero_generos`'))
            ->groupBy('sexo')
            ->get();

        //muestra el grafico paridad de género//
        $edadChart  = new EdadChart();
        $edadChart->minimalist(true);
        $edadChart->title("Huespedes por edad");

        $edadChart->labels($huespedes->pluck("rango"));
        $edadChart->dataset("Huespedes por edad","pie",$huespedes->pluck("numero_de_huespedes"))
            ->color($borderColors)->backgroundcolor($fillColors);
        $edadChart->options=["fill"=>true];

        //muestra el grafico paridad de género//
        $generoChart = new EdadChart();
        $generoChart->minimalist(true);
        $generoChart->title("Huespedes por género");

        $generoChart->labels($generos->pluck("sexo"));
        $generoChart->dataset("Huespedes por género","pie",$generos->pluck("numero_generos"))
            ->color($borderColors)->backgroundcolor($fillColors);

        $generoChart->options=["fill"=>true,"beginAtZero"=>true];

        return view('Estadistica',["edadChart"=>$edadChart,"generosChart"=>$generoChart]);
    }
}
