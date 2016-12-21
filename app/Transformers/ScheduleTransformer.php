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
    protected $availableIncludes = ['shifts'];

	public function transform(Schedule $schedule){

        $shifts = $schedule->shifts;
		return [

            'id'=>$schedule->id,
			'date'=>$schedule->date,
			'day'=>$schedule->day,
            'rosterId'=>$schedule->roster_id,
            // 'shifts'=>$this->includeShifts($schedule),
		];


	}


  /**
     * Include Author
     *
     * @return League\Fractal\ItemResource
     */
    public function includeShifts(Schedule $schedule)
    {

   $shifts=$schedule->shifts;


        return $this->collection($shifts, new ShiftTransformer);
    }





}








?>