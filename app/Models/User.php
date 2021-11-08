<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'address_id',        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function place(){
        return $this->hasOne(Address::class,'id','address_id');
        //return $this->hasOne(Address::class,'user_id','id');
        //return $this->belongsTo(Address::class,'address_id','id');
    }
    public function addresses(){
        return $this->hasMany(Address::class);
        //return $this->hasMany(Address::class,'id','address_id');
    }
     /*public function address(){
       return $this->belongsTo(Address::class);       
    }*/
    public function project(){
        return $this->belongsTo(Project::class);
    }
    //hasMAnyThrough Pivot
      public function projects(){
        return $this->belongsToMany(Project::class);
    }
    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
