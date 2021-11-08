<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function addPost(){
    	$post = new Post();
    	$post->title = 'Second title';
    	$post->body = 'Second Post Title';
    	$post->save();
    }
     public function addComment($id){
     	$post = Post::find($id);
    	$comment = new Comment();
    	$comment->comment = 'First Comment title';
    	$post->comments()->save($comment);
    }
    public function getcommentbyId($id){
        $comments = Post::all();
        return view('post',compact('comments'));
    }


}
