<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    protected $fillable = ['titulo', 'descripcion','tags','tipo','idUsuario'];
}