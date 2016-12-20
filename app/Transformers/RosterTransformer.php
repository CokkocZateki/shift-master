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
    // protected $availableIncludes = [
    //     'user'
    // ];

	public function transform(Roster $roster){


		return [


			'start_date'=>$roster->start_date,
			'end_date'=>$roster->end_date,

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