<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prevision extends Model
{
    protected $table= "prevision";
    protected $primaryKey = 'IdPrevision';

    protected $fillable=[
        'IdPrevision',
        'NombrePrevision',
        'TipoPrevision',

    ];
}
