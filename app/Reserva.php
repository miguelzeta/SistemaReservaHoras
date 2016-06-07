<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table= "reserva";
    protected $primaryKey = [ 'Med_RutUsuario', 'RutUsuario','IdSucursal'];

    protected $fillable=[
        'Med_RutUsuario',
        'RutUsuario',
        'IdSucursal',
        'FechaReserva',
        'HoraReserva',

    ];
}
