<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabaja extends Model
{
    protected $table= "trabaja";
    protected $primaryKey = [ 'IdEspecialidad','IdSucursal','RutUsuario'];

    protected $fillable=[
        'IdEspecialidad',
        'IdSucursal',
        'RutUsuario',
        'FechaIngreso',
        'FechaEgreso',

    ];
}
