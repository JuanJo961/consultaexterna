<?php

namespace App\Modelos\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatDocumento extends Model
{
    public function usuarios()
    {
        return $this->belongsToMany('App\Modelos\Catalogos\usuario');
    }
}
