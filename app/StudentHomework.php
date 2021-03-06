<?php

namespace App;

use App\Rules;

use Illuminate\Database\Eloquent\Model;

class StudentHomework extends Model
{
    /**
     * the attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
    	'date', 'student_id', 'role_id', 'points', 'delivered_on_time', 
    	'ignored', 'delay_days_no'
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
     * for the role
     * 
     * @return object
     */
    public function role()
    {
    	return Rules::where('id', $this->role_id)->first();
    }
}
