<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Category;

class AddPortfolioCategories extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('categories', function (Blueprint $table) {
      $table->increments('id');
      $table->string('slug');
      $table->string('name');
      $table->smallInteger('order_id');
      $table->timestamps();

      $table->unique('slug');
    });

    Schema::create('portfolio_category', function (Blueprint $table) {
      $table->integer('portfolio_id');
      $table->string('category_id');

      $table->timestamps();

      $table->index(['portfolio_id', 'category_id']);
    });

    Category::insert([
      ['name' => 'Consulting', 'slug' => 'consulting', 'order_id' => '10'],
      ['name' => 'Architecture', 'slug' => 'architecture', 'order_id' => '20'],
      ['name' => 'Interior Design', 'slug' => 'interior', 'order_id' => '30'],
      ['name' => 'Graphic Design', 'slug' => 'graphic', 'order_id' => '40'],
      ['name' => 'Navigation', 'slug' => 'navigation', 'order_id' => '50'],
      ['name' => 'Urban Planning', 'slug' => 'urban', 'order_id' => '60']
    ]);

    $portfolios = \App\Models\Portfolio::all();
    foreach ($portfolios as $item) {
      $item->categories()->save(Category::where(['slug' => $item->category])->first());
    }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('portfolio_category');
    Schema::dropIfExists('categories');
  }
}
