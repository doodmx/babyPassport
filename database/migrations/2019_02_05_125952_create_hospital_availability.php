<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalAvailability extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_availability', function (Blueprint $table) {


            $table->increments('id');
            $table->unsignedInteger('hospital_id');
            $table->enum('day',['mon','tue','wed','thu','fri','sat','sun']);
            $table->time('time_start');
            $table->time('time_end');


            $table->foreign('hospital_id')
                ->references('id')->on('hospital')
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
        Schema::dropIfExists('hospital_availability');
    }
}
