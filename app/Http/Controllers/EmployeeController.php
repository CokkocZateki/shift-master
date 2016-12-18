<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\RegisterEmployeeFormRequest as RegisterEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest as UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employeeList = Employee::all();

        if(empty($employeeList)){

            return response()->json(['error'=>'Sorry no employee found.'],200);
        }

        return response()->json($employeeList,200);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterEmployeeRequest $request)
    {
        try{

            Employee::create([

                'first_name'=>$request->json('firstName'),
                'last_name'=>$request->json('lastName'),
                'phone_number'=>$request->json('phoneNumber'),
                'email'=>$request->json('email'),
                'role_id'=>$request->json('roleId'),
            ]);

            return response()->json(['message'=>'eEmployee added successfully.'],200);

        }catch(\PDOException $e){

            return response()->json(['message'=>'Sorry employee could not be added.'],422);
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
        $employee = Employee::find($id);

        if($employee){

            return response()->json($employee,200);
        }

        return response()->json('Sorry no employee found',404);
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
    public function update(UpdateEmployeeRequest $request, $id)
    {
    
        try {
                
            
            $employee=Employee::find($id);
            
            if($employee){
                
                $employee->first_name = $request->json('firstName');
                $employee->last_name = $request->json('lastName');
                $employee->phone_number = $request->json('phoneNumber');
                $employee->email = $request->json('email');
                $employee->role_id = $request->json('roleId');
                $employee->save();
                
                return response()->json(['message'=>'Employee updated successfully.'],200);

            }
            
            return response()->json(['message'=>'Sorry employee not found'],409);
            
           

            } catch (Exception $e) {

                return response()->json(['message'=>'Sorry employee could not be updated.'],409);
                
            }

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
            return response()->json(['message'=>'Employee deleted successfully.'],200);

        }catch(\PDOException $e){

            return response()->json(['message'=>'Sorry employee could not be delted.'],422);
        }
    }
}
