<?php

namespace App\Transformers;

use App\Models\Shift;
use League\Fractal\TransformerAbstract;


class UserTransformer extends TransformerAbstract {


	/**
     * List of resources possible to include
     *
     * @var array
     */
    

	public function transform(Shift $shift){


		return [

            'id'=>$shift->id,
			'startTime'=>$shift->start_time,
			'endTime'=>$shift->end_time,
			'hours'=>$shift->hours

		];


	}



}








?>