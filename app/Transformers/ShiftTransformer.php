<?php

namespace App\Transformers;

use App\Models\Shift;
use League\Fractal\TransformerAbstract;


class ShiftTransformer extends TransformerAbstract {


	public function transform(Shift $shift){


		return [

            'id'=>$shift->id,
			'startTime'=>$shift->start_time,
			'endTime'=>$shift->end_time,
			'hours'=>$shift->hours,
			'employeeId'=>$shift->employee_id

		];


	}







}








?>