<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_profile', function (Blueprint $table) {

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('hospital_id')->nullable();
            $table->unsignedInteger('rating_id');
            $table->string('photo')->nullable();
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('appointment_duration');
            $table->text('about_me');


            $table->primary('user_id');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('hospital_id')
                ->references('id')->on('hospital')
                ->onDelete('cascade');

            $table->foreign('rating_id')
                ->references('id')->on('hospital')
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
        Schema::dropIfExists('doctor_profile');
    }
}
