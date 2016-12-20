<?php

namespace App\Listeners;

use App\Events\RosterCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use App\Models\Schedule;
class RosterCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  RosterCreated  $event
     * @return void
     */
    public function handle(RosterCreated $event)
    {
        $roster = $event->roster;
        $startDate = $roster->start_date;
        $endDate = $roster->end_date;
        $rosterId=$roster->id;

        for ($i=0; $i < 7; $i++) { 

            $currentDate = Carbon::createFromFormat('Y-m-d',$startDate)->addDay($i);
            $day = $currentDate->format('l');
           

            Schedule::create([

            'date'=>$currentDate,
            'day'=>$day,
            'roster_id'=>$rosterId

            ]);

            
        }
    }
}
