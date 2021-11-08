<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;
class TagController extends Controller
{
    //
     public function add_tag(){     	
    	/*$tag = new Tag();
    	$tag->name = 'First tag';   
    	$tag->save($tag);  

    	$tag = [
	    			['name'=>'First Tag'],
	    			['name'=>'Second Tag'],
	    			['name'=>'Third Tag'],
	    			['name'=>'Fourth Tag'],
    		   ];
    	Tag::insert($tag);*/

    	$tag = Tag::first();

    	$post = Post::first();
    	/*$post->tags()->attach([
    		1 =>[
    			'status'=>'approved'
    		] 
    	]);*/
    	dd($post->tags->first()->pivot->status);
    	//$post->tags()->attach($tag);
    	//$post->tags()->attach([2,3,4]);
    	/*$post->tags()->detach();*/
    	//$post->tags()->attach([2,3]);
    	//$post->tags()->sync([1,4]);

    	//$post->comments()->save($tag);    	  	
    }
    public function many_to_many_post(){
    	$posts = Post::all();       
        return view('many_to_many',compact('posts'));
    }
    public function many_to_many_tag(){
    	$tags = Tag::all();       
        return view('many_to_many_tag',compact('tags'));
    }
}
