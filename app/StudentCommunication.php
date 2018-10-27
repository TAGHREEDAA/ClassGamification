<?php

namespace App;

use App\Rules;

use Illuminate\Database\Eloquent\Model;

class StudentCommunication extends Model
{
    /**
     * The attributes that are mass assigned
     * 
     * @var array
     */
    protected $fillable = [
    	'student_id', 'role_id', 'points'
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
