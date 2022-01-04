<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class undertimeDtr extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'Hour', 'Minute',
    ];
}
