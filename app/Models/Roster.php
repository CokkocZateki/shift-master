<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    


    protected $fillable =[ 'start_date','end_date','is_active' ];


    public function schedules(){


    	return $this->hasMany('App\Models\Schedule');
    }
}
