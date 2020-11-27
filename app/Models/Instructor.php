<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'introduce',
        'bio',
    ];

    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }
    public function course()
    {
        return $this->hasMany('App\Models\Course');
    }
    public function connects()
    {
        return $this->belongsToMany('App\Models\Connect');
    }
}
