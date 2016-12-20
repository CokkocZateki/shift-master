<?php

namespace App\Validator;

use App\Models\Roster;
use Carbon\Carbon;




class CustomValidator{



public function validateRosterStartDate($attribute, $value, $parameters, $validator){



	$last_roster = Roster::find(9)->orderBy('start_date','desc')->first();
	$last_roster_start_date=Carbon::createFromFormat('Y-m-d',$last_roster->start_date);
	$last_roster_end_date=Carbon::createFromFormat('Y-m-d',$last_roster->end_date);

	$new_roster_start_date = Carbon::createFromFormat('Y-m-d',$value);
	

	if($new_roster_start_date->diffInDays($last_roster_end_date)==1){

		return true;
	}

	

}

public function validateRosterEndDate($attribute, $value, $parameters, $validator){

	$roster_start_date =Carbon::createFromFormat('Y-m-d', array_get($validator->getData(), $parameters[0]));
	$roster_end_date = Carbon::createFromFormat('Y-m-d',$value);
	

	if($roster_end_date->diffInDays($roster_start_date)==6){

		return true;
	}

}








}








