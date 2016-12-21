<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable =['start_time','end_time','hours','break_start_time','break_end_time','break','schedule_id','employee_id'];


    
}
