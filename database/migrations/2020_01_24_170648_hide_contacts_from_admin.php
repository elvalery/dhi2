<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Role;

class HideContactsFromAdmin extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Menu::find(11)->roles()->detach([2, 1]);
    Menu::find(11)->delete();
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Menu::insert([
      [
        'íd' => 11,
        'parent_id' => 0,
        'order'     => 11,
        'title'     => 'Contacts',
        'icon'      => 'fa-comments-o',
        'uri'       => '/content/contacts',
      ],

    ]);

    // add role to menu.
    Menu::find(11)->roles()->saveMany([Role::find(2), Role::find(1)]);
  }
}
