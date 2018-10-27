 <?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceRules extends Model
{
    /**
     * the attribute that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
    	'max_checkin_time', 'points'
    ];
}
