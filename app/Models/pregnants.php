<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregnants extends Model
{
    use HasFactory;

    protected $fillable = [
        'resident_id', 'name', 'height_cm', 'weight_kg', 'age', 'lmp', 'pregnancyorder',
    ];

    public function residents()
    {
        return $this->belongsTo(Residents::class);
    }
}
