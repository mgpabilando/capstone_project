<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diarrheal extends Model
{
    use HasFactory;
    protected $fillable = [
        'resident_id', 'name', 'age',
    ];
}
