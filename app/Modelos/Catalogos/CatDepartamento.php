<?php

namespace App\Modelos\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatDepartamento extends Model
{
    public  function usuario()
    {
        return $this->belongsTo('App\Modelos\usuario');
    }
}
