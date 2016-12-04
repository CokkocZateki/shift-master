<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserFormRequest;

use App\Http\Requests\RegisterUserFormRequest as RegisterUserRequest;
use App\Models\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    


    public function signup(RegisterUserRequest $request){

    	User::create([


    		'username'=> $request->json('username'),
            'email'=> $request->json('email'),
            'password'=> bcrypt($request->json('password')),
            'roleId'=> $request->json('roleId')
]);


return response()->json(['message'=>'successfully added'],401);
    	    }


    	    public function signin(Request $request){
               
                $token = JWTAuth::attempt($request->only('email', 'password'));

    	    	
    	    	dd($token);
    	    }

}
