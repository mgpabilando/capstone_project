<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class familyplanning extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'resident_id', 'name', 'age', 'method_used',
    ];

    public function residents()
    {
        return $this->belongsTo(Residents::class, 'resident_id');
    }

}
