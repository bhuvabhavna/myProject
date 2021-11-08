<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiStepController extends Controller
{
    public function view(){
    	return view('multi-step');
    }
     public function view1(){
    	return view('multi-step1');
    }
}
