<?php

namespace App\Modelos\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatRole extends Model
{
    public function usuarios()
    {
        return $this->belongsToMany('App\Modelos\usuario');
    }
}
