<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class usuario extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    protected $fillable = ['usuario', 'correo','password','imagen','nombre','fechaNacimiento'];
}

