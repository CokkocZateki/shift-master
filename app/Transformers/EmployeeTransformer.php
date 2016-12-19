<?php

namespace App\Transformers;

use App\Models\Employee;
use League\Fractal\TransformerAbstract;


class EmployeeTransformer extends TransformerAbstract {



	public function transform(Employee $employee){


		return [


			'firstNname'=>$employee->first_name,
			'lastName'=>$employee->last_name,
			'email'=>$employee->email,
			'phoneNumber'=>$employee->phone_number,
			'roleId'=>$employee->roleId

			



		];


	}









}








?>