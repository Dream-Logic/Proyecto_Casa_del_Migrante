<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //

    protected $fillable=[


        'nombres_personal',
        'apellidos_personal',
        'FechaNac_personal',
        'edad_personal',
        'sexo_personal',
        'identidad_personal',
        'direccion_personal',
        'profesionPersonal',
        'cargo',
        'email',
        'telefono_personal'];


    Public function scopeName($query , $name)
    {

        if (trim($name) != "") {


            $query->where(\DB::raw("CONCAT(nombres_personal, '' , apellidos_personal, identidad_personal,cargo)"),
                'LIKE', "%$name%");
        }
    }
}
