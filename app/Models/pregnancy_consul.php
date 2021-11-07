<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregnancy_consul extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'resident_id', 'age', 'lmp', 'pregnancyorder',
    ];
}
