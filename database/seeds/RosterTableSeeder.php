<?php

use Illuminate\Database\Seeder;
use App\Models\Roster;
use Carbon\Carbon;

class RosterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	Roster::create([


    			'start_date'=>Carbon::now(),
    			'end_date'=>Carbon::now()->addWeek()

    		]);


    	Roster::create([


    			'start_date'=>Carbon::now()->addWeek(),
    			'end_date'=>Carbon::now()->addWeeks(2)

    		]);
        
    }
}
