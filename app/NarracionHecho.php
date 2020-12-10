<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NarracionHecho extends Model
{
    //

    protected $fillable = [

        'vulneracion',
        'proteccion',
        'id_huesped'
    ];
}
