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

    public function epi()
    {
        return $this->hasMany(epi::class, 'resident_id');
    }

    public function diarrheal()
    {
        return $this->hasMany(diarrheal::class, 'resident_id');
    }

    public function ntp()
    {
        return $this->hasMany(ntp::class, 'resident_id');
    }

    public function deliveries()
    {
        return $this->hasMany(Deliveries::class, 'resident_id');
    }

    public function familyplanning()
    {
        return $this->hasMany(familyplanning::class, 'resident_id');
    }



    public function familyNumbering()
    {
        return $this->belongsTo(FamilyNumbering::class, 'family_id', 'id');
    }


}
