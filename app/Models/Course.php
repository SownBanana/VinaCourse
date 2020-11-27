<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function instructor()
    {
        return $this->belongsTo('App\Models\Instructor');
    }
    public function students()
    {
        return $this->belongsToMany('App\Models\Student');
    }
    public function topics()
    {
        return $this->belongsToMany('App\Models\Topic');
    }
}