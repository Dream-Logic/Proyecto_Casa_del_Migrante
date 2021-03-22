<?php

namespace App\Exports;

use App\Huesped;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class HuespedExport implements FromCollection,ShouldAutoSize ,WithMapping, WithHeadings

{
    //para descargar pdf
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Huesped::all();
    }

    public function map($Huesped): array
    {
        return [

            $Huesped->nombres,
        $Huesped->apellidos,
            $Huesped->fnacimiento,
        $Huesped->edad,
            $Huesped->ingreso ,
        $Huesped->egreso ,
        $Huesped->sexo,
            $Huesped->cabello ,
        $Huesped->ojos,
        $Huesped->piel ,
            $Huesped->identidad ,
        $Huesped->nacionalidad ,
        $Huesped->pasaporte,
        $Huesped->nacimiento,
        $Huesped->direccion ,
            $Huesped->gradoEscolar,
        $Huesped->signosFisicos,
        $Huesped->enfermedad,
        $Huesped->tratamiento ,


        ];
    }
    public function headings(): array
    {
        return [
            'Nombre',
            'Apellido',
            'Fecha Nacimiento',
            'Edad',
            'Ingreso',
            'Egreso',
            'Sexo',
            'Cabello',
            'Ojos',
            'Piel',
            'Identidad',
            'Nacionalidad',
            'Pasaporte',
            'Nacimiento',
            'Direccion',
            'Grado Escolar',
            'Signos Fisicos',
            'Enfermedad',
            'Tratamineto',







        ];
    }

}
