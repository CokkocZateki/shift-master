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


try{



    	User::create([


    		'username'=> $request->json('username'),
            'email'=> $request->json('email'),
            'password'=> bcrypt($request->json('password')),
            'role_id'=> $request->json('roleId')
]);

}catch(\PDOException $e){

        return response()->json(['message'=>'Sorry no employee exist with such email.'],424);
    }
    return response()->json(['message'=>'successfully added'],200);
    	    }


    	    public function signin(Request $request){
               
                $token = JWTAuth::attempt($request->only('email', 'password'));
                
                if($token){
                
                    $user=User::where('email',$request->json('email'))->first();

                    $data=array();

                    $data['userId']=$user->id;
                    $data['token']=$token;
                    $data['name']=$user->username;
               
                    return response()->json($data,200);
                

                }else{

                    return response()->json(['error'=>'Invalid username or password'],401);

                }
               
    	    	
    	    }

}
