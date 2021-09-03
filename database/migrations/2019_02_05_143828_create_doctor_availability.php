<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorAvailability extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_availability', function (Blueprint $table) {


            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->enum('day',['mon','tue','wed','thu','fri','sat','sun']);
            $table->time('time_start');
            $table->time('time_end');


            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');


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
        Schema::dropIfExists('doctor_availability');
    }
}
