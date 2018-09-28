<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrderId extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('services', function (Blueprint $table) {
      $table->smallInteger('order_id')->after('link');
    });

    Schema::table('portfolios', function (Blueprint $table) {
      $table->smallInteger('order_id')->after('link');
    });

    Schema::table('jobs', function (Blueprint $table) {
      $table->smallInteger('order_id')->after('name');
    });

    Schema::table('news', function (Blueprint $table) {
      $table->timestamp('date')->after('title')->useCurrent();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('services', function (Blueprint $table) {
      $table->dropColumn(['order_id']);
    });
    Schema::table('portfolios', function (Blueprint $table) {
      $table->dropColumn(['order_id']);
    });
    Schema::table('jobs', function (Blueprint $table) {
      $table->dropColumn(['order_id']);
    });
    Schema::table('news', function (Blueprint $table) {
      $table->dropColumn(['date']);
    });
  }
}
