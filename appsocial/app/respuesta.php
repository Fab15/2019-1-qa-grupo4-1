<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class respuesta extends Model
{
    protected $fillable = ['texto', 'tags', 'imagen','idUsuario', 'idComentario' ];
}
