<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTeamGrade extends Model
{
    /**
     * the attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
    	'project_team_id', 'features_total_grades', 'delivered_on_time',
    	'ignored', 'delay_days_no'
    ];

    /**
     * Get the project team for the project team grade
     * 
     * @return object
     */
    public function project_team()
    {
    	return ProjectTeam::where('id', $this->project_team_id)->first();
    }

    /**
     * Get the total features grades
     * 
     * @return int
     */
    public function features_total_grades()
    {
    	$grades = ProjectFeatureGrade::where('project_team_id', $this->project_team_id)->get();
    	$degrees = [];
    	foreach ($grades as $gr) {
    		array_push($degrees, $gr->grade);
    	}

    	$total = 0;

    	for ($i=0; $i < count($degrees); $i++) { 
    		$total += $degrees[$i];
    	}

    	return $total;
    }
}
