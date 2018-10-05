<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPortfolioPhotos extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('portfolio_photos', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('portfolio_id');
      $table->smallInteger('order_id');
      $table->string('link');
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
    Schema::dropIfExists('portfolio_photos');
  }
}
