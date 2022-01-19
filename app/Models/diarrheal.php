<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class diarrheal extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'resident_id', 'name', 'age', 'bp', 'temp',
    ];

    public function residents()
    {
        return $this->belongsTo(Residents::class, 'resident_id');
    }

}
