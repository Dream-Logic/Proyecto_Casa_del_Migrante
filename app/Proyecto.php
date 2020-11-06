<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    public  function scopeSearch($query, $nombres){


        return $query->where('nombres', 'LIKE', "%$nombres%");

    }
}
