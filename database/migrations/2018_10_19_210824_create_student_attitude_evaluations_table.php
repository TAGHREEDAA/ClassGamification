<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAttitudeEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_attitude_evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('rule_id');
            $table->integer('applied_points');

            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('rule_id')->references('id')->on('rules');

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
        Schema::dropIfExists('student_attitude_evaluations');
    }
}
