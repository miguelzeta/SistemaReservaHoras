<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permite extends Model
{
    protected $table= "permite";
    protected $primaryKey = ['IdPrevision','IdClinica'];

    protected $fillable=[
        'IdPrevision',
        'IdClinica',

    ];
}
