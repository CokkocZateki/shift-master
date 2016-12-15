<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\RegisterEmployeeFormRequest as RegisterEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            Employee::create([

                'first_name'=>$request->json('firstName'),
                'last_name'=>$request->json('lastName'),
                'phone_number'=>$request->json('phoneNumber'),
                'email'=>$request->json('email'),
                'role_id'=>$request->json('roleId'),
            ]);

            return response()->json(['message'=>'employee resitered successfully'],200);

        }catch(\PDOException $e){

            return response()->json(['message'=>'sorry employee could not be registered'],422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
         try{

            $employee = Employee::find($id);
            $employee->delete();
            return response()->json(['message'=>'Employee deleted successfully'],200);

        }catch(\PDOException $e){

            return response()->json(['message'=>'sorry employee could not be delted'],422);
        }
    }
}
