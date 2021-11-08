<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Task;
use Hash;

class ProjectController extends Controller
{
    public function add_project(){
    	$project = Project::create([
    		'title' => 'Project B'
    	]);
    	/*Project::create([
    		'title' => 'Project B'
    	]);
    	Project::create([
    		'title' => 'Project C'
    	]);*/
        $user1 = User::create([
            'name'=>'user3',
            'email'=>'user3@gmail.com',
            'address_id'=>'2',
            'project_id'=> $project->id,
            'password'=>Hash::make('password'),
        ]);
        
        $user2 = User::create([
            'name'=>'user4',
            'email'=>'user4@gmail.com',
            'address_id'=>'2',
            'project_id'=> $project->id,
            'password'=>Hash::make('password'),
        ]);

        $user3 = User::create([
            'name'=>'user5',
            'email'=>'user5@gmail.com',
            'address_id'=>'2',
            'project_id'=> $project->id,
            'password'=>Hash::make('password'),
        ]);

        Task::create([
            'user_id'=>$user1->id,
            'title'=>'Task 4 for project B by users 3',         
        ]);
        Task::create([
            'user_id'=>$user2->id,
            'title'=>'Task 5 for project B by users 4',         
        ]);
        Task::create([
            'user_id'=>$user3->id,
            'title'=>'Task 3 for project B by users 3',         
        ]);
    }
    public function has_many_through(){
        $project = Project::find(1);
       return $project->task;
    }
    /*public function view_task(Request $req){
        return view('add');
     }
     public function add_task($id,Request $req){
        echo $id;
        echo '<pre>';
        print_r($req->title);
     }*/
}
