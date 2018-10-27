<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->timestamp('check_in_time');
            $table->unsignedInteger('attendance_rule_id');
            $table->integer('applied_points');

            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('attendance_rule_id')->references('id')->on('attendance_rules');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_attendances');
    }
}
