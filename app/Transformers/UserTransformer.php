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
    protected $availableIncludes = [
        'employee'
    ];

	public function transform(User $user){


		return [

            'id'=>$user->id,
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
    public function includeEmployee(User $user)
    {
        $employee = $user->employee;

        return $this->item($employee, new EmployeeTransformer);
    }





}








?>