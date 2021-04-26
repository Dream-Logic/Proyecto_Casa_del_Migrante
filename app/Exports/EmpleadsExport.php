<?php

namespace App\Exports;

use App\Empleado;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EmpleadsExport implements FromCollection,ShouldAutoSize ,WithMapping, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Empleado::all();
    }
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
}
