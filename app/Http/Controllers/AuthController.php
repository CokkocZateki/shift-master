<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserFormRequest;

use App\Http\Requests\RegisterUserFormRequest as RegisterUserRequest;
use App\Models\User;
use App\Models\Employee;
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


return response()->json(['message'=>'successfully added'],200);
    	    }


    	    public function signin(Request $request){
               
                $token = JWTAuth::attempt($request->only('email', 'password'));
                if($token){
                
                $user=User::where('email',$request->json('email'))->first();
               
                return response()->json(['token'=>$token],200);
                }else{

                return response()->json(['error'=>'invalid username or password'],401);

                }
               
    	    	
    	    }

}
