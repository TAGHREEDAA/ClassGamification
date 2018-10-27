<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamFeatureGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_feature_grades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("grade");
            $table->unsignedInteger('project_team_id');
            $table->unsignedInteger('project_feature_id');


            $table->foreign('project_feature_id')->references('id')->on('project_features');
            $table->foreign('project_team_id')->references('id')->on('project_teams');
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
        Schema::dropIfExists('team_feature_grades');
    }
}
