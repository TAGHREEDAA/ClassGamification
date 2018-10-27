<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyFollowup extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id', 'tasks_degree', 'homework_total_degree', 
        'communication_total_degree'
    ];

    /**
     * for the student
     * 
     * @return object
     */
    public function student()
    {
    	return $this->belongsTo('App\User', 'student_id', 'id');
    }

    /**
     * Get the homework total degree for the student
     * 
     * @return int
     */
    public function homework_degree()
    {
    	$homeworks = StudentHomework::where('student_id', $this->student_id)->get();
    	$degrees = [];
    	foreach ($homeworks as $hw) {
    		array_push($degrees, $hw->points);
    	}

    	$total = 0;

    	for ($i=0; $i < count($degrees); $i++) { 
    		$total += $degrees[$i];
    	}

    	return $total;
    }

    /**
     * Get the communication total degree for the student
     * 
     * @return int
     */
    public function communication_degree()
    {
    	$comms = StudentCommunication::where('student_id', $this->student_id)->get();
    	$degrees = [];
    	foreach ($comms as $cm) {
    		array_push($degrees, $cm->points);
    	}

    	$total = 0;

    	for ($i=0; $i < count($degrees); $i++) { 
    		$total += $degrees[$i];
    	}

    	return $total;
    }
}