<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\RegisterUserFormRequest;

class AuthController extends Controller
{


	public function signup(RegisterUserFormRequest $request){

		User::create([

			'username'=>$request->json('username'),
			'password'=>$request->json('password'),
			'email'=>$request->json('email'),
			'roleId'=>$request->json('roleId'),

			]);
	}


}
