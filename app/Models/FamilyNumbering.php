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
        'f_name', 'm_name', 'l_name', 'purok',
    ];

    protected $dates = ['deleted_at'];
    

    public function residents()
    {
        return $this->hasMany(Residents::class, 'family_id', 'id');
    }


}
