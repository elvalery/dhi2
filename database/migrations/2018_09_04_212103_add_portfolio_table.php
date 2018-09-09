<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('portfolios', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('link')->unique();
        $table->string('category');
        $table->string('services')->nullable();
        $table->jsonb('images')->nullable();
        $table->longText('facts')->nullable();
        $table->longText('brief')->nullable();
        $table->longText('results')->nullable();
        $table->text('details')->nullable();

        $table->timestamps();
        $table->softDeletes();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('portfolios');
    }
}
