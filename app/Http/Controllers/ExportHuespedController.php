<?php

namespace App\Http\Controllers;

use App\Exports\HuespedExport;
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



//}



 //public function pdfprueba(){
   // return (new HuespedExport)->download('Huesped.pdf', \Maatwebsite\Excel\Excel::DOMPDF);


}


