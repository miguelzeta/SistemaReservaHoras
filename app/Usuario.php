<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table= "usuario";
    protected $primaryKey = 'RutUsuario';

    protected $fillable=[
        'RutUsuario',
        'NombreUsuario',
        'DireccionUsuario',
        'FonoUsuario',
        'EmailUsuario',
        'ApellidoPaternoUsuario',
        'ApellidoMaternoUsuario',
        'ComunaUsuario',
        'ContrasenaUsuario',
        'type'
    ];
}
