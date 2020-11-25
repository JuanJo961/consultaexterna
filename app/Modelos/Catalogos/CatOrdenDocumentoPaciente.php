<?php

namespace App\Modelos\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatOrdenDocumentoPaciente extends Model
{
    public function pacientes()
    {
        return $this->belongsToMany('App\Modelos\Paciente');
    }
}
