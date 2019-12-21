<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Translations extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('services', function (Blueprint $table) {
      $table->string('name_ru');
      $table->string('description_ru');
      $table->text('details_ru');
    });

    Schema::table('portfolio', function (Blueprint $table) {
      $table->string('name_ru');
      $table->longText('facts_ru');
      $table->longText('brief_ru');
      $table->longText('results_ru');
      $table->text('details_ru');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('services', function (Blueprint $table) {
      $table->dropColumn(['name_ru',  'description_ru', 'details_ru']);
    });

    Schema::table('portfolio', function (Blueprint $table) {
      $table->dropColumn(['name_ru', 'facts_ru', 'brief_ru', 'results_ru', 'details_ru']);
    });
  }
}
