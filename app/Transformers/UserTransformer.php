<?php

namespace App\Transformers;

use App\Models\Employee;
use App\Models\User;
use League\Fractal\TransformerAbstract;


class UserTransformer extends TransformerAbstract {


	/**
     * List of resources possible to include
     *
     * @var array
     */
    // protected $availableIncludes = [
    //     'user'
    // ];

	public function transform(User $user){


		return [


			'username'=>$user->username,
			'email'=>$user->email,
			'roleId'=>$user->role_id

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