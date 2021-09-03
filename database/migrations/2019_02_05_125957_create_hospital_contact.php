<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_contact', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('hospital_id');
            $table->string('contact');
            $table->enum('type', ["home_phone", "cell_phone", "office_phone", "email", "web"]);
            $table->timestamps();

            $table->foreign('hospital_id')
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
        Schema::dropIfExists('hospital_contact');
    }
}
