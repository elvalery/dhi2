<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageToService extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('services', function (Blueprint $table) {
      $table->string('cover')->after('link');
      $table->string('image')->after('cover');
      $table->string('description')->after('image');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('services', function (Blueprint $table) {
      $table->dropColumn(['cover', 'image', 'description']);
    });
  }
}
