<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Project1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',       
    ];
    protected $table = 'project1';

    public function users(){
    	return $this->belongsToMany(User::class);
    }
    public function tasks(){
    	return $this->hasManyThrough(Task::class,User::class,'project_id','user_id','id');
    }
    public function task(){
    	return $this->hasOneThrough(Task::class,User::class,'project_id','user_id','id');
    }

    //$queries = DB::getQueryLog();
    //DB::connection()->enableQueryLog();
}
