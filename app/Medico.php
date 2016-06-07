<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table= "medico";
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
        'DetallePerfilMedico',
    ];
}
