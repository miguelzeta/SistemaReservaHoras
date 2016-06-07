<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table= "sucursal";
    protected $primaryKey = 'IdSucursal';

    protected $fillable=[
        'IdSucursal',
        'IdClinica',
        'NombreSucursal',
        'DireccionSucursal',
        'ComunaSucursal',

    ];
}
