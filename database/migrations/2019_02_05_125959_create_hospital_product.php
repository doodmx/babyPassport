<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_product', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('hospital_id');
            $table->unsignedInteger('product_id');
            $table->decimal('price', 10, 2);
            $table->decimal('deposit', 10, 2)->nullable();


            $table->timestamps();


            $table->foreign('hospital_id')
                ->references('id')->on('hospital')
                ->onDelete('cascade');

            $table->foreign('product_id')
                ->references('id')->on('product')
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
        Schema::dropIfExists('hospital_product');
    }
}
