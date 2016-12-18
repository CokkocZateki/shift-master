<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserFormRequest;

use App\Http\Requests\RegisterUserFormRequest as RegisterUserRequest;
use App\Models\User;
use App\Models\Employee;
use JWTAuth;
use Carbon\Carbon;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    

    /**
     * [signup description]
     * @param  RegisterUserRequest $request [description]
     * @return [type]                       [description]
     */

    public function signup(RegisterUserRequest $request){


        try{

    	   User::create([

    	       'username'=> $request->json('username'),
                'email'=> $request->json('email'),
                'password'=> bcrypt($request->json('password')),
                'role_id'=> $request->json('roleId')


            ]);

        }catch(\PDOException $e){

            return response()->json(['message'=>'Sorry user account could not be created.'],424);
        }
    
            return response()->json(['message'=>'user account successfully created.'],200);
    }


    /**
     * [signin description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function signin(Request $request){
               
        $token = JWTAuth::attempt($request->only('email', 'password'),[

                        'exp'=>Carbon::now()->addDay()->timestamp,

            ]);
                
        if($token){
                
            $user=User::where('email',$request->json('email'))->first();
            $employee=Employee::where('email',$request->json('email'))->first();

            $data=array();

            $data['userId']=$user->id;
            $data['employeeId']=$employee->id;
            $data['token']=$token;
            $data['name']="$employee->first_name $employee->last_name";
       
            return response()->json($data,200);
                

        }else{

            return response()->json(['error'=>'Invalid username or password'],401);

        }	
    }



}
