<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable =[ 'date','day','roster_id'];


    public function shifts(){


    	return $this->hasMany('App\Models\Shift');
    }
}
