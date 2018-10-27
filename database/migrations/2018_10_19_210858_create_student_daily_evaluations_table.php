<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentDailyEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_daily_evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->integer('tasks_grades');
            $table->integer('homework_grades');
            $table->integer('attitude_grades');

            $table->foreign('student_id')->references('id')->on('users');
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
        Schema::dropIfExists('student_daily_evaluations');
    }
}
