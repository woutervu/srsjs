<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserHasSubscriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('subscriptions', function(Blueprint $table)
      {
          $table->increments('id');
          $table->integer('category_id')->unsigned()->index();
          $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
          $table->boolean('subscribed');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subscriptions');
    }
}
