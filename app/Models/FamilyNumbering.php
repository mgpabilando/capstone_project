<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyNumbering extends Model
{
    use HasFactory;

    protected $fillable = [
        'resident_id', 'familyhead', 'purok',
    ];
}
