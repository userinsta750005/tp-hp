<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'date_de_naissance', 'adresse', 'tel', 'ailment', 'age'];

}
