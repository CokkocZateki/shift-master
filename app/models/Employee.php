<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    

    protected $table = 'employee';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'first_name','last_name','email','phone_number','role_id'
    ];


    public function user(){


    	return $this->hasOne('App\Models\User','email','email');
    }
}
