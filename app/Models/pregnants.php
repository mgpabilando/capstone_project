<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregnants extends Model
{
    use HasFactory;

    protected $fillable = [
        'res_name', 'resident_id', 'res_age', 'lmp', 'pregnancyorder',
    ];

    public function residents()
    {
        return $this->belongsTo(Residents::class);
    }
}
