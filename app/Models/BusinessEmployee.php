<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessEmployee extends Model
{
    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function business(){
        return $this->belongsTo(Business::class,'business_id','id');
    }
}