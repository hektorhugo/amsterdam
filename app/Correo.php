<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{

    protected $fillable = ['nombre', 'correo', 'mensaje'];

}
