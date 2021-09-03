<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_item', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cart_id');
            $table->unsignedInteger('hospital_product_id');
            $table->integer('quantity');
            $table->decimal('discount', 10, 2)->nullable();
            $table->decimal('total', 10, 2);


            $table->foreign('cart_id')
                ->references('id')->on('cart')
                ->onDelete('cascade');

            $table->foreign('hospital_product_id')
                ->references('id')->on('hospital_product')
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
        Schema::dropIfExists('cart_item');
    }
}
