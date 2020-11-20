<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //Relacion de uno a muchos
    public function especialidades()
    {
     return $this->hasMany('App\Modelos\Catalogos\CatEspecialidad');
    }
    public function categorias()
    {
        return $this->hasMany('App\Modelos\Catalogos\CatCategoria');
    }
    public function areas()
    {
        return $this->hasMany('App\Modelos\Catalogos\CatArea');
    }
    public function departamentos()
    {
        return $this->hasMany('App\Modelos\Catalogos\CatDepartamento');
    }
    public function turnos()
    {
        return $this->hasMany('App\Modelos\Catalogos\CatTurnos');
    }
    public function habilitados()
    {
        return $this->hasMany('App\Modelos\Catalogos\CatHabilitado');
    }
    //Relacion de muchos a muchos
    public function roles()
    {
        return $this->belongsToMany('App\Modelos\Catalogos\CatRole');
    }
    public function guardias()
    {
        return $this->belongsToMany('App\Modelos\Catalogos\CatGuardia');
    }
    public function documentos()
    {
        return $this->belongsToMany('App\Modelos\Catalogos\CatDocumento');
    }
}
