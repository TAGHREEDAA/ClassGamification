<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=[
        'name',
        'code'
    ];

    function projects(){
        return $this->hasMany(Project::class);
    }
}
