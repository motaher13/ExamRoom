<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WrittenA extends Model
{
    protected $guarded = [
        'id'
    ];

    public function answer(){
        return $this->belongsTo(Answer::class, 'answer_id', 'id');
    }
}