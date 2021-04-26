<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable=[


        'nombres_alumno',
        'apellidos_alumno',
        'grado',
        'carrera',
        'escritura',
        'lectura',
        'habilidades',
        'instrumento',];



    Public function scopeName($query , $name)
    {

        if (trim($name) != "") {


            $query->where(\DB::raw("CONCAT(nombres_alumno, '' , apellidos_alumno)"),
                'LIKE', "%$name%");
        }
    }

}
