<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('poster_intro');
            $table->mediumText('intro');
            $table->string('poster_image');
            $table->string('detail_image');
            $table->dateTime('date_to_publish')->useCurrent();
            $table->dateTime('date_to_expire')->default(null)->nullable();
            $table->tinyInteger('status')->default(0)->nullable();

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
        Schema::dropIfExists('blog');
    }
}
