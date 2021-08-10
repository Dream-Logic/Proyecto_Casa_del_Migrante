<?php

namespace App\Exports;

use App\Estudiante;
use App\Ficha;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EscolaridadExport implements FromView,ShouldAutoSize ,WithMapping, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($Estudiante): array
    {
        return [

            $Estudiante->nombres_alumno,
        $Estudiante ->apellidos_alumno,
        $Estudiante->grado ,
        $Estudiante->carrera,
        $Estudiante->escritura,
        $Estudiante->lectura,
        $Estudiante->habilidades,
        $Estudiante->instrumento,



        ];
    }
    public function headings(): array
    {
        return [
            'nombre del Alumno',
            'Apellidos',
            'Grado',
            'carretera',
            'lectura',
            'Habilidades',
            'Instrumento',



        ];
    }
    public function view(): View
    {
        $Estudiante= Estudiante::all();
        return View('exportar.escolaridad')->withescolaridad($Estudiante);

    }
}
