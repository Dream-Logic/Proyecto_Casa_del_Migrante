<?php

namespace App\Exports;

use App\Huesped;
use App\NarracionHecho;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class HuespedExport implements FromView,ShouldAutoSize ,WithMapping, WithHeadings

{
    //para descargar pdf

    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */


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
    public function view(): View
{
    $Huesped= Huesped::all()->where("egreso", "=", "");
    $responsables = \App\Responsable::all();
    $narracion = NarracionHecho::all();
    return View('exportar.huesped')->withhuespedes($Huesped)->withResponsables($responsables)->withNarracion($narracion);

}

}
