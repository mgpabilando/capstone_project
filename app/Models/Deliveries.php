<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
    use HasFactory;

    protected $fillable = [
        'resident_id', 'name', 'date_delivered', 'outcome', 'age', 'place',
    ];
}
