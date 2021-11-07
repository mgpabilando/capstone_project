<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine_Request extends Model
{
    use HasFactory;


        protected $fillable = [
            'medicine_name',
            'med_quantity',
        ];
}
