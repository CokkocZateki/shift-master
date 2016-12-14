<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        User::create([

            'username'=>'user1',
            'email'=>'user1@gmail.com',
            'password'=>bcrypt('user1'),
            'role_id'=>1

            ]);

    	User::create([

    		'username'=>'user2',
    		'email'=>'user2@gmail.com',
    		'password'=>bcrypt('user2'),
            'role_id'=>2

    		]);

        User::create([

            'username'=>'user3',
            'email'=>'user3@gmail.com',
            'password'=>bcrypt('user3'),
            'role_id'=>3

            ]);


        User::create([

            'username'=>'user4',
            'email'=>'user4@gmail.com',
            'password'=>bcrypt('user4'),
            'role_id'=>4

            ]);


        User::create([

            'username'=>'user5',
            'email'=>'user5@gmail.com',
            'password'=>bcrypt('user5'),
            'role_id'=>5

            ]);

           
        
    }
}
