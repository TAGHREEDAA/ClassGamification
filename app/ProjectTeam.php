<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'no', 'name', 'project_id'
    ];

    /**
     * for the project
     * 
     * @return object
     */
    public function project()
    {
    	return $this->belongsTo('App\Project');
    }

}
