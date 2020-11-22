<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function Usuarios()
    {
        return $this->belongsTo('App/Modelos/Usuario');
    }
}
