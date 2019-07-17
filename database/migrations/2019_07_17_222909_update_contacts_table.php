<?php

use App\Models\Action;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateContactsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::dropIfExists('contacts');
    Schema::create('contacts', function (Blueprint $table) {
      $table->increments('id');
  
      $table->string('email');
      $table->string('phone')->nullable();
      $table->string('file')->nullable();
      $table->string('path')->nullable();
      $table->text('description')->nullable();
  
      $table->timestamps();
    });
  
    Schema::create('actions', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->integer('order_id');
    
      $table->timestamps();
    });
  
    Schema::create('contact_action', function (Blueprint $table) {
      $table->integer('contact_id');
      $table->string('action_id');
    
      $table->timestamps();
    
      $table->index(['contact_id', 'action_id']);
    });
  
    Action::insert([
      ['name' => 'Request BIM model', 'order_id' => '10'],
      ['name' => 'Write me', 'order_id' => '20'],
      ['name' => 'Get Quote', 'order_id' => '30'],
      ['name' => 'Request drawing sample', 'order_id' => '40'],
      ['name' => 'Call me', 'order_id' => '50'],
    ]);
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('actions');
    Schema::dropIfExists('contacts');
    Schema::create('contacts', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('contacts');
      $table->string('type');
    
      $table->timestamps();
    });
  }
}
