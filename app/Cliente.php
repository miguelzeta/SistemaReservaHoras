<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table= "cliente";
    protected $primaryKey = 'RutUsuario';

    protected $fillable=[
        'RutUsuario',
        'IdePrevision',
        'NombreUsuario',
        'DireccionUsuario',
        'FonoUsuario',
        'EmailUsuario',
        'ApellidoPaternoUsuario',
        'ApellidoMaternoUsuario',
        'ComunaUsuario',
        'ContrasenaUsuario',
        'FechaNacimientoCliente'
    ];
}
