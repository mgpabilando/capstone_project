<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MorningDtr extends Model
{
    use HasFactory;
    public $table = 'morning_dtrs';

    protected $fillable = [
        'user_id',
        'Departure',
        'Arrival',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'Departure',
        'Arrival',
        'created_at',
        'updated_at',
    ];

    

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getTimeStartAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimeStartAttribute($value)
    {
        $this->attributes['Arrival'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getTimeEndAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimeEndAttribute($value)
    {
        $this->attributes['Departure'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getDateStartAttribute()
    {
        return $this->Arrival ? Carbon::createFromFormat('Y-m-d H:i:s', $this->Arrival)->format(config('panel.date_format')) : null;
    }                                                                                                                    

    public function getTotalTimeAttribute()
    {
        $Arrival = $this->Arrival ? Carbon::createFromFormat('Y-m-d H:i:s', $this->Arrival) : null;
        $Departure = $this->Departure ? Carbon::createFromFormat('Y-m-d H:i:s', $this->Departure) : null;

        return $this->Departure ? $Departure->diffInSeconds($Arrival) : 0;
    }

    public function getTotalTimeChartAttribute()
    {
        return $this->total_time ? round($this->total_time/3600, 2) : 0;
    }
    
}
