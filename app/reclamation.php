<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reclamation extends Model
{
    protected $fillable = [
        'code_client', 'nom_client', 'segment', 'motif', 'status', 'commentaire', 'date', 'userid'
    ];
}
