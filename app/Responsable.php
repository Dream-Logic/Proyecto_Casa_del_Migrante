<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    //
    protected $fillable=[

        'nombres',
        'apellidos',
        'fnacimiento',
        'direccion',
        'trabaja',
        'profesionOficio',
        'identidad',
        'pasaporte',
        'civil',
        'telefono',
        'parentesco',
        'id_huesped'

    ];
}
