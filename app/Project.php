<?php

namespace App;

use App\Course;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'course_id'
    ];

    public function course()
    {
    	return Course::where('id', $this->course_id)->first()
    }

    /**
     * Get the team
     * 
     * @return object
     */
    public function team()
    {
        return $this->hasOne('App\ProjectTeam');
    }
}
