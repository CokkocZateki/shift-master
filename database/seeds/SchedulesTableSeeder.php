<?php

use Illuminate\Database\Seeder;
use App\Models\Schedule;
use Carbon\Carbon;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([

    		'date'=>Carbon::tomorrow(),
    		'day'=>Carbon::tomorrow()->format('l'),
    		'roster_id'=>1

    		]);
        
    }
}
