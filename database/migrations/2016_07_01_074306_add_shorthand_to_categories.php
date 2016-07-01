<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddShorthandToCategories extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('categories', function ($table) {
      $table->string('shorthand')->after('title');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('categories', function ($table) {
      $table->dropColumn('shorthand');
    });

  }
}
