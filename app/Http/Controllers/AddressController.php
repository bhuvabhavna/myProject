<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;

class AddressController extends Controller
{
    public function get_user(){
    	$users = User::all();    	
        return view('index',compact('users'));
    
    }
    public function get_user_one_to_one(){
    	$users = User::all();
    	return view('index',compact('users'));
    }
    public function get_user_one_to_many(){
    	$addresses = Address::all();
    	$users = User::all();
    	return view('one_to_many',compact('users','addresses'));
    }
    
}
