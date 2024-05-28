<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenotazioni extends Model
{   protected $fillable = [
    'corso', 'data', 'ora'
];

    use HasFactory;
}
