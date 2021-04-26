<?php

namespace App\Exports;

use App\Estudiante;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EscolaridadExport implements FromCollection,ShouldAutoSize ,WithMapping, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Estudiante::all();
    }
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
}
