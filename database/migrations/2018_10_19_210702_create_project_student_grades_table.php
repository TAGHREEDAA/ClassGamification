<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectStudentGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_student_grades', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('project_id');
            $table->unsignedInteger('project_team_grade_id');
            $table->integer('personal_grade');

            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('project_team_grade_id')->references('id')->on('project_team_grades');
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
        Schema::dropIfExists('project_student_grades');
    }
}
