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
return Excel::download(new HuespedExport, 'Huesped.xlsx');
        // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function prueba(){
        return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
   }


    public function egreso()
    {
        return Excel::download(new EgresosExport, 'egreso.xlsx');
        // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function egresopdf(){
        return (new EgresosExport)->download('egreso.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function salud()
    {
        return Excel::download(new SaludExport(), 'salud.xlsx');
        // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function saludpdf(){
        return (new SaludExport())->download('salud.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

//}



 //public function pdfprueba(){
   // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);


}


