<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $table= "clinica";
    protected $primaryKey = 'IdClinica';

    protected $fillable=[
        'IdClinica',
        'NombreClinica',

    ];
}
