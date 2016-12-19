<?php

namespace App\Transformers;

use App\Models\Employee;
use App\Models\User;
use League\Fractal\TransformerAbstract;


class EmployeeTransformer extends TransformerAbstract {


	/**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'user'
    ];

	public function transform(Employee $employee){


		return [


			'firstNname'=>$employee->first_name,
			'lastName'=>$employee->last_name,
			'email'=>$employee->email,
			'phoneNumber'=>$employee->phone_number,
			'roleId'=>$employee->role_id

		];


	}


  /**
     * Include Author
     *
     * @return League\Fractal\ItemResource
     */
    public function includeUser(Employee $employee)
    {
        $user = $employee->user;

        return $this->item($user, new UserTransformer);
    }





}








?>