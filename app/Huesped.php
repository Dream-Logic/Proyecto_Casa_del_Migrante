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
        'sexo',
        'cabello',
        'ojos',
        'piel',
        'identidad',
        'nacionalidad',
        'pasaporte',
        'nacimiento',
        'direccion',
        'signosFisicos',
        'enfermedad',
        'tratamiento',
        'id_usuario'];



    public  function scopeSearch($query, $nombres){
        return $query->where('nombres', 'LIKE', "%$nombres%");

    }
}
