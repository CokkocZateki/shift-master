<?php

namespace App\Http\Controllers;
use App\Models\Roster;
use App\Transformers\RosterTransformer;
use App\Http\Requests\CreateRosterRequest;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Validator\CustomValidator;
use App\Events\RosterCreated;


class RosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rosters=Roster::all();

        return fractal()
                ->collection($rosters)
                ->transformWith(new RosterTransformer)
                ->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateRosterRequest $request)
    {
        
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRosterRequest $request)
    {
        
      
        $roster = Roster::create([

            'start_date'=>$request->json('rosterStartDate'),
            'end_date'=>$request->json('rosterEndDate'),
            'is_active'=>$request->json('isActive'),


            ])->id;

        $newRoster = Roster::find($roster);


        event( new RosterCreated($newRoster));
        return response()->json(['message'=>'roster created successfully.'],200);

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roster=Roster::find($id);


        if($roster){

           return  fractal()
            ->item($roster)
            ->includeSchedules()
            ->transformWith(new RosterTransformer)
            ->toArray();

        }

        return response()->json(['error'=>'Sorry no roster found'],404);

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
    public function destroy($id)
    {
        //
    }


}
