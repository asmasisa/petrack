<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vetos extends Model
{
    use HasFactory;
    protected $table = 'vetos';
    protected $fillable = [
        'nom', 'prenom', 'numtel', 'nom_cabinet',
        'heure_travail', 'frais_consultation', 'localisation', 'description', 'image'
    ];
}
