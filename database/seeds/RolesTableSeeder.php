<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	Role::create([

    			'role'=>'superadmin'
    		]);

    	Role::create([

    			'role'=>'Franchise'
    		]);

    	Role::create([

    			'role'=>'Resturant General Manager'
    		]);

    	Role::create([

    			'role'=>'Supervisor'
    		]);

    	Role::create([

    			'role'=>'Team Member'
    		]);
        
    }
}
