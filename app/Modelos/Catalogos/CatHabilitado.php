<?php

namespace App\Modelos\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatHabilitado extends Model
{
    public function  usuario()
    {
        return $this->belongsToMany('App\Modelos\usuario');
    }
}
