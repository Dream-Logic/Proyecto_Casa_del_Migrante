<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huesped extends Model
{
    //
    protected $fillable=[

        'nombres',
        'apellidos',
        'fnacimiento',
        'edad',
        'ingreso',
        'egreso',
        'sexo',
        'cabello',
        'ojos',
        'piel',
        'identidad',
        'nacionalidad',
        'pasaporte',
        'nacimiento',
        'direccion',
        'gradoEscolar',
        'signosFisicos',
        'enfermedad',
        'tratamiento',
        'id_usuario'];



    Public function scopeName($query , $name)
    {

        if (trim($name) != "") {


            $query->where(\DB::raw("CONCAT(nombres, '' , apellidos, identidad, direccion)"),
                'LIKE', "%$name%");
        }
    }

    }
