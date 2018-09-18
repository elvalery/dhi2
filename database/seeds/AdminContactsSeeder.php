<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Permission;


class AdminContactsSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    Permission::insert([
      [
        'name'        => 'Contacts',
        'slug'        => 'contacts',
        'http_method' => '',
        'http_path'   => "/content/contacts*",
      ]
    ]);

    Role::find(2)->permissions()->saveMany(
      [
        Permission::where(['slug' => 'contacts'])->first(),
      ]);

    Menu::insert([
      [
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
