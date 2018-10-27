<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMembers extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_team_id', 'student_id'
    ];

    /**
     * Get the team
     * 
     * @return object
     */
    public function project_team()
    {
    	return ProjectTeam::where('id', $this->project_team_id)->first();
    }

    /**
     * Get the student id
     * 
     * @return object
     */
    public function student()
    {
    	return User::where('id', $this->student_id)->first();
    }
}
