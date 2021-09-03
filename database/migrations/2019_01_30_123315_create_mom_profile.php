<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMomProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mom_profile', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->string('phone')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('job')->nullable();
            $table->string('pregnancy_week')->nullable();
            $table->text('how_found')->nullable();
            $table->text('about_me')->nullable();

            $table->primary('user_id');

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
        Schema::dropIfExists('mom_profile');
    }
}
