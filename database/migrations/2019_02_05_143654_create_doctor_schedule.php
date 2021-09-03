<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_schedule', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('doctor_id');
            $table->unsignedInteger('pacient_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->foreign('doctor_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('pacient_id')
                ->references('id')->on('users')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_schedule');
    }
}
