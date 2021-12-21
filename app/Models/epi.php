<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class epi extends Model
{
    use HasFactory;
    protected $fillable = [
        'resident_id', 'name', 'birthdate', 'meds_given',
    ];
}
