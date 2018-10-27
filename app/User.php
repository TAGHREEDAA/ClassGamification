<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *            $table->foreign('attendance_role_id')->references('id')->on('attendance_rules');
     * $table->foreign('role_id')->references('rules')->on('id');
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the attendance for the student
     * 
     * @return object
     */
    public function student_attendance()
    {
        return $this->hasMany('App\StudentAttendance');
    }

    /**
     * Get the homework for the student
     * 
     * @return object
     */
    public function homework()
    {
        return $this->hasMany('App\StudentHomework');
    }

    /**
     * Get thr communication for the student
     * 
     * @return object
     */
    public function communication()
    {
        return $this->hasMany('App\StudentCommunication');
    }

    /**
     * Get the project grades
     *
     * @return object
     */
    public function project_grades()
    {
        return $this->hasMany('App\StudentProjectGrades');
    }
}
