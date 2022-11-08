<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacationRequest extends Model
{
    protected $fillable = [
        'from_date',
        'to_date',
        'reason',
        'description',
        'request_date',
        'status',
        'user_id',
        'manager_id',
        'job_id'
    ];

    protected $appends = ['hijri_from_date', 'hijri_to_date'];

    public function getHijriFromDateAttribute()
    {
        $date = \GeniusTS\HijriDate\Hijri::convertToHijri($this->attributes['from_date']);
        return $date;

    }

    public function getHijriToDateAttribute()
    {
        $date = \GeniusTS\HijriDate\Hijri::convertToHijri($this->attributes['to_date']);
        return $date;

    }


    public function getUser()
    {

        return $this->hasOne('App\User', 'id', 'user_id');

    }

    public function getManager()
    {

        return $this->hasOne('App\User', 'id', 'manager_id');

    }

    public function getJob()
    {

        return $this->hasOne('App\Job', 'id', 'job_id');

    }
}
