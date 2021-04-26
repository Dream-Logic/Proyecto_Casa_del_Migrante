<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    //
    protected $fillable=[

        'nombre_hospital',
        'direccion_hospital',
        'departamento',
        'medico',
        'especialista',
        'fecha_actual',
        'nombres_paciente',
        'apellidos_paciente',
        'fecha_paciente',
        'edad_paciente',
        'sexo_paciente',
        'direccion_paciente',
        'enfermedad_paciente',
        'tratamiento_paciente'

    ];
    Public function scopeName($query , $name)
    {

        if (trim($name) != "") {


            $query->where(\DB::raw("CONCAT(nombre_hospital ,'',  '' ,departamento,
             nombres_paciente, apellidos_paciente,enfermedad_paciente,tratamiento_paciente )"),
                'LIKE', "%$name%");
        }
    }

}
