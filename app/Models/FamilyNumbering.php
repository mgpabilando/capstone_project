<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FamilyNumbering extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'resident_id', 'family_id'
    ];

    protected $dates = ['deleted_at'];
    
    public function resident()
    {
        return $this->belongsTo(Residents::class);
    }

    public function residents()
    {
        return $this->hasMany(Residents::class, 'family_id');
    }


}
