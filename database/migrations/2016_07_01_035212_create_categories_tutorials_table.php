<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTutorialsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('tutorial_category', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('tutorial_id')->unsigned()->index();
      $table->foreign('tutorial_id')->references('id')->on('tutorials')->onDelete('cascade');
      $table->integer('category_id')->unsigned()->index();
      $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('tutorial_category');
  }
}
