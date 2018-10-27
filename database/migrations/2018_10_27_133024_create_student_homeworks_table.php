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
            $table->integer('student_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->integer('points');
            $table->boolean('delivered_on_time')->default(true);
            $table->boolean('ignored')->default(false);
            $table->integer('delay_days_no');

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
        Schema::dropIfExists('student_homeworks');
    }
}
