<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProjectGrades extends Model
{
    /**
     * the attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
    	'student_id', 'project_id', 'project_team_grade_id',
    	'personal_grade'
    ];

    /**
     * for the student 
     */
    public function student()
    {
    	return $this->belongsTo('App\User', 'student_id', 'id');
    }

    /**
     * Get the project
     * 
     * @return object
     */
    public function project()
    {
    	return $this->where('id', $this->project_id)->first();
    }

    /**
     * Get the project team grade
     * 
     * @return object
     */
    public function project_team_grade()
    {
    	return ProjectTeamGrade::where('id', $this->project_team_grade_id)->first();
    }
}
