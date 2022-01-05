<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MorningDtr extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id' ,'Arrival', 'Departure',
    ];
}
