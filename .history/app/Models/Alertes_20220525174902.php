<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alertes extends Model
{
    use HasFactory;

    public $fillable = [
        'groupe_sanguin',
        'hopitaux',
        'niveau_urgence'
    ];
}
