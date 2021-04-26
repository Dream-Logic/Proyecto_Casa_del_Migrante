<?php

namespace App\Exports;

use App\Ficha;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class FichaMedicaExport implements FromCollection
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ficha::all();
    }
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

}
