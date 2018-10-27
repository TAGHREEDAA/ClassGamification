<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_homeworks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('rule_id');
            $table->integer('applied_points');
            $table->boolean('delivered_on_time')->default(true);
            $table->boolean('ignored')->default(false);
            $table->integer('delay_days');

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
        Schema::dropIfExists('student_homeworks');
    }
}
