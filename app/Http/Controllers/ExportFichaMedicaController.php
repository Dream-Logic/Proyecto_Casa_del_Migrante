<?php

namespace App\Http\Controllers;

use App\Exports\FichaMedicaExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportFichaMedicaController extends Controller
{
    //
    public function export()
    {
        return Excel::download(new FichaMedicaExport, 'Ficha.xlsx');
        // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function prueba(){
        return (new FichaMedicaExport)->download('Ficha.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

}
