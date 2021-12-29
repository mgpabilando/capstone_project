<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Residents extends Model
{
    use HasFactory;
    use SoftDeletes;

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

    protected $dates = ['deleted_at'];

    public function pregnants()
    {
        return $this->hasMany(pregnants::class);
    }


    public function family_id()
    {
        return $this->belongsTo(FamilyNumbering::class);
    }


}
