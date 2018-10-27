 <?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTeamFeatureGrade extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_team_id', 'feature_grade_id', 'grade'
    ];

    /**
     * Get Project Team
     * 
     * @return object
     */
    public function project_team()
    {
    	return ProjectTeam::where('id', $this->project_team_id)->first();
    }

    /**
     * Get the Featuere grade for the team project
     * 
     * @return object
     */
    public function feature_grade()
    {
    	return FeaturesGrades::where('id', $this->feature_grade_id)->first();
    }
}
