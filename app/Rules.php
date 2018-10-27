<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
    	'name', 'points', 'type'
    ];
}
