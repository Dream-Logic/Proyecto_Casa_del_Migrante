<?php

namespace App\Exports;

use App\Ficha;
use App\Huesped;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class FichaMedicaExport implements  FromView,ShouldAutoSize ,WithMapping, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($Ficha): array
    {
        return [

            $Ficha->nombre_hospital,
        $Ficha->direccion_hospital,
        $Ficha->departamento,
        $Ficha->medico,
        $Ficha->especialista,
        $Ficha->fecha_actual,
        $Ficha->nombres_paciente,
        $Ficha->apellidos_paciente,
        $Ficha->fecha_paciente,
        $Ficha->edad_paciente,
        $Ficha->sexo_paciente,
        $Ficha->direccion_paciente,
        $Ficha->enfermedad_paciente,
        $Ficha->tratamiento_paciente,



        ];
    }
    public function headings(): array
    {
        return [
            'nombre del Hospital',
            'Direccion del Hospital',
            'Departamento',
            'Medico',
            'Especialista',
            'Fecha Actual',
            'Nombre del Paciente',
            'Sexo del Pasiente',
            'direccion del Paciente',
            'Enfermedad',
            'Tratamiento Medico',



        ];
    }
    public function view(): View
    {
        $Ficha= Ficha::all();
        return View('exportar.ficha')->withmedica($Ficha);

    }
}
