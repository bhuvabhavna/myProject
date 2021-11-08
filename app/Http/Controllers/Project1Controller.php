<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project1;
use App\Models\User;
use App\Models\Task;
use Hash;

class Project1Controller extends Controller
{
    //
    public function add_project(){
    	$project = Project1::find(1);
    	return $project->tasks;
    	/*$project1 = Project1::create([
    		'title' => 'Project A'
    	]);
    	$project2 = Project1::create([
    		'title' => 'Project B'
    	]);
    	$user1 = User::create([
            'name'=>'userA',
            'email'=>'userA@gmail.com',
            'address_id'=>'2',            
            'password'=>Hash::make('password'),
        ]);
        
        $user2 = User::create([
            'name'=>'userB',
            'email'=>'userB@gmail.com',
            'address_id'=>'2',          
            'password'=>Hash::make('password'),
        ]);

        $user3 = User::create([
            'name'=>'userC',
            'email'=>'userC@gmail.com',
            'address_id'=>'2',          
            'password'=>Hash::make('password'),
        ]);

        $project1->users()->attach($user1);
        $project1->users()->attach($user2);
        $project1->users()->attach($user3);

        $project2->users()->attach($user1);
        $project2->users()->attach($user3);*/

       /* Task::create([
        	'title' => 'Task A',
        	'user_id' => 1,
        ]);

        Task::create([
        	'title' => 'Task B',
        	'user_id' => 1,
        ]);

        Task::create([
        	'title' => 'Task C',
        	'user_id' => 2,
        ]);

        Task::create([
        	'title' => 'Task D',
        	'user_id' => 3,
        ]);*/
    }
}
