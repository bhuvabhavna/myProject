<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';
     protected $fillable = [
        'user_id',
        'country',        
    ];

    public function user(){
    	return $this->belongsTo(User::class,'user_id','id');
    }
    public function users(){
    	return $this->hasMany(User::class);
    }
}