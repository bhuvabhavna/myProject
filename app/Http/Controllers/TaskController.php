<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    //
    public function add_task(){
    	/*User::create([
    		'name'=>'user1',
    		'email'=>'user1@gmail.com',
    		'address'=>'3',
    		'project_id'=>
    	])*/
    	Task::create([
    		'user_id'=>1,
    		'title'=>'Task 1 for project A by Ubaldo ',    		
    	]);
    	Task::create([
    		'user_id'=>2,
    		'title'=>'Task 2 for project B by Reed',    		
    	]);
    	Task::create([
    		'user_id'=>3,
    		'title'=>'Task 3 for project C by Mr. Johnnie ',    		
    	]);
    	Task::create([
    		'user_id'=>4,
    		'title'=>'Task 4 for project D by Lenna ',    		
    	]);
    	Task::create([
    		'user_id'=>31,
    		'title'=>'Task 5 for project D by users 1',    		
    	]);
    	Task::create([
    		'user_id'=>32,
    		'title'=>'Task 6 for project E by users 2',    		
    	]);
    	Task::create([
    		'user_id'=>33,
    		'title'=>'Task 7 for project E by users 3',    		
    	]);
    }
}
