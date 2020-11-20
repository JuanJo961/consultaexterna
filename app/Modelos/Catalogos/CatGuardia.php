<?php

namespace App\Modelos\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatGuardia extends Model
{
    public function Usuarios()
    {
      return $this->belongsTo('App\Modelos\CatGuardia');
    }
}
