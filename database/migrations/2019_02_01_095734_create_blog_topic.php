<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTopic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_topic', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('blog_id');
            $table->string('title');
            $table->mediumText('content');
            $table->timestamps();

            $table->foreign('blog_id')
                ->references('id')->on('blog')
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
        Schema::dropIfExists('blog_topic');
    }
}
