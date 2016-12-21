<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;
use Carbon\Carbon;
class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "all shift";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $startTime = Carbon::createFromFormat('H:i',$request->json('startTime'));
        $endTime = Carbon::createFromFormat('H:i',$request->json('endTime'));
        $minutes = $endTime->diffInMinutes($startTime);
        $hours=date('H:i', mktime(0,$minutes));
        // echo $hours;
        // exit;
        $shift = Shift::create([

                'start_time'=>$startTime,
                'end_time'=>$endTime,
                'hours'=>$hours,
                'schedule_id'=>$request->json('scheduleId'),
                'employee_id'=>$request->json('employeeId')



            ])->id;

        return response()->json(Shift::find($shift));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show";
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
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "deleted";
    }
}
