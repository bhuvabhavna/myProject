<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments(){
    	//return $this->belongsTo(Post::class);
    	return $this->hasMany(Comment::class);
    }
    public function tags(){
    	//return $this->belongsToMany(Tag::class,'post_tag','post_id','tag_id');
    	return $this->belongsToMany(Tag::class)->withTimestamps()->withPivot('status');
    }
}
