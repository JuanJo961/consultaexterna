<?php

namespace App\Modelos\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatCategoria extends Model
{
    protected $table = 'cat_categorias';
    public function usuario()
    {
      return $this->belongsTo('App\Modelos\usuario');
    }
}
