<?php

namespace App\Http\Controllers;

use App\Exports\EscolaridadExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportEscolaridadController extends Controller
{
    //
    public function export()
    {
        return Excel::download(new EscolaridadExport, 'Estudiante.xlsx');
        // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function prueba(){
        return (new EscolaridadExport)->download('Estudiante.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

}
