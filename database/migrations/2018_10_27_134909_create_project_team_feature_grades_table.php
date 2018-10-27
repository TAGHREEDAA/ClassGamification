<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTeamFeatureGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_team_feature_grades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_team_id')->unsigned();
            $table->integer('feature_grade_id')->unsigned();
            $table->integer('grade');

            $table->foreign('project_team_id')->references('id')->on('project_teams');
            $table->foreign('feature_grade_id')->references('id')->on('features_grades');
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
        Schema::dropIfExists('project_team_feature_grades');
    }
}
