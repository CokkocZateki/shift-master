<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username','email','password','role_id'];
}
