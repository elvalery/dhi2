<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('services', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('link')->unique();
      $table->text('details');

      $table->timestamps();
      $table->softDeletes();

      $table->index(['link']);
    });

    Schema::create('portfolio_service', function (Blueprint $table) {
      $table->integer('portfolio_id');
      $table->integer('service_id');

      $table->timestamps();

      $table->index(['portfolio_id', 'service_id']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('portfolio_service');
    Schema::dropIfExists('services');
  }
}
