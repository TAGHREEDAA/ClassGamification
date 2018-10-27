<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
    	'student_id', 'attendance_role_id', 'check_in_time', 'actual_points'
    ];

    /**
     * Get the studet
     * 
     * @return object
     */
    public function student()
    {
    	return $this->belongsTo('App\User', 'student_id', 'id');
    }

    /**
     * Get the attendance role
     * 
     * @return object
     */
    public function attendance_role()
    {
    	return AttendanceRules::where('id', $this->attendance_role_id)->first();
    }
}
