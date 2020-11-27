<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }
    public function course()
    {
        return $this->belongsToMany('App\Models\Course');
    }
    public function topics()
    {
        return $this->belongsToMany('App\Models\Topic', 'favorite_topic');
    }
}
