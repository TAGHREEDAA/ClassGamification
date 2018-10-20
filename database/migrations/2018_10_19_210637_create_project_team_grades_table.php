<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTeamGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_team_grades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('features_total_grades');
            $table->boolean('delivered_on_time')->default(true);
            $table->boolean('ignored')->default(false);
            $table->integer('delay_days');

            $table->unsignedInteger('project_team_id');


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
        Schema::dropIfExists('project_team_grades');
    }
}
