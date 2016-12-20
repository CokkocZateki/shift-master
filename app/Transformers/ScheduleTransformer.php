<?php

namespace App\Transformers;

use App\Models\Schedule;
use App\Models\User;
use League\Fractal\TransformerAbstract;



class ScheduleTransformer extends TransformerAbstract {


	/**
     * List of resources possible to include
     *
     * @var array
     */
    // protected $availableIncludes = [
    //     'user'
    // ];

	public function transform(Schedule $schedule){


		return [


			'date'=>$schedule->date,
			'day'=>$schedule->day,
            'rosterId'=>$schedule->roset_id

		];


	}


  /**
     * Include Author
     *
     * @return League\Fractal\ItemResource
     */
    // public function includeUser(Employee $employee)
    // {
    //     $user = $employee->user;

    //     return $this->item($user, new UserTransformer);
    // }





}








?>