<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class FixPortfolio extends Migration {

  public function __construct() {
    DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('json', 'text');
  }

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('portfolios', function (Blueprint $table) {
      $table->string('page_link', 100);
      $table->renameColumn('order_id', 'order');
    });

  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('portfolios', function (Blueprint $table) {
      $table->dropColumn('page_link');
      $table->renameColumn('order', 'order_id');
    });
  }
}
