<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonctionnaire extends Model
{
    use HasFactory;
    protected $fillables = [
        "nom",
        "prenom",
        "age",
    ];
}
