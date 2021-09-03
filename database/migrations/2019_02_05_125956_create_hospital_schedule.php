<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_schedule', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('hospital_id');
            $table->unsignedInteger('pacient_id');
          
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->foreign('hospital_id')
                ->references('id')->on('hospital')
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
        Schema::dropIfExists('hospital_schedule');
    }
}
