<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collecteur extends Model
{
    protected $fillable = [
        'prenom',
        'nom',
        'matricule',
        'categorie',

    ];
}
