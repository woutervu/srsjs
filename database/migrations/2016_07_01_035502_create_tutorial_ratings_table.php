<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tutorial_rating', function(Blueprint $table)
      {
          $table->integer('tutorial_id')->unsigned()->index();
          $table->foreign('tutorial_id')->references('id')->on('tutorials')->onDelete('cascade');
          $table->integer('user_id')->unsigned()->index();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->integer('rating');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tutorial_rating');
    }
}
