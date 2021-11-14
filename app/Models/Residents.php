<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'age',
        'bdate',
        'mobile',
        'placeofbirth',
        'family_id',
        'sex',
        'civil_status',
        'phil_health_id',
        'id_4ps',
        'purok',
    ];

    public function pregnants()
    {
        return $this->hasMany(pregnants::class);
    }



}
