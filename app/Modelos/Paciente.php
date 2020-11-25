<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //Relacion de uno a muchos
    public function Usuarios()
    {
        return $this->belongsTo('App/Modelos/Usuario');
    }
    //relacion de muchos a muchos
    public function documentos()
    {
        return $this->belongsToMany('App\Modelos\Catalogos\CatOrdenDocumentoPaciente');
    }
}
