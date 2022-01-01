<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyNumbering extends Model
{
    use HasFactory;

    protected $fillable = [
        'resident_id', 'family_id'
    ];

    public function resident()
    {
        return $this->belongsTo(Residents::class);
    }

    public function residents()
    {
        return $this->hasMany(Residents::class, 'family_id');
    }


}
