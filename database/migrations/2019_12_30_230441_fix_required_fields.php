<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class FixRequiredFields extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('services', function (Blueprint $table) {
      $table->string('name_ru')->nullable()->change();
      $table->string('description_ru')->nullable()->change();
      $table->text('details_ru')->nullable()->change();
    });

    Schema::table('portfolios', function (Blueprint $table) {
      $table->string('name_ru')->nullable()->change();
      $table->longText('facts_ru')->nullable()->change();
      $table->longText('brief_ru')->nullable()->change();
      $table->longText('results_ru')->nullable()->change();
      $table->text('details_ru')->nullable()->change();
    });

    Schema::table('news', function (Blueprint $table) {
      $table->string('title_ru')->nullable()->change();
      $table->string('description_ru')->nullable()->change();
      $table->text('content_ru')->nullable()->change();
    });

    Schema::table('jobs', function (Blueprint $table) {
      $table->string('name_ru')->nullable()->change();
      $table->string('details_ru')->nullable()->change();
    });

    Schema::table('categories', function (Blueprint $table) {
      $table->string('name_ru')->nullable()->change();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('services', function (Blueprint $table) {
      $table->string('name_ru')->change();
      $table->string('description_ru')->change();
      $table->text('details_ru')->change();
    });

    Schema::table('portfolios', function (Blueprint $table) {
      $table->string('name_ru')->change();
      $table->longText('facts_ru')->change();
      $table->longText('brief_ru')->change();
      $table->longText('results_ru')->change();
      $table->text('details_ru')->change();
    });

    Schema::table('news', function (Blueprint $table) {
      $table->string('title_ru')->change();
      $table->string('description_ru')->change();
      $table->text('content_ru')->change();
    });

    Schema::table('jobs', function (Blueprint $table) {
      $table->string('name_ru')->change();
      $table->string('details_ru')->change();
    });

    Schema::table('categories', function (Blueprint $table) {
      $table->string('name_ru')->change();
    });
  }
}
