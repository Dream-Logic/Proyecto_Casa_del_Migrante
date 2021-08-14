<?php

namespace App\Http\Controllers;

use App\Exports\EgresosExport;
use App\Exports\HuespedExport;
use App\Exports\SaludExport;
use App\Huesped;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
//use Maatwebsite\Excel;
use Maatwebsite\Excel\Facades\Excel;



class ExportHuespedController extends Controller
{

     public function export()
    {
return Excel::download(new HuespedExport, 'Listado de Huesped.xlsx');
        // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function prueba(){
        return (new HuespedExport)->download('Listado de Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
   }


    public function egreso()
    {
        return Excel::download(new EgresosExport, 'Listado de egreso.xlsx');
        // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function egresopdf(){
        return (new EgresosExport)->download('Listado de egreso.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function salud()
    {
        return Excel::download(new SaludExport(), 'Listado de salud.xlsx');
        // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function saludpdf(){
        return (new SaludExport())->download('Listado de salud.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

//}



 //public function pdfprueba(){
   // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);


}


