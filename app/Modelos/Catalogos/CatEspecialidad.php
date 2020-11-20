<?php

namespace App\Modelos\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatEspecialidad extends Model
{
    protected $table = 'cat_especialidades';
    public function  usuario()
    {
        return $this->belongsTo('App\Modelos\usuario');
    }
}
