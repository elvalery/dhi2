<?php

use Illuminate\Database\Migrations\Migration;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Permission;

class AdminMenuFix extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Permission::insert([
      [
        'name' => 'Category',
        'slug' => 'category',
        'http_method' => '',
        'http_path' => "/content/category*",
      ]
    ]);

    Role::find(2)->permissions()->saveMany(
      [
        Permission::where(['slug' => 'category'])->first(),
      ]);

    Menu::insert([
      [
        'parent_id' => 0,
        'order' => 13,
        'title' => 'Category',
        'icon' => 'fa-database',
        'uri' => '/content/category',
      ],
    ]);

    // add role to menu.
    Menu::find(13)->roles()->saveMany([Role::find(2), Role::find(1)]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    //
  }
}
