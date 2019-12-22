<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class LocalizedTables extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('news', function (Blueprint $table) {
      $table->string('title_ru');
      $table->string('description_ru');
      $table->text('content_ru');
    });

    Schema::table('jobs', function (Blueprint $table) {
      $table->string('name_ru');
      $table->string('details_ru');
    });

    Schema::table('categories', function (Blueprint $table) {
      $table->string('name_ru');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('news', function (Blueprint $table) {
      $table->dropColumn(['title_ru',  'description_ru', 'content_ru']);
    });

    Schema::table('jobs', function (Blueprint $table) {
      $table->dropColumn(['name_ru',  'details_ru']);
    });

    Schema::table('categories', function (Blueprint $table) {
      $table->dropColumn(['name_ru']);
    });

  }
}
