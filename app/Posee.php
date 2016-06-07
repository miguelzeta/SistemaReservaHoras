<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posee extends Model
{
    protected $table= "posee";
    protected $primaryKey =[ 'IdEspecialidad','RutUsuario'];

    protected $fillable=[
        'IdEspecialidad',
        'RutUsuario',
        'FechaEgreso',
        'Institucion',

    ];
}
