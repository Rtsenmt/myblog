<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDislikePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dislike_post', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('dislike_id')->unsigned();
            $table->integer('post_id')->unsigned();
            
            $table->timestamps();

            //Relations of the User and Category
            $table->foreign('dislike_id')->references('id')->on('dislikes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('post_id')->references('id')->on('posts')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
