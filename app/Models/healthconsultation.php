<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class healthconsultation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'height_cm',
        'weight_kg',
        'lmp',
        'consultation_type',
        'complain',
        'findings',
        'diagnosis',
        'treatment'

    ];
}
