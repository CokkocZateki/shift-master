<?php

namespace App\Transformers;

use App\Models\Roster;
use App\Models\User;
use League\Fractal\TransformerAbstract;



class RosterTransformer extends TransformerAbstract {


	/**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'schedules'
    ];

	public function transform(Roster $roster){


		return [

            'id'=>$roster->id,
			'start_date'=>$roster->start_date,
			'end_date'=>$roster->end_date,

		];


	}


  /**
     * Include Author
     *
     * @return League\Fractal\ItemResource
     */
    public function includeSchedules(Roster $roster)
    {
        $schedules = $roster->schedules;

        return $this->collection($schedules, new ScheduleTransformer);
    }





}








?>