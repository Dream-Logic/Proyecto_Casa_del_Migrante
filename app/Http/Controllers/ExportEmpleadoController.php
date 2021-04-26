<?php

namespace App\Http\Controllers;

use App\Exports\EmpleadsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportEmpleadoController extends Controller
{
    //

    public function export()
    {
        return Excel::download(new EmpleadsExport, 'Empleado.xlsx');
        // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function prueba(){
        return (new EmpleadsExport)->download('Empleado.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }


}
