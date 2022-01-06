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
        'family_id',
        'family_head',
        'fname',
        'lname',
        'mname',
        'age',
        'bdate',
        'mobile',
        'placeofbirth',
        'sex',
        'civil_status',
        'phil_health_id',
        'id_4ps',
    ];

    protected $dates = ['deleted_at'];

    public function pregnants()
    {
        return $this->hasMany(pregnants::class, 'resident_id');
    }

    public function familyNumbering()
    {
        return $this->belongsTo(FamilyNumbering::class, 'id');
    }


}
