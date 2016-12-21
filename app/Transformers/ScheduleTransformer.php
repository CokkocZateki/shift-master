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
    protected $availableIncludes = [
        'shifts'
    ];

	public function transform(Schedule $schedule){


		return [


			'date'=>$schedule->date,
			'day'=>$schedule->day,
            'rosterId'=>$schedule->roster_id

		];


	}


  /**
     * Include Author
     *
     * @return League\Fractal\ItemResource
     */
    public function includeShifts(Schedule $schedule)
    {
        $shifts = $schedule->shifts;

        return $this->collection($shifts, new ShiftTransformer);
    }





}








?>