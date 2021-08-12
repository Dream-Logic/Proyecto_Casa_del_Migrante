<?php

namespace App\Exports;

use App\Empleado;
use App\Estudiante;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EmpleadsExport implements FromView,ShouldAutoSize ,WithMapping, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($Empleado): array
    {
        return [

            $Empleado->nombres_personal,


        $Empleado->apellidos_personal,
        $Empleado->fnacimiento_personal,
        $Empleado->edad_personal,
        $Empleado->sexo_personal,
        $Empleado->identidad_personal,
        $Empleado->direccion_personal,
        $Empleado->profesionPersonal,
        $Empleado->cargo,
        $Empleado->email,
        $Empleado->telefono_personal,


        ];
    }
    public function headings(): array
    {
        return [
            'nombre',
            'Apellidos',
            'Fecha de Nacimiento',
            'Edad',
            'Sexo',
            'Identidad',
            'Direccion',
            'Profesion',
            'Cargo',
            'email',
            'Telefono Personal',








        ];
    }

    public function view(): View
    {
        $Empleado= Empleado::all();
        return View('exportar.personal')->withempleado($Empleado);

    }
}
