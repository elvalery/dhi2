<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoverImageToPortfolio extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('portfolios', function (Blueprint $table) {
      $table->date('completion_date')->after('services');
      $table->string('cover')->after('completion_date');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('portfolios', function (Blueprint $table) {
      $table->dropColumn(['cover', 'completion_date']);
    });
  }
}
