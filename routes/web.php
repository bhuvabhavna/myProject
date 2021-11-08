<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Project1Controller;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MultiStepController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('add',[PostController::class,'addPost']);
Route::get('add/comment/{id}',[PostController::class,'addComment']);
Route::get('get/comment/{id}',[PostController::class,'getcommentbyId']);

Route::get('/user',[AddressController::class,'get_user']); //{
Route::get('/user/one_to_one',[AddressController::class,'get_user_one_to_one']);
Route::get('/user/one_to_many',[AddressController::class,'get_user_one_to_many']);
Route::get('/user/many_to_many',[TagController::class,'many_to_many_post']);
Route::get('/user/many_to_many_tag',[TagController::class,'many_to_many_tag']);



Route::get('/add/tag',[TagController::class,'add_tag']); 
Route::get('/add/project',[ProjectController::class,'add_project']);
Route::get('/add/task',[TaskController::class,'add_task']);
Route::get('/get/project',[ProjectController::class,'has_many_through']);
/*Route::get('/add',[ProjectController::class,'view_task']);
Route::post('/add/task/{id}',[ProjectController::class,'add_task'])->name('add.task');*/

//HasManyThrogh Pivot

Route::get('/add/project1',[Project1Controller::class,'add_project']);

Route::get('add/employee/',[EmployeeController::class,'addEmployee']);
Route::get('export-csv/',[EmployeeController::class,'ImportIntoCsv']);
Route::get('export-excel/',[EmployeeController::class,'exportIntoExcel']);

Route::get('view/multi-step/',[MultiStepController::class,'view']);
Route::get('view/multi-step1/',[MultiStepController::class,'view1']);
/*Route::get('/user',function(){	
	$users = App\Models\User::with('address')->get();
	//$users[0]->addresses()->create(['id'=>4,'country'=>'bhutan','user_id'=>$users[1]->id]);
	//App\Models\User::factory(10)->create();
	/*App\Models\Address::create([
		'user_id'=>1,
		'country'=>'India'
	]);
	App\Models\Address::create([
		'user_id'=>2,
		'country'=>'US'
	]);
	App\Models\Address::create([
		'user_id'=>3,
		'country'=>'UK'
	]);
	App\Models\Address::create([
		'user_id'=>4,
		'country'=>'Japan'
	]);*/
	/*dd($users); exit;*/
	/*echo '<pre>';
	print_r($users); exit;*/
	/*return view('index',compact('users'));
});  */
	//$users = User::all();
	/*echo '<pre>';
	print_r($users); exit;*/
	
//});
