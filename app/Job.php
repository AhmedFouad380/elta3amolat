<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User', 'subJob_id');
    }
}
