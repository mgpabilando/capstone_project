<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyTimeRecord extends Model
{
    use HasFactory;
    public $timestamps = FALSE;

    protected $fillable = [
        'user_id', 'TimeIn', 'TimeOut', 'UnderTime',
    ];
}
