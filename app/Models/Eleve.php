<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eleve extends Model
{
    use HasFactory;

    protected $fillable = ['prenom', 'nom', 'email', 'date_naissance', 'sexe'];
}
