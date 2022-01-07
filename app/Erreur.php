<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Erreur extends Model
{
    protected $fillable = [
        'date',
        'nombre_erreur',
        'matricule',
    ];
}
