<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveLinkPortfolio extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('portfolios', function (Blueprint $table) {
      $table->dropColumn('link');
    });
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('portfolios', function (Blueprint $table) {
      $table->string('link')->unique();
    });
  }
}
